@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Alumni</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/alumni') }}">Alumni</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>


        <div class="container mt-5 mb-5">
            <h2 class="text-center mb-4">Kamuzu Academy Alumni</h2>

            <div class="row row-cols-1 row-cols-md-4 g-4">

                <!-- Alumni Card 1 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/alumin1.jpg') }}" class=" h-100-img-top" alt="Alumni Image 1"
                            style="object-fit: cover; height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Frank Honde</h5>
                            <p class="card-text">Chartered Quantity Surveyor and Project Manager (1982 – 1984).</p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 2 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/alumin2.jpg') }}" class="card-img-top" alt="Alumni Image 2"
                            style="object-fit: cover; height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Justice Dorothy De Gabriel</h5>
                            <p class="card-text">Judge of the Malawi High Court. Board member of Kamuzu Academy (1988 –
                                1994)</p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 3 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/alumin3.jpg') }}" class="card-img-top" alt="Alumni Image 3"
                            style="object-fit: cover; height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Major General Swithun Mchungula</h5>
                            <p class="card-text">Inspector General of the Malawi Defence Force (1981 – 1987)</p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 4 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/alumin4.jpg') }}" class="card-img-top" alt="Alumni Image 4"
                            style="object-fit: cover; height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Mr. George Kajanga</h5>
                            <p class="card-text">Chief Engineer and Consultant. Board Member of Kamuzu Academy (1985 – 1991)
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 5 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/alumin5.jpg') }}" class="card-img-top" alt="Alumni Image 5"
                            style="object-fit: cover; height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Dr. James Kumwenda</h5>
                            <p class="card-text">Senior Medical Officer and Consultant (2001 – 2008)</p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 6 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/alumin6.jpg') }}" class="card-img-top" alt="Alumni Image 6"
                            style="object-fit: cover; height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Gonjetso Dikiya</h5>
                            <p class="card-text">Lawyer (2007 – 2012)</p>
                        </div>
                    </div>
                </div>

                <!-- Alumni Card 7 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/alumin7.jpg') }}" class="card-img-top" alt="Alumni Image 7"
                            style="object-fit: cover; height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Caroline Kautsire</h5>
                            <p class="card-text">University Professor (1997 – 2002)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
