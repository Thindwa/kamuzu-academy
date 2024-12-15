@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <h1>Hierarchy Members</h1>
                    <a href="{{ route('hierarchy.create') }}" class="btn btn-primary mb-3">Add Member</a>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- ... (previous code) ... -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                // Sort hierarchies array by name
                                $sortedHierarchies = $hierarchies->sortBy('name');
                            @endphp

                            @foreach ($sortedHierarchies as $hierarchy)
                                <tr>
                                    <td>{{ $hierarchy->name }}</td>
                                    <td>{{ $hierarchy->position }}</td>
                                    <td>
                                        <a href="{{ route('hierarchy.edit', $hierarchy) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('hierarchy.destroy', $hierarchy) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- ... (remaining code) ... -->

                </div>
            </div>
        </div>
    </div>
@endsection
