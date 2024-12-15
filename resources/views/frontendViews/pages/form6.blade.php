@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Form 6</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/form6') }}">Form 6</a>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Form 6</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                Kamuzu Academy also offers students the opportunity to study GCE A levels,
                                once they complete their IGCSE examinations.
                            </p>
                            <p class="lead">
                                A levels are a gold standard qualification which allow students to apply
                                to Universities anywhere in the world. We welcome students from both Kamuzu Academy
                                and other schools, to join Form 6 for the two years of A level studies.
                            </p>
                            <p class="lead">
                                A levels prepare students to a high level, and bridge the gap between IGCSE
                                and undergraduate studies. For students who intend to study at universities in Malawi,
                                A levels also help them to be much better prepared for their degree level studies,
                                as well as enabling them to enter their degree in Year 2.
                            </p>
                            <p class="lead">
                                Students study three subjects at A level from a very wide range of subjects
                                including Mathematics, English Literature, French, History, Geography,
                                Religious Studies, Economics, Business Studies, Biology, Chemistry, Physics,
                                Information Technology, Design & Technology, Food & Nutrition, Art, Music,
                                Physical Education, Psychology and Law.
                            </p>
                            <p class="lead">
                                Students who have achieved outstanding grades in their IGCSE examinations
                                at the end of Form 5 are awarded Scholarships of between 30% & 50% of their
                                school fees
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/third.jpg') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
