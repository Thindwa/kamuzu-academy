@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h1 class="mb-3 text-capitalize text-white">Student Council</h1>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/student-council') }}">Student Council</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <h2 class="ka-text">
                    Kamuzu Academy Students’ Council
                </h2>



                <div class="col-lg-6">
                    <p class="lead">Kamuzu Academy Students’ Council was established in the second term of 2022/2023
                        academic year. It
                        consists four members from each year group, two boys and two girls, making a total of 14. They
                        represent
                        their year groups. It is a parallel group to the body of prefects. They are chosen by members of
                        their
                        year group in elections presided over by Housemaster/mistresses and prefects. During the elections,
                        the
                        Housemaster, Housemistresses and prefects are there as mere monitors and guardians of fairness and
                        are
                        not allowed to exert their influence in whatever form. </p>

                    <p class="lead">The students’ council meet regularly and compile points which need management’s
                        attention and are
                        passed on to the management through a meeting the Headboy and Headgirl have with the Headmaster in
                        the presence of Deputy Headmaster (Pastoral). This enhances more representation as membership span
                        from the first year to U6, unlike the prefects’ body which is from Form 6 students only.</p>
                </div>

                <div class="col-lg-6"> <img loading="lazy" decoding="async" src="{!! url('images/council.jpg') !!}"
                        class="rounded w-100">
                    <p> Members of the First Students’ Council</p>
                </div>



            </div>

        </div>
    </section>
@endsection
