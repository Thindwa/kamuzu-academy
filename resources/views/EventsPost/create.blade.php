@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container mt-4">
                        @include('layouts.partials.messages')
                        <h2>Add Event</h2>
                        <div class="lead">
                            Add Event post.
                        </div>

                        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Title</label>
                                <input type="text" class="form-control form-control-sm rounded-0" name="title"
                                    id="title" value="{{ isset($event) ? $event->title : '' }}" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="start_datetime" class="control-label">Start</label>
                                <input type="date" class="form-control form-control-sm rounded-0" name="start_datetime"
                                    id="start_datetime" value="{{ isset($event) ? $event->start_datetime : '' }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="end_datetime" class="control-label">End</label>
                                <input type="date" class="form-control form-control-sm rounded-0" name="end_datetime"
                                    id="end_datetime" value="{{ isset($event) ? $event->end_datetime : '' }}">
                            </div>

                            <div class="form-group mb-2">
                                <label for="description" class="control-label">Description</label>
                                <textarea class="form-control form-control-sm rounded-0" name="description" id="description">{{ isset($event) ? $event->description : '' }}</textarea>
                            </div>

                            <!-- Event Image Upload Field -->
                            <div class="form-group mb-2">
                                <label for="event_image" class="control-label">Event Image</label>
                                <input type="file" class="form-control form-control-sm rounded-0" name="event_image" id="event_image" accept="image/*">
                            </div>

                            <div class="d-flex justify-content-start gap-2">
                                <button type="submit" class="btn btn-primary">Save Event</button>
                                <a href="{{ route('events.index') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
