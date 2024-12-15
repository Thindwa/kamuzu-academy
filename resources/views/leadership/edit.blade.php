@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                    <h1>Edit Leadership Member</h1>
                    <div class="lead">
                        Edit leadership details.
                    </div>

                    <div class="mt-2">
                        @include('layouts.partials.messages')
                    </div>

                  <form method="POST" action="{{ route('leadership.update', $leadership->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ old('name', $leadership->name) }}" 
                   type="text" 
                   class="form-control" 
                   name="name" 
                   placeholder="Name" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input value="{{ old('position', $leadership->position) }}" 
                   type="text" 
                   class="form-control" 
                   name="position" 
                   placeholder="Position" required>
        </div>

        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" name="bio" rows="4" >{{ old('bio', $leadership->bio) }}</textarea>
        </div>

        <div class="form-group">
            <label for="message">Message (Optional)</label>
            <textarea class="form-control" name="message" rows="4">{{ old('message', $leadership->message) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Profile Image (Optional)</label>
            <input type="file" class="form-control-file" name="image">
            @if($leadership->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $leadership->image) }}" alt="{{ $leadership->name }}" width="100">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Leader</button>
        <a href="{{ route('leadership.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
