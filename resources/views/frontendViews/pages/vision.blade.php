@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Vision</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ route('home.frontend') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ route('pages.vision') }}">Vision</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Vision</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            @php
                                $visionText = nl2br(e($StaticText['vision']->value));
                            @endphp
                            <p class="lead">
                                {!! $visionText !!}
                            </p>
                            <div class="">
                                @role('author')
                                    <form method="POST" action="{{ route('updateText', 'vision') }}">
                                        @csrf
                                        @method('PUT')
                                        <textarea class="form-control" name="vision" rows="5">{{ $StaticText['vision']->value }}</textarea>
                                        <button type="submit" class="btn btn-primary">Update
                                            Text</button>
                                    </form>
                                @endrole
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">

                    <div class="image-container position-relative">
                        <img loading="lazy" decoding="async"
                            src="{{ asset('images/static_pages_images/' . $images['vision']->filename) }}"
                            class="rounded w-100" alt="image">

                        @role('author')
                            <form action="{{ route('update.image', 'vision') }}" method="POST" enctype="multipart/form-data"
                                class="image-overlay">
                                @csrf
                                @method('PUT')
                                <div class="d-flex align-items-center">
                                    <input type="file" name="new_image" class="form-control me-2">
                                    <button type="submit" class="btn btn-primary">Update
                                        Image</button>
                                </div>
                            </form>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
