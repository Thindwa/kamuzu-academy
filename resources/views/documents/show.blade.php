@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <h1>{{ $document->name }}</h1>

                    <p>File: <a href="{{ asset('storage/' . $document->file_path) }}" class="btn btn-primary"
                            download="{{ $document->name }}.pdf">Download PDF</a></p>

                    {{-- Display other document details --}}

                    <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-warning">Edit Document</a>
                    <a href="{{ route('documents.index') }}" class="btn btn-secondary">Back to Documents</a>

                </div>
            </div>
        </div>
    </div>
@endsection
