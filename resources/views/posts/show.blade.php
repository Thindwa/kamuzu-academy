@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">

                    <div class="container mt-4">
                        <h2 class="pb-5">News post</h2>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Images</th>
                                    <td>
                                        @if ($post->images && is_array($post->images))
                                            @foreach ($post->images as $image)
                                                @if (is_string($image))
                                                    <img src="{{ asset('storage/uploads/news/' . $image) }}" alt="Post Image"
                                                        style="max-height: 30px; margin-right: 5px;">
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Title</th>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td>{{ $post->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Body</th>
                                    <td>{!! $post->body !!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-4">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
