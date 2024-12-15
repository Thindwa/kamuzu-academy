@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Pastoral Care</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/pastoral') }}">Pastoral Care</a>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Pastoral Care</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                Within each House, the students are allocated to a Tutor group of
                                between 15 and 20 students who are in the same form and this
                                group meets each morning with their Tutor for registration,
                                as well as once a week for a longer Tutor lesson.
                            </p>
                            <p class="lead">
                                The Houses and Tutor teams are run by our highly experienced Housemasters
                                and Housemistresses, who are also on hand each day to deal with behaviour
                                concerns and support students with any problems or worries which
                                they may be experiencing.
                            </p>
                            <p class="lead">
                                Housemasters, Housemistresses and Tutors are the main point of contact between
                                home and school and play a key role both in overseeing the academic
                                progress of the students in their house, as well as
                                providing pastoral care and support.
                            </p>
                            <p class="lead">
                                We recognize that some students may from time to time find that life becomes
                                a bit more difficult and they may well struggle emotionally or feel overwhelmed.
                                We have a team of staff who are trained to offer guidance,
                                support and counselling led by the Head of Student Wellbeing.
                                In addition, we also work with professional counsellors
                                who visit the school regularly to support students with more complex needs.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/pastoral.jpg') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
