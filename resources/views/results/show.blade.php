


@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                   <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Result Details
                          <a href="{{ url('results') }}" class="btn btn-secondary float-end">Back</a>
                   
                        </h4>
                    </div>

                    <div class="card-body">
                        <h5>Category: {{ $result->category }}</h5>

                        <h6>Subjects & Grades</h6>
                        <ul>
                            @foreach ($result->subjects as $subject)
                            <li>{{ $subject->subject_name }}: {{ $subject->grade }}</li>
                            @endforeach
                        </ul>

                        <a href="{{ route('results.index') }}" class="btn btn-secondary mt-3">Back to Results</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
