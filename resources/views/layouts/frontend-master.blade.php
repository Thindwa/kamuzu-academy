<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome | Kamuzu Academy - honor deo et patriae</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <!--Favicon-->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="icon" href="{!! url('images/logo.png') !!}" type="image/x-icon">

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    {{-- <link rel="stylesheet" href="{!! url('plugins/slick/slick.css ')!!}"> --}}
    <link rel="stylesheet" href="{!! url('plugins/font-awesome/fontawesome.min.css') !!}">
    <link rel="stylesheet" href="{!! url('plugins/font-awesome/brands.css ') !!}">
    <link rel="stylesheet" href="{!! url('plugins/font-awesome/solid.css ') !!}">


    <!-- # Main Style Sheet -->

    {{-- <link rel="stylesheet" href="{!! url('css/style.css')!!}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css') }}">


    <link rel="stylesheet" type="text/css" href="{!! url('assets/slick/slick.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! url('assets/slick/slick-theme.css') !!}" />
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 41.00%;
            /* 16:9 aspect ratio (height / width) */
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 767px) {
            .video-container {
                position: relative;
                width: 100%;
                height: 0;
                padding-bottom: 100.00%;
                /* 16:9 aspect ratio (height / width) */
                overflow: hidden;
            }

            .video-container video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .video-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: rgba(0, 0, 0, 0.5);
            }

            .video-overlay h1 {
                color: #fff;
                text-align: center;
                margin-bottom: 20px;
            }

            .video-overlay .row {
                margin-bottom: 20px;
            }
        }

        .bg-cover {
            width: 100%;
            /* Set the desired width */
            height: 500px;
            /* Set the desired height */
        }

        .bg-cover1 {
            width: 100%;
            /* Set the desired width */
            height: 600px;
            /* Set the desired height */
        }

        .bg-cover2 {
            width: 100%;
            /* Set the desired width */
            height: 400px;
            /* Set the desired height */
        }

        .bg-cover3 {
            width: 100%;
            /* Set the desired width */
            height: 700px;
            /* Set the desired height */
        }

        .cta {
            background: url('images/first-image.png') fixed 50% 50%;
            background-size: cover;
            padding: 120px 0px;
        }

        .cta-block {
            background: url('images/first-image.png') no-repeat;
            background-size: cover;
        }

        .cta1 {
            background: url('images/second.jpg') fixed 50% 50%;
            background-size: cover;
            padding: 120px 0px;

        }

        .cta2 {
            background: url("images/bck.jpg") fixed 0% 160%;
            background-size: cover;
            padding: 70px 30px;
        }

        .cta-block1 {
            background: url('images/second.jpg') no-repeat;
            background-size: cover;
        }

        .ka {
            background-color: #265756;
            color: #fff;

        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .video-overlay h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .video-overlay .row {
            margin-bottom: 20px;
        }

        .main {

            display: block;
            margin: 0 auto;
            width: 800px;
            /* Adjust the width as per your preference */
            line-height: 60px;
            text-align: center;

        }

        @media (max-width: 767px) {
            .main {
                width: 300px;
            }

            .slick-prev,
            .slick-next {
                font-size: 100px;
                /* Adjust the arrow size as per your preference */
            }
        }


        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            /* Overlay background color with opacity */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            /* Initially hidden */
            pointer-events: none;
            /* Ignore clicks until activated */
            transition: opacity 0.3s ease-in-out;
            /* Smooth transition */
        }

        .image-container:hover .image-overlay {
            opacity: 1;
            /* Show the overlay on hover */
            pointer-events: auto;
            /* Enable clicks on the overlay */
        }

        .custom-justify {
            text-align: justify;
        }

        .custom-justify::after {
            content: "";
            display: inline-block;
            width: 100%;
        }


        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>


</head>

<body>

    @include('layouts.partials.frontend-navbar')

    <main class="container-fluid-lg">
        @yield('content')
    </main>

    @include('layouts.partials.footor')
    <!-- # JS Plugins -->
    <script src="{!! url('plugins/jquery/jquery.min.js') !!}"></script>
    <script src="{!! url('js/bootstrap.bundle.js') !!}"></script>
    <script src="{!! url('plugins/slick/slick.min.js') !!}"></script>
    <script src="{!! url('plugins/scrollmenu/scrollmenu.min.js') !!}"></script>
    <!-- Main Script -->
    <script src="{!! url('js/script.js') !!}"></script>

    <script type="text/javascript" src="{!! url('assets/slick/slick.min.js') !!}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Include the lozad.js library -->
    <script src="https://cdn.jsdelivr.net/npm/lozad@1.14.0/dist/lozad.min.js"></script>

    <!-- Add the "lozad" class to your images -->
    {{-- <img class="lozad" data-src="{{ asset('images/your-image.jpg') }}" alt="Your Image Description"> --}}

    <!-- Initialize lozad -->
    <script>
        const observer = lozad('.lozad', {
            loaded: function(el) {
                // Callback when an image has finished loading
                el.classList.add('loaded'); // Optional: Add a fade effect or any other styling
            }
        });
        observer.observe();
    </script>



    <script type="text/javascript">
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });

        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: true,
            focusOnSelect: true,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            }]
        });

        $('a[data-slide]').click(function(e) {
            e.preventDefault();
            var slideno = $(this).data('slide');
            $('.slider-nav').slick('slickGoTo', slideno - 1);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            var defaultOpenElement = document.getElementById("defaultOpen");
            if (defaultOpenElement) {
                defaultOpenElement.click();
            }
        });
    </script>
    <script>
    document.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });
</script>


    @section('scripts')

    @show
</body>

</html>
