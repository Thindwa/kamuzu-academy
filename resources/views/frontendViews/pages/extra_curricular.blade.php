@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Extra-Curricular</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/extra_curricular') }}">Extra-Curricular</a>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Extra-Curricular</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                The Founder felt strongly that a school should do more than just provide an
                                academic education. His vision was of an institution which would educate
                                the whole child, and help each student to develop their own outstanding
                                character.
                            </p>
                            <p class="lead">
                                At the Academy we offer a comprehensive programme of extra- curricular and
                                enrichment activities. Students take part in supervised activities
                                each afternoon, after their timetabled lessons finish. They can choose
                                from a huge range of activities including sports such as tennis,
                                water polo, golf, squash aerobics and karate.
                                There are also over 40 non-sporting activities on offer, ranging from
                                crochet and knitting to debating, board games, Environment
                                and Wildlife Club, astronomy and chess.
                            </p>
                            <p class="lead">
                                Our Music department offers students the opportunity to learn to play
                                a musical instrument, sing in the choir, play in the School
                                Orchestra or join the Jazz Band.
                            </p>
                            <p class="lead">
                                We ensure that there is a full and regular programme of drama in our 800-seater
                                Auditorium and also in our smaller outdoor amphitheatre.
                                Inter-House drama competitions take place each year in which students write,
                                produce and perform their own plays.
                            </p>
                            <p class="lead">
                                The Drama Club put on an annual production to packed houses and
                                the Malawi National Shakespeare Schools Festival is hosted at Kamuzu Academy
                                annually, with contributions from schools across the country.
                                In March 2020 the Academy represented Malawi at the
                                South Africa Schools Shakespeare Festival in Cape Town.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/curricular.jpg') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
