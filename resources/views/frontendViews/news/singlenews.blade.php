@extends('layouts.frontend-master')

<style>
    .equal-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 767px) {
        .equal-image {
            height: auto;
            /* Adjust the height as needed for mobile devices */
        }
    }

    * {
        box-sizing: border-box;
    }

    /* Container for images and buttons */
    .row {
        display: flex;
    }

    /* Hide all images by default and set object-fit: cover */
    .image-face {
        display: none;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Display the first image initially */
    /* .image-1 {
        display: block;
    } */

    /* Style for image buttons */
    .image-buttons {
        display: grid;
        grid-template-columns: repeat(3, auto);
        grid-gap: 1rem;
        justify-content: center;
    }

    .image-buttons input {
        width: 80px;
        /* Adjust the width as needed */
        height: 80px;
        /* Adjust the height as needed */
        margin-bottom: 10px;
    }
</style>


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="ka-text pb-5">{{ $news->title }}</h5>
                        <p class="">{{ $news->description }}</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 py-5">
                            <div class="image-buttons">
                                @foreach ($news->images as $index => $image)
                                    @if (is_string($image))
                                        <input type="image" class="show-image-{{ $index + 1 }}"
                                            src="{{ asset('storage/uploads/news/' . $image) }}"
                                            onclick="showImage('image-{{ $index + 1 }}')">
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-8 py-0 order-first order-md-0">
                            <div class="image-container">
                                <div class="initial-position">
                                    @foreach ($news->images as $index => $image)
                                        @if (is_string($image))
                                            <img class="image-face image-{{ $index + 1 }}"
                                                src="{{ asset('storage/uploads/news/' . $image) }}"
                                                alt="{{ $news->title }}">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">
                            {!! $news->body !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <!-- Recent News Sidebar -->
                <div class="bg-light rounded p-3">
                    <h3 class="ka-text">Recent News</h3>
                    @foreach ($recentNews as $recent)
                        <div class="media mb-3">
                            @if ($recent->images && is_array($recent->images) && count($recent->images) > 0)
                                @php
                                    $imagesArray = $recent->images;
                                    $lastImage = end($imagesArray);
                                @endphp
                                <img src="{{ asset('storage/uploads/news/' . $lastImage) }}" alt="{{ $recent->title }}"
                                    class="mr-3" style="width: 80px;">
                            @elseif (is_string($recent->images))
                                <img src="{{ asset('storage/uploads/news/' . $recent->images) }}"
                                    alt="{{ $recent->title }}" class="mr-3" style="width: 80px;">
                            @endif
                            <div class="media-body">
                                <h5 class="mt-0"><a class="text-secondary"
                                        href="{{ route('news.single', $recent->slug) }}">{{ $recent->title }}</a></h5>
                                <p>{{ $recent->created_at->format('M d, Y') }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        <a class="btn btn-outline-secondary btn-lg" href="{{ route('news.index') }}">See All News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show the first image on page load
        const firstImage = document.querySelector('.image-face');
        if (firstImage) {
            firstImage.style.display = 'block';
        }

        // Function to handle image button clicks
        function showImage(imageClass) {
            // Hide all images
            const allImages = document.querySelectorAll('.image-face');
            allImages.forEach(image => image.style.display = 'none');

            // Show the selected image
            const selectedImage = document.querySelector(`.${imageClass}`);
            if (selectedImage) {
                selectedImage.style.display = 'block';
            }
        }

        // Attach the showImage function to the click event of image buttons
        const imageButtons = document.querySelectorAll('.image-buttons input');
        imageButtons.forEach(button => {
            button.addEventListener('click', function() {
                const imageClass = this.classList[0].replace('show-', '');
                showImage(imageClass);
            });
        });
    });
</script>
