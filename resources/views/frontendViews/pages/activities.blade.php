@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h1 class="mb-3 text-capitalize text-white">Activities</h1>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/activities') }}">Activities</a>
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

                    <h2 class="text-uppercase fw-bold mb-3 ka-text py-3 ">AFTERNOON ACTIVITIES</h2>

                    <div class="content pe-0 pe-lg-0">
                        <p class="lead">Kamuzu Academy offers a wide range of afternoon activities to its students.
                            Some popular
                            activities include Leo club, charity club, golf club, volleyball, soccer, knitting, chess,
                            and many more.</p>

                        <p class="lead">Afternoon activities are a great way for students to participate in a safe
                            productive
                            environment after school has ended. That time after school is filled with ample
                            opportunities for students to continue their development. Afternoon activities provide a
                            number of benefits for our students. Getting involved in activities has shown to help
                            children be more extroverted and responsible. Students are overall happier and healthier
                            when they are engaged in things they enjoy doing.</p>



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
                    <p class="lead">Some benefits of afternoon activities include safety, whereas when a child has
                        an activity,
                        we know exactly where they will be. Activities are well supervised and organized, allowing
                        students to be monitored. Having some sort of physical activity every day promotes a
                        healthier lifestyle. A healthy body equals a healthy mind. Afternoon activities are all
                        about variety and Kamuzu Academy has many different programs. When children have a clear
                        idea of their hobbies and interests from an early age, it can help them make better
                        decisions in the future. For example, if a child enjoys math club and learning math, they
                        may want to consider a career in engineering or IT.</p>
                    <p class="lead">Afternoon activities have also shown to have a positive impact on a child’s
                        academic
                        performance as activities help them practice their use of proper time management. Afternoon
                        activities encourage teamwork; everyone must learn to work well with others. Practically
                        every job requires communication skills and working alongside others, and so giving our
                        students the experience of working toward a common goal or to accomplish a task with others
                        is priceless. Afternoon activities, therefore, give our students transferable skills they
                        will take with them for the rest of their lives.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
