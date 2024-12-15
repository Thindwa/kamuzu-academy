@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                    <h1>Leadership</h1>
                    <div class="lead">
                        Manage your leaders here.
                        <a href="{{ route('leadership.create') }}" class="btn btn-primary btn-sm float-right">Add new leader</a>
                    </div>

                    <div class="mt-2">
                        @include('layouts.partials.messages')
                    </div>

                    <table class="table table-striped table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">#</th>
                                <th scope="col" width="15%">Name</th>
                                <th scope="col" width="15%">Position</th>
                                <th scope="col">Bio</th>
                                <th scope="col" width="10%">Image</th>
                                <th scope="col" width="1%" colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leaderships as $leader)
                                <tr>
                                    <th scope="row">{{ $leader->id }}</th>
                                    <td>{{ $leader->name }}</td>
                                    <td>{{ $leader->position }}</td>
                                    <td>{{ Str::limit($leader->bio, 50) }}</td>
                                    <td>
                                        @if($leader->image)
                                            <img src="{{ asset('storage/' . $leader->image) }}" alt="{{ $leader->name }}" width="50">
                                        @else
                                            N/A
                                        @endif
                                    </td>

                                    <td><a href="{{ route('leadership.edit', $leader->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td>
                                        <form action="{{ route('leadership.destroy', $leader->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
