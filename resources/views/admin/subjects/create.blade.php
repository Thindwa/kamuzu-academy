

@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container mt-2">
                        <h1 class="py-4">Add New Subject</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('subjectscontent.store') }}" method="POST" onsubmit="return validateForm()">
                            @csrf

                            <div class="mb-3">
                                <label for="subject_name" class="form-label">Subject Name:</label>
                                <input type="text" class="form-control" id="subject_name" name="subject_name"
                                    value="{{ old('subject_name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content:</label>
                                <textarea class="form-control summernote" id="content" name="content">{{ old('content') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Subject</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
