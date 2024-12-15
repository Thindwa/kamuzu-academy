@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">The Community</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/community') }}">The Community</a>
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
                        <h2 class="text-uppercase fw-bold mb-3 ka-text py-3 ">The Community</h2>

                        <div class="content pe-0 pe-lg-0">
                            <p class="lead">
                                Community Service and Volunteering are a central part of our provision,
                                because the Founder wanted the students to understand that they
                                have a role to play in both the local community around Mtunthama
                                and in the wider community of Malawi.
                            </p>
                            <p class="lead">
                                Our students regularly volunteer in the neighbouring primary school
                                and at St Andrew’s Anglican Hospital in Mtunthama and the AMAO Orphanage.
                                Form 6 students also take part in a community service programme,
                                which includes a wide variety of opportunities both in and outside the school,
                                including guided reading at Kamuzu Academy Primary School.
                            </p>
                            <p class="lead">
                                The Environment and Wildlife Club have planted thousands of trees
                                in recent years during National Tree Planting Month.
                            </p>



                        </div>
                    </div>
                </div>
                <div class="col-lg-5 py-0 mt-lg-0 pb-3 order-first order-md-0">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>


                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{!! url('images/slider1.JPG') !!}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{!! url('images/slider2.jpg') !!}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{!! url('images/slider4.png') !!}" class="d-block w-100" alt="...">
                            </div>
                        </div>


                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                <div class="col-lg-12">
                    <p class="lead">
                        We have a very active Charity Club, which raises funds for local
                        and national projects including work in local prisons.
                        The Leo Club supports a wide range of charity projects and has
                        recently raised funds and donated resources to the pediatric
                        cancer unit at Kamuzu Central Hospital. Students also take part
                        in fundraising for Operation Smile, to support children born
                        with a cleft lip and the students responded generously to the
                        Cyclone Freddy Appeal from the Malawi Red Cross.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
