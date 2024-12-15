@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <h1>Documents</h1>

                    <table class="table table-bordered table-hover mx-auto">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documents as $document)
                                <tr>
                                    <td>{{ $document->name }}</td>
                                    <td>
                                        <a href="{{ route('documents.show', $document) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('documents.edit', $document) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('documents.destroy', $document) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this document?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ route('documents.create') }}" class="btn btn-success">Create New Document</a>
                </div>
            </div>
        </div>
    </div>
@endsection
