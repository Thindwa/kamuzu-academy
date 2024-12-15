@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container mt-4">
                        <h2>Update Event</h2>
                        <div class="lead">
                            Edit event.
                        </div>

                        <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input value="{{ $event->title }}" type="text" class="form-control" name="title"
                                    placeholder="Title" required>

                                @if ($errors->has('title'))
                                    <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-2">
                                <label for="start_datetime" class="control-label">Start</label>
                                <input type="date" class="form-control form-control-sm rounded-0" name="start_datetime"
                                    id="start_datetime"
                                    value="{{ isset($event) && $event->start_datetime ? date('Y-m-d', strtotime($event->start_datetime)) : '' }}">
                            </div>

                            <div class="form-group mb-2">
                                <label for="end_datetime" class="control-label">End</label>
                                <input type="date" class="form-control form-control-sm rounded-0" name="end_datetime"
                                    id="end_datetime"
                                    value="{{ isset($event) && $event->end_datetime ? date('Y-m-d', strtotime($event->end_datetime)) : '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" placeholder="Description">{{ $event->description }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                                @endif
                            </div>

                            <!-- Event Image Upload Field -->
                            <div class="form-group mb-2">
                                <label for="event_image" class="control-label">Event Image</label>
                                <input type="file" class="form-control form-control-sm rounded-0" name="event_image" id="event_image" accept="image/*">
                              <!-- Display current event image if it exists -->
                            @if($event->event_image)
                                <div class="mt-2">
                                    <p>Current Image:</p>
                                    <img src="{{ Storage::url($event->event_image) }}" alt="Event Image" style="max-width: 200px; height: auto; border-radius: 5px;">
                                </div>
                            @endif
                            
                            @if ($errors->has('event_image'))
                                <span class="text-danger text-left">{{ $errors->first('event_image') }}</span>
                            @endif

                            </div>

                            <div class="d-flex justify-content-start gap-2">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <a href="{{ route('events.index') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
