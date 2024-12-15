@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Upper School</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/upper') }}">Upper School</a>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Upper School</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                Students in Form 4 begin to study for their IGCSE examinations which are taken at the end of
                                Form 5. All our students study Mathematics, English Language, Chemistry, Physics and Biology
                                and either Latin or Greek and some also take English Literature. In addition studnets can
                                choose three optional subjects from French, Chinese, History, Geography, Religious Studies,
                                Economics, Business Studies, ICT, Computing, Design & Technology, Engineering, Food &
                                Nutrition, Art, Music and Physical Education.
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
