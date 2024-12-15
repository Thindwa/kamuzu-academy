<style>
    .logo {
        position: relative;
        font-family: 'Arial', sans-serif;
        font-size: 12px;
        /* Adjust the font size as needed */
        font-weight: bold;
        color: #008000;
        /* Green color */
        text-transform: uppercase;
        background-color: #CC9900;
        /* Gold color */
        padding: 8px 14px;
        /* Adjust padding as needed */
    }

    .logo::before,
    .logo::after {
        position: absolute;
        width: 15px;
        /* Adjust the width as needed */
        height: 2px;
    }

    .logo::before {
        top: 30%;
        left: -10px;
        /* Adjust the left position as needed */
    }

    .logo::after {
        top: 30%;
        right: -10px;
        /* Adjust the right position as needed */
    }
</style>

<header class="navigation sticky-top bg-light">

    <nav class="navbar navbar-expand-xl navbar-secondary text-center py-3">
        <div class="container">
            <div class="row">

                <div class="col-sm-3"> <a class="navbar-brand" href="{{ route('home.frontend') }}">
                        <img loading="prelaod" decoding="async" class="img-fluid d-lg-none" width="250"
                            src="{!! url('images/logo.png') !!}" alt="Wallet">
                    </a></div>
                <div class="col-sm-6">
                    <a href="{{ route('pages.child.protection') }}" style="text-decoration: none; color: inherit;"
                        class="d-lg-none">
                        <div class="text-white">CHILD PROTECTION</div>
                    </a>
                </div>
            </div>

            <a class="navbar-brand d-none d-sm-block" href="{{ route('home.frontend') }}">
                <img loading="prelaod" decoding="async" class="img-fluid " width="250" src="{!! url('images/ka1.png') !!}"
                    alt="Wallet">
            </a>

            <a href="{{ route('pages.child.protection') }}" style="text-decoration: none; color: inherit;"
                class="d-lg-none d-flex justify-content-center ">
                <div class="logo ka-text">CHILD PROTECTION</div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item active"> <a class="nav-link" href="{{ route('home.frontend') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('pages.vision') }}">Vision</a>
                            <a class="dropdown-item" href="{{ route('pages.history') }}">History</a>
                            <a class="dropdown-item" href="{{ route('pages.governance') }}">Board Of Governors</a>
                            <a class="dropdown-item" href="{{ route('pages.leadership') }}">Leadership team</a>
                            <a class="dropdown-item" href="{{ route('pages.staff') }}">Meet Our Staff</a>
                            <a class="dropdown-item" href="{{route('pages.policy')}}">Policies</a>
                            <a class="dropdown-item" href="{{ route('pages.calendar') }}">School Calendar</a>
                            <a class="dropdown-item" href="{{ route('pages.facilities') }}">Facilities</a>
                            <a class="dropdown-item" href="{{ route('pages.community') }}">The Community</a>
                            <a class="dropdown-item" href="{{ route('pages.pastoral') }}">Pastoral Care</a>
                            <a class="dropdown-item" href="{{ route('pages.chapel') }}">The Chapel</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Learning
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('pages.primary') }}">Primary School</a>
                            <a class="dropdown-item" href="{{ route('pages.lower') }}">Lower School</a>
                            <a class="dropdown-item" href="{{ route('pages.upper') }}">Upper School</a>
                            <a class="dropdown-item" href="{{ route('pages.activities') }}">Activities</a>
                            <a class="dropdown-item" href="{{ URL::to('/curriculum') }}">Curriculum</a>
                            <a class="dropdown-item" href="{{ route('pages.exams') }}">Exam Results</a>
                            <a class="dropdown-item" href="{{ route('pages.subjects') }}">Subjects</a>
                            <a class="dropdown-item" href="{{ route('pages.form6') }}">Form 6</a>
                            <a class="dropdown-item" href="{{ route('pages.classics') }}">The Classics</a>
                            <a class="dropdown-item" href="{{ route('pages.extra') }}">Extra-Curricular</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Student Life
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('pages.career') }}">Career Guidance</a>
                            <a class="dropdown-item" href="{{ route('pages.sports') }}">Sports Programs</a>
                            <a class="dropdown-item" href="{{ route('pages.council') }}">Students Council</a>
                            <a class="dropdown-item" href="{{ route('pages.support') }}">Students Support
                                Services</a>
                            <a class="dropdown-item" href="{{ route('pages.boarding') }}">Boarding Life</a>

                            <a class="dropdown-item" href="{{ route('pages.accommodation') }}">Accommodation</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown view">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Join Us
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('pages.admissions') }}">Admissions</a>
                            <a class="dropdown-item" href="{{ route('pages.scholarship') }}">Scholarships</a>
                            <a class="dropdown-item" href="{{ route('pages.vacancy') }}">Vacancies </a>
                            <a class="dropdown-item" href="{{ route('pages.alumni') }}">Alumni</a>
                        </div>
                    </li>
                    <li class="nav-item @@news">
                        <a class="nav-link" href="{{ route('news.index') }}">News</a>
                    </li>
                    <li class="nav-item @@events">
                        <a class="nav-link" href="{{ route('all.events') }}">Events</a>
                    </li>

                    <li class="nav-item @@contact">
                        <a class="nav-link" href="{{ route('pages.contact') }}">Contact</a>
                    </li>
                    @guest
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                                <a href="{{ route('login.show') }}" class="dropdown-item">Admin</a>
                                {{-- <a class="dropdown-item" href="#">Siska</a> --}}

                            </div>
                        </li>
                    @endguest
                </ul>
                <div class="d-none d-sm-block">
                    <a href="{{ route('pages.child.protection') }}" style="text-decoration: none; color: inherit;">
                        <div class="logo ka-text">CHILD PROTECTION</div>
                    </a>
                </div>
            </div>

        </div>
    </nav>
</header>
