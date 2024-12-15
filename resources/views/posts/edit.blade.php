@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container mt-4">

                        <h2>Update news post</h2>
                        <div class="lead">
                            Edit news post.
                        </div>

                        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input value="{{ $post->title }}" type="text" class="form-control" name="title"
                                    placeholder="Title" required>

                                @if ($errors->has('title'))
                                    <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" placeholder="Description">{{ $post->description }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="images[]" multiple>

                                @if ($errors->has('image'))
                                    <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                                @endif
                            </div>

                            @if ($post->image)
                                <div class="mb-3">
                                    <label>Current Image:</label>
                                    <img src="{{ asset('storage/uploads/news/' . $post->image) }}" alt="Current Image"
                                        class="img-fluid" style="max-height: 50px">
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea type="text" class="form-control summernote" name="body" placeholder="Body" required>{{ $post->body }}</textarea>

                                @if ($errors->has('body'))
                                    <span class="text-danger text-left">{{ $errors->first('body') }}</span>
                                @endif
                            </div>



                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
