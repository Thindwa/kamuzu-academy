@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">The Chapel</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ route('home.frontend') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ route('pages.chapel') }}">The Chapel</a></li>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">The Chapel</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                Spiritual life at Kamuzu Academy is looked after by the School Chaplain,
                                who is available to support students of all religions and denominations.
                            </p>
                            <p class="lead">
                                The School Chapel is the first building that you see as you enter
                                the campus and the cross on the tower can be seen from all corners of the school.
                                The main service on Sunday morning is ecumenical catering for CCAP,
                                Anglican and other denominations, often with visiting preachers
                                and choirs in attendance. Sunday school is offered to younger
                                worshipers and SCOM meetings take place on Sunday evenings led by students.
                            </p>
                            <p class="lead">
                                The Catholic congregation worships in their own service on Sunday morning
                                led by a visiting Catholic priest and members of the Seventh Day Adventist
                                church hold their own service each Saturday morning, supported
                                by member of staff who belongs to the SDA. Muslim students
                                are escorted to the local mosque for prayers each Friday.
                            </p>
                            <p class="lead">
                                The annual Carol Service and the Easter Worship are important events on the school calendar.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/chapel.jpg') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
