<!-- resources/views/policies/index.blade.php -->
@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <h1>Policies</h1>
                <a href="{{ route('policies.create') }}" class="btn btn-primary mb-3">Upload New Policy</a>

                <div class="row">
                    @foreach ($policies as $policy)
                        <div class="col-md-3">
                            <a href="{{ Storage::url($policy->file_path) }}" target="_blank">
                                <div class="card mb-4">
                                    <p class="card-title text-center text-dark">{{ $policy->title }}</p>
                                    <img src="{{ url('images/pdf1.svg') }}" class="card-img" alt="PDF icon">
                                </div>
                            </a>
                            
                            <a href="{{ route('policies.edit', $policy->id) }}" class="btn btn-sm btn-secondary">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('policies.destroy', $policy->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this policy?')">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
