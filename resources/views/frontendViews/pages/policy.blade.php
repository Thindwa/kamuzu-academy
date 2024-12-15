@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Policy</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/lower') }}">Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
         <div class="row">
                    @foreach ($policies as $policy)
                        <div class="col-md-3">
                            <a href="{{ Storage::url($policy->file_path) }}" target="_blank">
                                <div class="card mb-4">
                                    <p class="card-title text-center text-dark">{{ $policy->title }}</p>
                                    <img src="{{ url('images/pdf1.svg') }}" class="card-img" alt="PDF icon">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>
@endsection
