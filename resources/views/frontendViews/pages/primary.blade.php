@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Primary School</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/primary') }}">Primary School</a>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Primary
                            School
                        </h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                Kamuzu Academy Primary School (KAPS) is a small primary day school on the campus of the main
                                Academy. Originally set up to educate the children of members of staff, the school has grown
                                over the years to approximately 80 pupils, who are taught in 4 classes; Reception, Year 1&2,
                                Year 3&4 and Year 5&6. Pupils travel from as far as Kasungu, to attend the school, which has
                                4 dedicated classrooms, a specialist Maths teaching room, a school hall and library, as well
                                as extensive outdoor play areas and a small playground. Pupils follow a British based
                                curriculum and prepare

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/classics.jpeg') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
