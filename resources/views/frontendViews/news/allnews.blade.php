@extends('layouts.frontend-master')

<style>
    /* Blog
---------------------*/
    .blog-grid {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .blog-grid .blog-img {
        position: relative;
        border-radius: 5px;
        overflow: hidden;
    }

    .blog-grid .blog-img .date {
        position: absolute;
        background: #3a3973;
        color: #ffffff;
        padding: 8px 15px;
        left: 0;
        top: 10px;
        font-size: 14px;
    }

    .blog-grid .blog-info {
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
        border-radius: 5px;
        background: #ffffff;
        padding: 20px;
        margin: -30px 20px 0;
        position: relative;
    }

    .blog-grid .blog-info h5 {
        font-size: 22px;
        font-weight: 500;
        margin: 0 0 10px;
    }

    .blog-grid .blog-info h5 a {
        color: #3a3973;
    }

    .blog-grid .blog-info p {
        margin: 0;
    }

    .blog-grid .blog-info .btn-bar {
        margin-top: 20px;
    }

    .px-btn-arrow {
        padding: 0 50px 0 0;
        line-height: 20px;
        position: relative;
        display: inline-block;
        color: #fe4f6c;
        -moz-transition: ease all 0.3s;
        -o-transition: ease all 0.3s;
        -webkit-transition: ease all 0.3s;
        transition: ease all 0.3s;
    }


    .px-btn-arrow .arrow {
        width: 13px;
        height: 2px;
        background: currentColor;
        display: inline-block;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        right: 25px;
        -moz-transition: ease right 0.3s;
        -o-transition: ease right 0.3s;
        -webkit-transition: ease right 0.3s;
        transition: ease right 0.3s;
    }

    .px-btn-arrow .arrow:after {
        width: 8px;
        height: 8px;
        border-right: 2px solid currentColor;
        border-top: 2px solid currentColor;
        content: "";
        position: absolute;
        top: -3px;
        right: 0;
        display: inline-block;
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    @foreach ($news as $singleNews)
                        {{-- <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                @if ($singleNews->images && is_array($singleNews->images))
                                    @php
                                        $imagesArray = $singleNews->images;
                                        $lastImage = end($imagesArray);
                                    @endphp
                                    <img src="{{ asset('storage/uploads/news/' . $lastImage) }}"
                                        alt="{{ $singleNews->title }}" class="card-img-top" style="object-fit: cover;">
                                @endif

                                <div class="card-body d-flex flex-column">
                                    <p class="card-title">{{ $singleNews->title }}</p>
                                    <p class="card-text">{{ $singleNews->description }}</p>
                                    <a href="{{ route('news.single', $singleNews->slug) }}"
                                        class="btn btn-outline-secondary">Read More</a>
                                </div>
                            </div>
                        </div> --}}



                        <div class="col-lg-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    @if ($singleNews->images && is_array($singleNews->images))
                                        @php
                                            $imagesArray = $singleNews->images;
                                            $lastImage = end($imagesArray);
                                        @endphp
                                        <img src="{{ asset('storage/uploads/news/' . $lastImage) }}"
                                            alt="{{ $singleNews->title }}" width="350" height="250" class="card-img-top"
                                            style="object-fit: cover;">
                                    @endif
                                </div>


                                <div class="blog-info">
                                    <p class="card-title">{{ $singleNews->title }}</p>
                                    <p class="card-text">{{ $singleNews->description }}</p>
                                    <div class="btn-bar">
                                        <a href="{{ route('news.single', $singleNews->slug) }}" class="px-btn-arrow">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        News Archive
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($archiveLinks as $month => $link)
                                <li class="list-group-item">
                                    <a href="{{ route('news.archive', $link) }}">{{ $month }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
