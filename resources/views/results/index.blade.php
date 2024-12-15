

@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-3">
                    <div class="card-header">
                      
                        <a href="{{ route('results.create') }}" class="btn btn-info">Add New Result</a>
                        <a href="{{ route('pictures.index') }}" class="btn btn-primary float-end">Add Achievers</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Subjects & Grades</th>
                                    <th>Overall Grade</th> <!-- New column for Overall Grade -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                <tr>
                                    <td>{{ $result->category }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($result->subjects as $subject)
                                            <li>{{ $subject->subject_name }}: {{ $subject->grade }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ $result->overall_grade }}</td> <!-- Display Overall Grade -->
                                    <td>
                                        <a href="{{ route('results.edit', $result->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('results.destroy', $result->id) }}" method="POST"
                                            style="display:inline;">
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
            </div>
        </div>
    </div>
</div>
@endsection
