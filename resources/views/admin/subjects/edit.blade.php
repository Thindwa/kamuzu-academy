

@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
             <div class="container mt-2">
        <h1 class="py-4">Edit Subject: {{ $subject->subject_name }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('subjectscontent.update', $subject->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="subject_name">Subject Name:</label>
                <input type="text" class="form-control" id="subject_name" name="subject_name" value="{{ $subject->subject_name }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="content">Content:</label>
                <textarea class="form-control summernote" id="content" name="content">{{ $subject->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Subject</button>
        </form>
    </div>
        </div>
    </div>
@endsection


