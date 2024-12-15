@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white text-center">University and Careers Guidance</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/primary') }}">University and Careers Guidance</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row ">

                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text text-center">University and Careers Guidance
                        </h2>

                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                We have a comprehensive system for careers guidance and support, aimed at providing students
                                with all the information they need in order to make informed decisions about their IGCSE
                                options choices, A level choices, university applications and future careers. In addition,
                                we aim to provide parents with information which will help them to guide their children in
                                making these important decisions.

                            </p>
                            <div class="row">
                                <div class="card text-white bg-success mb-3 mx-3" style="max-width: 24rem;">
                                    <div class="card-header">Form 3</div>
                                    <div class="card-body">

                                        <p class="card-text">
                                        <ul class="list-group lead">
                                            <li class="list-group-item">Presentations about IGCSE Options Choices from
                                                subject teachers</li>
                                            <li class="list-group-item">Guidance on how to make good choices</li>
                                            <li class="list-group-item">IGCSE Options booklet containing details of each
                                                option subject</li>
                                            <li class="list-group-item">Parents meetings about IGCSE options choices</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                                <div class="card text-white bg-warning mb-3 mx-3" style="max-width: 24rem;">
                                    <div class="card-header ">Form 5</div>
                                    <div class="card-body">

                                        <p class="card-text">
                                        <ul class="list-group lead">
                                            <li class="list-group-item">Guidance on "How to Study" and "How to Revise"</li>
                                            <li class="list-group-item">Weekly Careers Talks from Visiting Speakers</li>
                                            <li class="list-group-item">Presentations about Kamuzu Academy Scholarships</li>
                                            <li class="list-group-item">Presentations about Post-16 Choices</li>
                                            <li class="list-group-item">Presentations about A Level Options Choices from
                                                Subject Teachers</li>
                                            <li class="list-group-item">Guidance on How to Make Good Choices</li>
                                            <li class="list-group-item">A Level Options Booklet</li>
                                            <li class="list-group-item">Parents Meetings about A Level Options Choices</li>
                                            <li class="list-group-item">University Careers Day with Local and International
                                                Universities, NCHE, and Educational Consultants</li>
                                        </ul>
                                        </p>

                                    </div>
                                </div>
                                <div class="card text-dark bg-light mb-3 mx-3" style="max-width: 24rem;">
                                    <div class="card-header">Form 6</div>
                                    <div class="card-body">

                                        <p class="card-text">
                                        <ul class="list-group lead">
                                            <li class="list-group-item">Guidance on "How to Study" and "How to Revise"</li>
                                            <li class="list-group-item">Weekly Careers Talks from Visiting Speakers</li>
                                            <li class="list-group-item">Presentations about Post-16 Choices including Local
                                                Universities, Colleges, and Universities Abroad</li>
                                            <li class="list-group-item">Guidance on How to Apply to University in Malawi and
                                                Abroad, including Deadlines and Writing a Personal Statement</li>
                                            <li class="list-group-item">University Careers Day with Local and International
                                                Universities, NCHE, and Educational Consultants</li>
                                            <li class="list-group-item">Careers Trip to Visit Employers and Professional
                                                Bodies in Malawi</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
