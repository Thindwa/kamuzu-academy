@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Sports</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/sports') }}">Sports</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Sports</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                The sports facilities at the Academy truly are outstanding and active
                                participation in sports and games is a central part of the curriculum,
                                for all students.
                            </p>
                            <p class="lead">
                                We have well maintained soccer, hockey and rugby pitches, and cricket
                                is also played in season. The students enjoy use of the athletics track,
                                as well as squash, tennis, basketball and volleyball courts.
                                We also have a 33 metre swimming pool a fitness multi-gym,
                                and a nine-hole golf course.
                            </p>
                            <p class="lead">
                                Students in all forms have Physical Education lessons each week.
                                In addition students are expected to participate in the inter-House Games
                                programme which takes place in the afternoon, after timetabled lessons are finished.
                            </p>
                            <p class="lead">
                                The sports facilities such as the swimming pool, basketball and netball courts
                                and the football field are also available for students to use in their own
                                time in afternoons and at the weekend.
                            </p>
                            <p class="lead">
                                Whilst we encourage all students to actively take part in sports whatever their
                                ability, many of our students also represent the school by playing in school
                                teams for a wide range of sports. Our school teams and individuals participate
                                in tournaments and inter-school competitions, as well as in national and
                                international competitions, including the Olympics, Commonwealth Games
                                and Africa Youth Games.
                            </p>
                            <P class="lead">Students who perform at Elite level are awarded 50% Scholarships to study A
                                levels in Form 6.
                            </P>

                        </div>
                    </div>
                </div>

                <div class="col-lg-5 mt-5 py-5 mt-lg-0">

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
                                <img src="{!! url('images/interhouse.jpg') !!}" class="d-block w-100" alt="...">
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
            </div>
        </div>
    </section>
@endsection
