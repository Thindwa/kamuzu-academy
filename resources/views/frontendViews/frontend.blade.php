@extends('layouts.frontend-master')

@section('content')
    <div class=" bg-light rounded">


        <div class="overflow-hidden">
            <section>
                <div class="video-container">
                    <video id="my-video" loop muted playsinline autoplay loading="lazy">
                        <source src="{!! url('video/clip.mp4') !!}" type="video/mp4">
                    </video>

                    <div class="video-overlay">
                        <div class="container-fluid">
                            <div class="row justify-content-center">

                                <h1 class="ka-text"> {{ $StaticText['welcome']->value }}
                                    <hr
                                        style="height:5px;border-width:0;color:orange;background-color:orange; margin-left: 500px;
                                                 margin-right: 500px;">
                                </h1>

                                <div>

                                    @role('author')
                                        <form method="POST" action="{{ route('updateText', 'welcome') }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" class="form-control" name="welcome"
                                                value="{{ $StaticText['welcome']->value }}">
                                            <button type="submit" class="btn btn-primary">Update Text</button>
                                        </form>
                                    @endrole
                                </div>

                            </div>

                            <div class="row">
                                <div class="d-flex justify-content-center mx-auto">
                                    <div class="col-lg-4 col-sm-4 d-flex justify-content-sm-end ">
                                        <a href="{{ route('pages.admissions') }}" class="btn btn-lg ka">Apply Now</a>
                                    </div>
                                    <div class="col-lg-4 col-sm-4 d-flex justify-content-sm-center">
                                        <a href="{{ route('pages.scholarship') }}" class="btn btn-lg ka">Scholarships</a>
                                    </div>
                                    <div class="col-lg-4 col-sm-4 d-flex justify-content-sm-start">
                                        <a href="{{ route('pages.vacancy') }}" class="btn btn-lg ka ">
                                            Vacancies<span class="ms-2 fas fa-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

          
            <section class="about-section section bg-tertiary position-relative overflow-hidden">
                <div class="container py-0">
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="section-title">
                                <div class="position-relative mx-auto">
                                    <h1 class="ka-text display-3 pb-4 ">WELCOME</h1>
                                    <h4 class="ka-text display-5  mb-3">
                                        <i>“Integrity, Responsibility & Hard Work”</i>
                                    </h4>
                                    <!-- Displaying the first part of the content -->
                                    @foreach ($splitContent as $index => $paragraph)
                                        @if ($index % 2 == 0 && $index <= 2)
                                            <p class="lead mb-0 mt-2">
                                                {!! nl2br(e($paragraph)) !!}
                                            </p>
                                        @endif
                                    @endforeach

                                    <div class="">
                                        @role('author')
                                            <form method="POST" action="{{ route('updateText', 'opportunities') }}">
                                                @csrf
                                                @method('PUT')
                                                <textarea class="form-control" name="opportunities" rows="5">{{ $StaticText['opportunities']->value }}</textarea>
                                                <button type="submit" class="btn btn-primary">Update Text</button>
                                            </form>
                                        @endrole
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-first order-md-0">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @php
                                        $opportunitiesImagesArray = json_decode($opportunitiesImages->filename, true);
                                    @endphp
                                    @foreach ($opportunitiesImagesArray as $key => $filename)
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}"
                                            @if ($key === 0) class="active" aria-current="true" @endif
                                            aria-label="Slide {{ $key + 1 }}"></button>
                                    @endforeach
                                </div>

                                <div class="carousel-inner">
                                    @foreach ($opportunitiesImagesArray as $key => $filename)
                                        <div class="carousel-item @if ($key === 0) active @endif">
                                            <img src="{{ asset('images/static_pages_images/' . $filename) }}"
                                                class="d-block w-100" alt="Image {{ $key + 1 }}">
                                        </div>
                                    @endforeach
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            @role('author')
                                <div class="pt-5">
                                    <form action="{{ route('update.image', 'opportunities') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="new_images[]">Upload New Images:</label>
                                            <input type="file" name="new_image[]" class="form-control" multiple>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update Images</button>
                                    </form>
                                </div>
                            @endrole
                        </div>

                        <div class="col-lg-12">
                            <!-- Additional paragraphs below the carousel -->

                            @foreach ($splitContent as $index => $paragraph)
                                @if ($index % 2 == 0 && $index > 2)
                                    <p class="lead mb-0">
                                        {!! nl2br(e($paragraph)) !!}
                                    </p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- /about us  -->

          

          

            <!-- Section Cta Admissions -->
            <section class="section cta1 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="cta-item  bg-white p-5 rounded">

                                <h1 class="mt-2 mb-4 ka-text">Admissions</h1>
                                <p class="lead mb-4">
                                    {{ $StaticText['admissions']->value }}
                                </p>
                                <div class="">
                                    @role('author')
                                        <form method="POST" action="{{ route('updateText', 'admissions') }}">
                                            @csrf
                                            @method('PUT')
                                            <textarea class="form-control" name="admissions" rows="5">{{ $StaticText['admissions']->value }}</textarea>
                                            <button type="submit" class="btn btn-primary">Update
                                                Text</button>
                                        </form>
                                    @endrole
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 text-right">
                            <div class="p-5 rounded">
                                <a class="btn ka mt-4" href="{{ route('pages.admissions') }}">APPLY NOW<span
                                        style="font-size: 14px; margin:20%;" class="ms-2 fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  Section Cta Admissions End-->

         <!-- Upcoming events -->
