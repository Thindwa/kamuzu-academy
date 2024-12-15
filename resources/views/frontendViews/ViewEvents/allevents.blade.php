@extends('layouts.frontend-master')

@section('content')
    <style>
        .card {
            height: 100%;
            background-color: #f8f9fa;
            border: none;
            /* Remove the card border */
        }

        .card-link {
            display: block;
            height: 100%;
            text-decoration: none;
            color: inherit;
        }

        .event-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
        }

        .card-body:hover {
            background-color: #f1f1f1;
        }
    </style>

    <div class="container py-5">
        <div class="row" id="eventsCardContainer">

            @foreach ($events as $event)
                <div class="col-3 mb-4">
                    <!-- Wrap the entire card content in an anchor tag -->
                    <a href="{{ route('frontEvent.show', ['slug' => $event->slug]) }}" class="card-link">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <!-- Display the event image if available, otherwise show a default image -->
                                @if ($event->event_image)
                                    <img src="{{ Storage::url($event->event_image) }}" alt="Event Image" class="event-image">
                                @else
                                    <img src="{{ asset('images/gif.gif') }}" alt="Default Image" class="event-image">
                                @endif
                            </div>
                            <h5 class="card-title ka-text lead text-center">{{ $event->title }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
