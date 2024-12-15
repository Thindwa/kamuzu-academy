@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container">
                        <h2>News Posts</h2>
                        <div class="lead">
                            Manage your News posts here.
                            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right">Add news post</a>
                        </div>

                        <div class="mt-2">
                            @include('layouts.partials.messages')
                        </div>

                        <table class="table table-bordered table-responsive-sm">
                            <tr>
                                <th>Images</th>
                                <th>Title</th>
                                <th width="3%" colspan="3">Action</th>
                            </tr>
                            @foreach ($posts as $key => $post)
                                <tr>
                                    <td>
                                        @if ($post->images && is_array($post->images))
                                            @foreach ($post->images as $image)
                                                @if (is_string($image))
                                                    <img src="{{ asset('storage/uploads/news/' . $image) }}"
                                                        alt="Post Image" style="max-height: 30px; margin-right: 5px;">
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('posts.show', $post->id) }}">Show</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                    </td>
                                    @can('posts.destroy')
                                        <td>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </table>

                        <div class="d-flex">
                            {!! $posts->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
