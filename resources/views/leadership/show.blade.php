@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                    <h1>Leadership Details</h1>
                    <div class="lead">
                        View leadership member details.
                    </div>

                    <div class="mt-2">
                        @include('layouts.partials.messages')
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $leadership->name }}</h2>
                        </div>
                        <div class="card-body">
                            <p><strong>Position:</strong> {{ $leadership->position }}</p>
                            <p><strong>Email:</strong> {{ $leadership->email }}</p>
                            <p><strong>Phone:</strong> {{ $leadership->phone }}</p>
                        </div>
                    </div>

                    <a href="{{ route('leadership.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
