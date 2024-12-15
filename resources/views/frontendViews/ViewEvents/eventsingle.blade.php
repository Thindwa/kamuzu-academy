@extends('layouts.frontend-master')

<style>
    .zoom-effect:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }

    .event-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
    }

    .sidebar {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
    }

    .sidebar h5 {
        font-weight: bold;
    }

    .sidebar .event-link {
        display: block;
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
        color: #000000;
        text-decoration: none;
        transition: color 0.3s;
    }

    .sidebar .event-link:hover {
        color: #008000;
        text-decoration: underline;
    }
</style>

@section('content')
    <div class="container py-5">
        <div class="row">
            <!-- Main Content: Single Event -->
            <div class="col-md-8">
                <div class="card shadow-lg zoom-effect">
                    <div class="card-body">
                        <h4 class="pb-3">{{ $event->title }}</h4>

                        <!-- Display Event Image if Available -->
                        @if ($event->event_image)
                            <img src="{{ Storage::url($event->event_image) }}" alt="Event Image" class="event-image mb-3">
                        @endif

                        <!-- Event Date -->
                        @if (!empty($event->start_datetime))
                            <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->start_datetime)->format('Y-m-d') }}</p>
                        @endif

                        <!-- Event Description -->
                        <p>{{ $event->description }}</p>

                        <!-- Back to All Events Button -->
                        <!--<div>-->
                        <!--    <a href="{{ route('all.events') }}" class="btn btn-lg btn-warning">-->
                        <!--        <h6><i class="ms-2 fas fa-arrow-left"></i>&nbsp;See All Events</h6>-->
                        <!--    </a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>

            <!-- Sidebar for Other Events -->
            <div class="col-md-4">
                <div class="sidebar shadow p-3">
                    <h5>Other Events</h5>
                    @foreach ($otherEvents as $otherEvent)
                        <a href="{{ route('frontEvent.show', ['slug' => $otherEvent->slug]) }}" class="event-link">
                            {{ $otherEvent->title }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
