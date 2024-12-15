@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">The Classics</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/classics') }}">The Classics</a>
                        </li>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">The Classics</h2>
                        <h4 class="lead">“Not only English and French shall be taught but also Latin & Greek”
                            </br>&nbsp;Dr. H. Kamuzu Banda </h4>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                The Classics have always been at the centre of the curriculum at the Academy
                                since the founding of the school. Dr Banda believed that an education in Latin,
                                Greek and Classical history was an essential element of educating future leaders.
                            </p>
                            <p class="lead">
                                Students begin their classical studies in Form 1, where they get a grounding
                                in Latin and classical civilisation. In Form 2 they begin to learn Greek and
                                in Form 3 they choose which language they would like to study further.
                            </p>
                            <p class="lead">
                                At the end of Form 5, students may take an IGCSE examination in Latin,
                                sit for the International Greek Certificate or take a non-examined course
                                in Classical Civilisation.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/first-image.png') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
