@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h1 class="mb-3 text-capitalize text-white ">Accommodation</h1>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white " href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white ">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/accomodation') }}">Accommodation</a>
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
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Accommodation</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">
                                There are 640 boarding students at the Academy, who are accommodated in two boarding
                                hostels. One for boys and one for girls, which are located close to the main school
                                buildings. Each hostel is organized into Houses, with separate corridors
                                for Juniors, Middles and Seniors.
                            </p>
                            <p class="lead">
                                The purpose-built hostels consist of two- bed study rooms, with desks,
                                lockers and pin boards. Each room has access to the corridor,
                                as well as double doors which open onto well maintained walled gardens.
                                Each corridor has its own bathrooms with toilets and showers and whilst
                                we expect the students to keep their rooms clean and tidy,
                                there is a dedicated team of household staff who service each hostel under
                                the supervision of a housekeeper.
                            </p>
                            <p class="lead">
                                We are constantly updating and improving our accommodation.
                                A project to add more rooms to the Girls’ Hostel is currently underway
                                following the completion of a 48 bed extension to the Boys’ hostel
                                which was completed in 2021.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                    <img class="lozad" decoding="async" src="{!! url('images/first-image.png') !!}" class="rounded w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
