@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                    <h1>Add New Leadership Member</h1>
                    <div class="lead">
                        Create a new leadership entry.
                    </div>

                    <div class="mt-2">
                        @include('layouts.partials.messages')
                    </div>

                   
    <form method="POST" action="{{ route('leadership.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ old('name') }}" 
                   type="text" 
                   class="form-control" 
                   name="name" 
                   placeholder="Name" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input value="{{ old('position') }}" 
                   type="text" 
                   class="form-control" 
                   name="position" 
                   placeholder="Position" required>
        </div>

        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" name="bio" rows="4" >{{ old('bio') }}</textarea>
        </div>

        <div class="form-group">
            <label for="message">Message (Optional)</label>
            <textarea class="form-control" name="message" rows="4">{{ old('message') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Profile Image (Optional)</label>
            <input type="file" class="form-control-file" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Save Leader</button>
        <a href="{{ route('leadership.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