<section class="cta1 position-relative">
    <div class="container py-5 pb-5 bg-light">
        <div class="row justify-content-center">
            <div class="main py-5">
                <div class="slider slider-for">
                    <!-- Add your desired content here -->
                </div>
                <div class="slider slider-nav">
                    @foreach ($events as $event)
                        <div class="card mx-2">
                            <a href="{{ route('frontEvent.show', ['slug' => $event->slug]) }}" class="card-link">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <!-- Check if event has an image, if not show a default image -->
                                    @if ($event->event_image)
                                        <img src="{{ Storage::url($event->event_image) }}" alt="Event Image" class="img-fluid" style="width: 80%; height: auto; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('images/gif.gif') }}" alt="Default Image" class="img-fluid">
                                    @endif
                                </div>
                                <h5 class="card-title ka-text lead text-center">{{ $event->title }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row py-5">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('all.events') }}" class="btn btn-lg ka" style="color:#fff;">
                                <b class="">See All Events</b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Upcoming events -->



            <!-- /Upcoming events -->
            <section class="bg-gray py-5 position-relative">
                <div class="container py-5 pb-5">
                    <div class="row pb-3">
                        <div class="col-6">
                            <div class="d-flex justify-content-start">
                                <h2 class="mb-0 text-nowrap mr-3 ka-text">News</h2>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('news.index') }}" class="btn btn-sm ka" style="color:#fff;"><b>See
                                        All
                                        News</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach ($news as $item)
                            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                                <div class="card h-100">
                                    <div class="card-img">
                                        @if (is_array($item->images) && count($item->images) > 0)
                                            @php
                                                $imagesArray = $item->images;
                                                $lastImage = end($imagesArray);
                                            @endphp
                                            <img class="card-img-top rounded-0" style="object-fit: cover;"
                                                src="{{ asset('storage/uploads/news/' . $lastImage) }}"
                                                alt="event thumb">
                                        @else
                                            <!-- Provide a default image or a placeholder if the array is empty -->
                                            <img class="card-img-top rounded-0" style="object-fit: cover;"
                                                src="{{ asset('path/to/default/image.jpg') }}" alt="event thumb">
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a class="text-secondary"
                                                href="{{ route('news.single', $item->slug) }}">{{ $item->title }}</a>
                                        </p>
                                        <p class="card-text lead">{{ $item->description }}</p>
                                    </div>

                                    <div class="card-footer text-center">
                                        <a href="{{ route('news.single', $item->slug) }}"
                                            class="btn btn-outline-secondary w-100">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>

                </div>
            </section>

            <!-- /Upcoming events -->
            <!--Login Modal-->
            <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('login.perform') }}">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <img class="mb-4" src="{!! url('images/logo.png') !!}" alt="" width="250"
                                    height="100">

                                <h1 class="h3 mb-3 fw-normal">Login</h1>

                                @include('layouts.partials.messages')

                                <div class="form-group form-floating mb-3">
                                    <input type="text" class="form-control" name="username"
                                        value="{{ old('username') }}" placeholder="Username" required="required"
                                        autofocus>
                                    <label for="floatingName">Email or Username</label>
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>

                                <div class="form-group form-floating mb-3">
                                    <input type="password" class="form-control" name="password"
                                        value="{{ old('password') }}" placeholder="Password" required="required">
                                    <label for="floatingPassword">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="remember">Remember me</label>
                                    <input type="checkbox" name="remember" value="1">
                                </div>

                                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
