@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h1 class="mb-3 text-capitalize text-white">Curriculum</h1>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white" href="{{ URL::to('/curriculum') }}">Curriculum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="text-uppercase fw-bold mb-3 ka-text">Curriculum</h2>
                        <hr>
                        <div class="content">
                            <!-- Image slider floated to the right -->
                            <div id="carouselExampleIndicators" class="carousel slide float-lg-end ms-lg-4 mb-4" data-bs-ride="carousel" style="max-width: 400px;">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{!! url('images/slider1.jpg') !!}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{!! url('images/slider2.jpg') !!}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{!! url('images/slider4.png') !!}" class="d-block w-100" alt="...">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <!-- Text content -->
                            <p class="lead">
                                The Academy has excellent teaching and learning facilities, including a large Auditorium,
                                a well-resourced Library and specialist teaching rooms for subjects such as Art, Music,
                                Home Economics and D&T. We also have two ICT network rooms and seven fully equipped
                                science laboratories.
                            </p>
                            <p class="lead">
                                Students at the Academy study courses leading to IGCSE Cambridge International Examinations
                                (CIE) at the end of Form 5, and to GCE AS and A levels at the end of the Lower and
                                Upper 6th Forms.
                            </p>
                            <p class="lead">
                                Lower school courses (Forms 1 to 3) offer a broad and balanced curriculum covering a wide
                                range of academic and practical subjects. English, Maths and Science are assessed
                                by CIE CheckPoint examinations at the end of Form 3.
                            </p>
                            <p class="lead">
                                The Academy also offers the Associated Board of the Royal Schools of Music theory
                                examinations. It’s three academic terms run from September to December,
                                January to March and April to June, about 36 weeks in total.
                            </p>
                            <p class="lead">
                                The wide-ranging IGCSE curriculum requires all students to study Mathematics,
                                English (Language and Literature), the Classics, Chemistry, Physics and
                                Biology and in addition they can choose three optional subjects from French,
                                Chinese, History, Geography, Religious Studies, Economics, Business Studies,
                                Computing, Design & Technology, Food & Nutrition, Art, Music and Physical Education.
                            </p>
                            
                           
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
