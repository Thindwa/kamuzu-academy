@extends('layouts.frontend-master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    @foreach ($news as $singleNews)
                        <div class="col-md-3 mb-4">
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
                            <li class="list-group-item">
                                <a href="{{ route('news.index', $link) }}">See All News</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
