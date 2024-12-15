@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container mt-4">
                        @include('layouts.partials.messages')
                        <h2>Add news post</h2>
                        <div class="lead">
                            Add news post.
                        </div>

                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input value="{{ old('title') }}" type="text" class="form-control" name="title"
                                    placeholder="Title" required>
                                @if ($errors->has('title'))
                                    <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="images" class="form-label">Image</label>
                                <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                                @if ($errors->has('images'))
                                    <span class="text-danger text-left">{{ $errors->first('images') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control summernote" name="body" placeholder="Body" required>{{ old('body') }}</textarea>
                                @if ($errors->has('body'))
                                    <span class="text-danger text-left">{{ $errors->first('body') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Save Post</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
