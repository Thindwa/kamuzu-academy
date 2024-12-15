@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <h1>Edit Policy</h1>
              
                
                <form action="{{ route('policies.update', $policy->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="title">Policy Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $policy->title }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="file">Upload New PDF (optional)</label>
                        <input type="file" name="file" id="file" class="form-control" accept=".pdf">
                    </div>

                     <div class="d-flex justify-content-start gap-2">
                      
                        <button type="submit" class="btn btn-primary">Update Policy</button>
                          <a href="{{ route('policies.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
