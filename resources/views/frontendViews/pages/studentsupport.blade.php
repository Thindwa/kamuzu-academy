@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h1 class="mb-3 text-capitalize text-white">Student Support</h1>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/student-council') }}">Student Support</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    {{-- <p class="display-1 ka-text">
                        Student Support and Well-being
                    </p> --}}
                    <p class="lead">
                        <i class="display-1 ka-text">Our well-being room</i> is now complete and radiates positivity. Tiled
                        floors,
                        new comfy
                        chairs, and beanbags create a welcoming space for students. Colourful posters adorn the walls, and a
                        whiteboard is available for pupils to share positive and thought-provoking quotes.
                    </p>
                    <p class="lead">The well-being room is staffed at all times by dedicated team members. A published
                        timetable allows
                        students to book appointments with staff members of their choice, fostering a comfortable and
                        personalized support system.</p>

                    <p class="lead">Our well-being support group convenes every two weeks to discuss and monitor students
                        of concern,
                        ensuring consistent and tailored support.</p>

                </div>

                <div class="col-lg-7"> <img loading="lazy" decoding="async" src="{!! url('images/support1.jpg') !!}"
                        class="rounded w-100 h-90">

                </div>

            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4 py-5">
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title ka-text">Empowering Prefects</h5>
                            <p class="card-text lead">Prefects recently underwent training at Luwawa Forest Lodge, focusing
                                on
                                self-care and identifying early signs of struggles in others. This proactive approach
                                empowers them to take care of their mental health and support their peers effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title ka-text">Hostel Engagement</h5>
                            <p class="card-text lead">Weekly visits to both Boys’ and Girls’ hostels provide insights into
                                emerging issues. This ensures a direct communication channel between students and staff,
                                particularly concerning mental health challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title ka-text">‘Tea and Talk’ Event</h5>
                            <p class="card-text lead">In collaboration with Mental Health Awareness Day, prefects hosted
                                KA’s
                                ‘Tea and Talk’ event. This informal gathering allowed students to share thoughts and
                                feelings openly. The prefects led the event superbly, garnering numerous positive comments
                                from participants.</p>
                        </div>
                        <img loading="lazy" decoding="async" src="{!! url('images/support2.jpg') !!}" class="rounded w-100 h-90">
                    </div>
                </div>
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title ka-text">Collaboration with St. John of God, Mzuzu</h5>
                            <p class="card-text lead">We've formalized our connection with St. John of God, Mzuzu. Two
                                professionals—a psychologist and a psychiatrist—will visit KA at least once every half term.
                                They will conduct individual sessions for guided support and group sessions to address
                                prominent issues, offering valuable opportunities for students to receive the help they
                                need.</p>
                        </div>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title ka-text">ACT Initiative</h5>
                            <p class="card-text lead">A school-wide initiative, ACT, has been introduced to promote
                                awareness and
                                support for mental health. 'A' for Aware, Acknowledge, and Accept; 'C' for Care; and 'T' for
                                Tell encourage everyone to be conscious, compassionate, and proactive in creating a mentally
                                healthy environment</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
