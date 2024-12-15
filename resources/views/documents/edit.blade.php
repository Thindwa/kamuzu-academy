@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <h1>Edit Document</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('documents.update', $document) }}" method="POST" enctype="multipart/form-data"
                        class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" value="{{ old('name', $document->name) }}"
                                class="form-control" required>
                            <div class="invalid-feedback">
                                Please enter a name.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">File (PDF only):</label>
                            <input type="file" name="file" class="form-control" accept=".pdf">
                            <div class="invalid-feedback">
                                Please choose a PDF file.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Document</button>
                        <a href="{{ route('documents.show', $document) }}" class="btn btn-secondary">Back to Document</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
