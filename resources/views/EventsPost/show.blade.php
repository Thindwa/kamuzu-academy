@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container mt-4">
                        <h2 class="pb-5">Event Details</h2>
                        <table class="table table-bordered">
                            <tbody>
                                <!-- Event Image Row -->
                                <tr>
                                    <th scope="row">Event Image</th>
                                    <td>
                                        @if($event->event_image)
                                            <img src="{{ Storage::url($event->event_image) }}" alt="Event Image" style="width: 150px; height: auto;">
                                        @else
                                            <span class="text-muted">No Image Available</span>
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Title</th>
                                    <td>{{ $event->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Start Date</th>
                                    <td>{{ $event->start_datetime ? $event->start_datetime->format('Y-m-d') : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">End Date</th>
                                    <td>{{ $event->end_datetime ? $event->end_datetime->format('Y-m-d') : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td>{{ $event->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Body</th>
                                    <td>{!! $event->body !!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-4">
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('events.index') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
