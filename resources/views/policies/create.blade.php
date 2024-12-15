@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <h1>Upload Policy</h1>
                <form action="{{ route('policies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Policy Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="file">Upload PDF</label>
                        <input type="file" name="file" id="file" class="form-control" accept=".pdf" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Policy</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
