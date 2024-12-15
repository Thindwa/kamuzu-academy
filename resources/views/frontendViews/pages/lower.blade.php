@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Lower School</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/lower') }}">Lower School</a>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Lower School</h2>
                        <hr>
                        <div class="content py-0 pe-lg-5">
                            <p class="lead">
                                Students in Forms 1 to 3 study a broad and balanced curriculum covering a wide range of
                                academic and practical subjects, including English, Mathematics, Science, Geography,
                                History, Religious Studies, Latin, Greek, French, Chinese, Art, Music, Food&Nutrition,
                                Design & Technology, ICT and Physical Education. Some of these subjects are taught in
                                rotation, reducing the total number of subjects being taught at any one time.
                            </p>
                            <p class="lead">
                                English, Maths and Science are assessed by CIE CheckPoint Examinations at the end of Form 3.
                            </p>
                            <p class="lead">
                                During Form 3 students and their parents are provided with information about the IGCSE
                                subject options choices, which they will begin to study in Form 4.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/chapel.jpg') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
