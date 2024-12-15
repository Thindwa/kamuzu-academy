@extends('layouts.app-master')

@section('content')
    <div id="wrapper">
        @include('layouts.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="bg-light p-4 rounded">
                    <div class="container">
                        <h2>Events</h2>
                        <div class="lead">
                            Manage your events here.
                            <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm float-right">Add event</a>
                        </div>

                        <div class="mt-2">
                            @include('layouts.partials.messages')
                        </div>

                        <table class="table table-bordered table-responsive-sm">
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th width="3%" colspan="3">Action</th>
                            </tr>
                            @foreach ($events as $key => $event)
                                <tr>
                                    <!-- Display event image if it exists -->
                                    <td>
                                        @if($event->event_image)
                                            <img src="{{ Storage::url($event->event_image) }}" alt="Event Image" style="width: 50px; height: auto;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $event->title }}</td>
                                    <td>
                                        @if ($event->start_datetime)
                                            {{ $event->start_datetime->format('Y-m-d') }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($event->end_datetime)
                                            {{ $event->end_datetime->format('Y-m-d') }}
                                        @endif
                                    </td>

                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('events.show', $event->id) }}">Show</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('events.edit', $event->id) }}">Edit</a>
                                    </td>
                                    @can('events.create')
                                        <td>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </table>

                        <div class="d-flex">
                            {!! $events->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
