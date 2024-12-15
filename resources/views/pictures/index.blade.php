

@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                       <div class="row">
            <div class="col-md-12">
                <!-- Picture Gallery Card -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>NOTABLE ACHIEVEMENTS (A*/A grades) IGCSE
                            <a href="{{ route('results.index') }}" class="btn btn-danger float-end">Back</a>
                        </h5>
                    </div>

                    <!-- Success and Error Alerts -->
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <div class="card-body">
                        <!-- File Upload Form -->
                        <form id="fileupload" action="{{ route('pictures.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body pb-2">
                                    <div class="fileupload-buttonbar mb-2">
                                        <div class="d-block d-lg-flex align-items-center">
                                            <span class="btn btn-outline-theme fileinput-button me-2 mb-1">
                                                <i class="fa fa-fw fa-plus"></i>
                                                <span>Add files...</span>
                                                <input type="file" name="file[]" multiple id="file-input">
                                            </span>

                                            <button type="submit" class="btn btn-outline-default me-2 mb-1"
                                                id="start-upload" style="display:none;">
                                                <i class="fa fa-fw fa-upload"></i>
                                                <span>Start upload</span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Upload progress bar -->
                                    <div id="progress" class="progress" style="display: none;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" style="width: 0%;">0%</div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Picture table -->
                        <form id="deleteForm" action="{{ route('pictures.deleteMultiple') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="table-responsive text-nowrap">
                                <table class="table table-card mb-0 fs-13px">
                                    <thead>
                                        <tr class="fs-12px">
                                            @if ($pictures->isNotEmpty())
                                            <button type="submit" class="btn btn-danger mt-3">Delete Selected</button>
                                            @endif
                                            <th class="pt-4 pb-2 w-5 d-flex align-items-center">
                                                <span class="me-2">All</span>
                                                <input type="checkbox" id="select-all">
                                            </th>
                                            <th class="pt-2 pb-2 w-25">PREVIEW</th>
                                            <th class="pt-2 pb-2 w-25">FILENAME</th>
                                            <th class="pt-2 pb-2 w-25">SIZE</th>
                                            <th class="pt-2 pb-2 w-25">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody class="files">

                                        @foreach ($pictures as $picture)
                                        <tr id="picture-{{ $picture->id }}">
                                            <td class="p-2">
                                                <input type="checkbox" name="picture_ids[]" value="{{ $picture->id }}">
                                            </td>
                                            <td class="p-2">
                                                <img src="{{ asset('storage/' . $picture->url) }}"
                                                    alt="{{ $picture->name }}" style="height: 50px; object-fit: cover;">
                                            </td>
                                            <td class="p-2">{{ $picture->name }}</td>
                                            <td class="p-2">
                                                @php
                                                $filePath = storage_path('app/public/' . $picture->url);
                                                $fileSize = file_exists($filePath) ? filesize($filePath) : 0;
                                                $fileSizeInKB = $fileSize / 1024;
                                                $fileSizeFormatted = ($fileSizeInKB > 1024) ?
                                                number_format($fileSizeInKB / 1024, 2) . ' MB' :
                                                number_format($fileSizeInKB, 2) . ' KB';
                                                @endphp
                                                {{ $fileSizeFormatted }}
                                            </td>
                                            <td class="p-2">
                                                <button class="btn btn-danger delete-btn"
                                                    data-id="{{ $picture->id }}">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>

                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Select all checkboxes
        document.getElementById('select-all').addEventListener('click', function(event) {
            const checkboxes = document.querySelectorAll('input[name="picture_ids[]"]');
            checkboxes.forEach(checkbox => checkbox.checked = event.target.checked);
        });

        // Handle file input preview and upload
        document.getElementById('file-input').addEventListener('change', function() {
            const input = this;
            const fileTableBody = document.querySelector('.files');
            const startUploadButton = document.getElementById('start-upload');

            // Clear previous previews in the table
            fileTableBody.querySelectorAll('.file-preview').forEach(row => row.remove());

            // Process each selected file
            Array.from(input.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const fileSize = (file.size / 1024).toFixed(2) + ' KB'; // File size in KB
                    const newRow = `
                        <tr class="file-preview">
                            <td class="p-2">
                                <input type="checkbox" name="file_ids[]" value="${file.name}">
                            </td>
                            <td class="p-2">
                                <img src="${e.target.result}" alt="${file.name}" style="height: 50px; object-fit: cover;">
                            </td>
                            <td class="p-2">${file.name}</td>
                            <td class="p-2">${fileSize}</td>
                            <td class="p-2">
                                <button class="btn btn-danger delete-preview-btn" data-filename="${file.name}">Remove</button>
                            </td>
                        </tr>
                    `;
                    fileTableBody.insertAdjacentHTML('beforeend', newRow);
                };
                reader.readAsDataURL(file);
            });

            // Show the upload button after previewing files
            startUploadButton.style.display = 'block';
        });

        // Handle Remove Preview
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('delete-preview-btn')) {
                e.target.closest('tr').remove();
            }
        });

        // Handle Delete Picture
        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var uniqueId = '#picture-' + id;

            if (confirm('Are you sure you want to delete this picture?')) {
                $.ajax({
                    url: '/pictures/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $(uniqueId).remove();
                            if ($('.files tr').length === 0) {
                                $('.files').append('<tr class="empty-row"><td colspan="5" class="text-center p-3"><div class="text-inverse text-opacity-30 mb-2"><i class="fa fa-file-archive fa-3x"></i></div>No file uploaded</td></tr>');
                            }
                        } else {
                            alert('Failed to delete the picture.');
                        }
                    },
                    error: function() {
                        alert('Error occurred while deleting the picture.');
                    }
                });
            }
        });

        // Automatically fade out success and error alerts
        document.addEventListener('DOMContentLoaded', function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
        setTimeout(() => {
        alert.style.transition = 'opacity 0.5s';
        alert.style.opacity = '0';
        setTimeout(() => {
        alert.remove();
        }, 500); // Match this with the CSS transition duration
        }, 1000); // Duration before fading out (in milliseconds)
        });
        });
    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
