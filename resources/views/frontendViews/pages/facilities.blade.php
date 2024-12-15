@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Facilities</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ route('home.frontend') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ route('pages.chapel') }}">Facilities</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">


                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Classrooms')" id="defaultOpen">Classrooms</button>
                    <button class="tablinks" onclick="openCity(event, 'Dining')">Dining Hall</button>
                    <button class="tablinks" onclick="openCity(event, 'Clinic')">Clinic</button>
                    <button class="tablinks" onclick="openCity(event, 'Library')">Library</button>
                </div>

                <div id="Classrooms" class="tabcontent">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="section-title">
                                <h3 class="ka-text">Classrooms</h3>
                                <div class="content pe-0 pe-lg-5">
                                    <p class="lead">
                                        The Academy has excellent teaching and learning facilities. Subjects are taught in
                                        dedicated
                                        classrooms which can accommodate up to 30 students. All our classrooms are equipped
                                        with
                                        modern whiteboards and data projectors.
                                        There are specialist rooms for practical and creative subjects including Art, Music
                                        and Food
                                        & Nutrition. We also have well equipped workshops where we teach Engineering and
                                        Design &
                                        Technology and two Computing network rooms with 30 PCs in each room.
                                        Our seven Science laboratories are equipped to teach Chemistry, Biology or Physics
                                        and we
                                        are currently in the early stages of a project to construct two new state of the art
                                        Chemistry labs.
                                        In addition the school hall, “The Auditorium”, has a stage used for theatrical
                                        productions
                                        and the Library has extensive book collections across two floors, study desks for
                                        Sixth
                                        formers, a junior reading section and computers for research.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-5 py-5 mt-lg-0">
                            <img loading="lazy" decoding="async" src="{!! url('images/chapel.jpg') !!}" class="rounded w-100">
                        </div>
                    </div>
                </div>

                <div id="Dining" class="tabcontent">
                    <h3 class="ka-text">The Dining Hall</h3>
                    <p class="lead">The dining hall, an imposing structure dawned with graceful arches like all the other
                        buildings, can accommodate over 600 students for meals. With its well aerated interior bounded by
                        thick and stable walls, the dining hall has stood the test of time. </p>
                    <div class="row pb-3">
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <img loading="lazy" decoding="async" src="{!! url('images/dining1.jpg') !!}" class="rounded w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <img loading="lazy" decoding="async" src="{!! url('images/dining3.jpg') !!}" class="rounded w-100">
                        </div>
                    </div>
                    <p class="lead">
                        It’s uses include accommodating people for breakfast starting at 6 am, lunch at noon and supper from
                        5 pm, besides tea and snacks. Headmaster’s lunch is served on Wednesdays. On these days, the
                        Headmaster sits with the Headboy and Headgirl together with head of houses. It is a time of
                        interaction and a token of appreciation for the work the prefects do. This is a privilege accorded
                        only to the leading prefects.
                    </p>
                    <p class="lead">But the hall is grander during Christmas dinners, unintentionally decorated in the
                        students’ green and gold uniform.
                        In all these, the dining hall has served for generations, some members of whom now belong to the
                        ages because their memories will last due to their documented outstanding achievements of national
                        and/or international interest.
                    </p>
                </div>

                <div id="Clinic" class="tabcontent">
                    <h3 class="ka-text">The Clinic</h3>
                    <p class="lead">The clinic, which is as old as the Academy, was established to serve students and
                        staff of Kamuzu Academy. It is probably the cleanest place in all the Academy. </p>
                    <div class="row pb-3">
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <img loading="lazy" decoding="async" src="{!! url('images/clinic1.jpg') !!}" class="rounded w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch">
                            <img loading="lazy" decoding="async" src="{!! url('images/clinic2.jpg') !!}" class="rounded w-100">
                        </div>
                    </div>
                    <h4 class="ka-text">Bed Capacity</h4>
                    <p class="lead">

                        The clinic has 4 general wards, 2 for males and 2 for females. Each ward has a bed capacity of 4,
                        which gives a total of 16 beds. Besides these, the clinic has four isolation wards, two on each
                        side. This means that the total bed capacity is 20.

                    </p>
                    <h4 class="ka-text">Other facilities</h4>
                    <p class="lead">

                        It has its own mini operating theatre with oxygen concentrator, oxygen cylinders, surgical
                        instruments, mini sterilizing machine, operation bed and a functional operating light. However, only
                        minor surgical cases are conducted here. There is also a drug store with properly fixed shelves.
                        This is where essential and non-essential drugs are kept. Some surgical instruments and laboratory
                        material are also kept here.

                    </p>

                    <h4 class="ka-text"> Personnel</h4>
                    <p class="lead">


                        The clinic personnel include one Clinical Officer, one Matron, three nurses , five ward attendants
                        and one visiting laboratory technician. Most of these people are resident on campus in houses almost
                        a stone-throw away east of the clinic, just across the ring road.


                    </p>
                </div>

                <div id="Library" class="tabcontent">
                    <h3 class="ka-text">Kamuzu Academy Library</h3>
                    <p class="lead"><i>Welcome to Kamuzu Academy Library, a Model of the Library of Congress in Washington
                            DC.</i> </p>
                    <p class="lead">
                        A purpose - built library and inaugurated by His Excellency Ngwazi Dr. H. Kamuzu Banda and Founder
                        of Kamuzu Academy on 21st November, 1981. It is a two story library. The ground floor houses the
                        reference library and the top floor houses the lending library. The Library contains over 25,000
                        volumes. In addition to these in-house resources, students have access to exceptional online
                        databases and Internet. Within the library there is a Malawiana and archive room, audio-visual room
                        and two class-size study rooms which are also used for teaching. The library provides a serene and
                        conducive academic environment for individualised and group study.
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card bg-success">
                                <div class="card-body ">
                                    <h4 class="card-title text-white">Our Mission</h4>
                                    <p class="card-text lead text-white ">The avowed mission of the Library is to support a
                                        curriculum-based
                                        instruction by encouraging academic excellence in providing service and instruction
                                        to the school community to ‘educate the whole person. </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card bg-warning">
                                <div class="card-body text-white">
                                    <h4 class="card-title ">Our Goal</h4>
                                    <p class="card-text lead text-dark">Our goal is to collaborate with faculty in
                                        designing learning
                                        opportunities with resources, information and technology, and to promote effective
                                        determined users of ideas and information.</p>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row py-5">

                        <h4 class="lead pb-2 text-center">
                            LIBRARY RULES AND REGULATIONS
                            <hr
                                style="height:5px;border-width:0;color:orange;background-color:orange; margin-left: 500px;
                                     margin-right: 500px;">
                        </h4>

                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-6 pb-5">
                            <h6 class="ka-text text-center"> OPENING HOURS </h6>

                            <div class=" table-responsive-sm">
                                <table class="table table-striped lead">

                                    <tbody>

                                        <tr>
                                            <td>Weekdays</td>
                                            <td>
                                                7.30 a.m. to 5:30 p.m.
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Weekends</td>
                                            <td>
                                                8.00 a.m. to 12 noon &
                                                1:00 p.m. to 4.30 p.m
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Public Holidays</td>
                                            <td>
                                                8.00 a.m. to 12 noon &
                                                1:00 p.m. to 4.30 p.m
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-sm-3">

                        </div>

                        <div class="card text-dark bg-light mb-3 mx-1" style="max-width: 100%;">

                            <div class="card-header">MEMBERSHIP AND LIBRARY TICKETS</div>
                            <div class="card-body">

                                <p class="card-text">
                                <ul class="list-group lead">
                                    <li class="list-group-item">Form 1-2 students = 3 tickets each. </li>
                                    <li class="list-group-item">Form 3-4 students = 4 tickets each.
                                    </li>
                                    <li class="list-group-item">Form 5-6 students = 6 tickets each.
                                    </li>
                                    <li class="list-group-item">Teachers = 10 tickets each.
                                    </li>
                                    <li class="list-group-item">All tickets issued are the responsibility of the student.
                                        Any
                                        loss should be reported to library staff immediately to prevent someone else from
                                        using
                                        the ticket(s).</li>
                                    <li class="list-group-item">Damaged tickets will be replaced immediately on surrender
                                        of
                                        the damaged ticket(s).
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="card text-dark bg-light mb-3 mx-1" style="max-width: 100%;">
                            <div class="card-header">BORROWING OF BOOKS</div>
                            <div class="card-body">

                                <p class="card-text">
                                <ul class="list-group lead">
                                    <li class="list-group-item">Students loan period =14 days</li>
                                    <li class="list-group-item">Staff loan period =1 term</li>
                                    <li class="list-group-item">After a loan period, books can be renewed unless
                                        another
                                        borrower has reserved the book/material</li>
                                    <li class="list-group-item">Students returning books after the date due will not be
                                        allowed to renew the loan. Persistent lateness in returning books may lead to
                                        the
                                        loss of some library privileges.</li>
                                    <li class="list-group-item">If the books are not returned within the specified
                                        time,
                                        a fine will be charged.</li>
                                    <li class="list-group-item">The Librarian may call for a book at any time, even if
                                        the normal period of loan has not expired.</li>
                                </ul>
                                </p>
                            </div>
                        </div>


                        <div class="card text-white bg-light mb-3 mx-1" style="max-width: 100%;">
                            <div class="card-header text-dark ">REFERENCE AND SHORT LOAN</div>
                            <div class="card-body">

                                <p class="card-text">
                                <ul class="list-group lead">
                                    <li class="list-group-item">Reference books and archival materials will not be
                                        issued out to any member. These are consulted only in the library.</li>
                                    <li class="list-group-item">Newspapers, other periodicals and all reference books
                                        are available for use downstairs only.</li>
                                    <li class="list-group-item">Books on short loan can only be used in the library
                                        and overnight in the hostels after 5.30 p.m. They must be returned the following
                                        morning at 7.30 a.m.</li>

                                </ul>
                                </p>

                            </div>
                        </div>


                        <div class="card text-dark bg-light mb-3 mx-1" style="max-width: 100%;">
                            <div class="card-header">
                                NOISE, FOOD AND DRESS
                            </div>
                            <div class="card-body">

                                <p class="card-text">
                                <ul class="list-group lead">
                                    <li class="list-group-item">Students must at all times observe and maintain
                                        silence in the library and its environs. "</li>
                                    <li class="list-group-item">When leaving the library, chairs must be pushed under
                                        the table without creating noise.</li>
                                    <li class="list-group-item">Food and drinks (including chewing gum and sweets)
                                        are not allowed in the library.</li>
                                    <li class="list-group-item">Students should neither run nor stamp their feet but
                                        walk quietly.</li>
                                    <li class="list-group-item">Students must ensure that they are appropriately
                                        dressed. Any student deemed inappropriately dressed will be asked to leave the
                                        library. </li>

                                </ul>
                                </p>
                            </div>
                        </div>

                        <div class="card text-dark bg-light mb-3 mx-1" style="max-width: 100%;">
                            <div class="card-header">SECURITY FOR LIBRARY MATERIALS</div>
                            <div class="card-body">
                                <ul class="list-group lead">
                                    <li class="list-group-item">Students must leave bags, cases, folders, etc. in the
                                        luggage area, in front of the Circulation desk.</li>
                                    <li class="list-group-item">Students shall not obtain or use a library card under false
                                        pretences. No student is supposed to check-out or check-in a book using someone
                                        else’s card/ticket.</li>
                                    <li class="list-group-item">Students are not allowed to leave their baggage overnight
                                        within the library. The library shall not take any responsibility for the loss of
                                        personal property or books already signed out to a student.</li>
                                    <li class="list-group-item">Students are required to show all items to the library
                                        staff at the Circulation desk before leaving the library. Students must comply with
                                        any request of the library staff to examine books, folders, cases, and files.</li>
                                    <li class="list-group-item">Student(s) caught marking, defacing, or mutilating books or
                                        any other library material, including graffiti on furniture, will be expected to pay
                                        for the material.</li>
                                    <li class="list-group-item">Theft of library materials will lead to serious
                                        disciplinary action.</li>
                                    <li class="list-group-item">Students must observe good order and decorum in the library
                                        at all times; for example, placing feet on the furniture, sleeping, etc., is not
                                        allowed.</li>
                                    <li class="list-group-item">Library equipment may not be moved, modified, or tampered
                                        with without permission from the librarian.</li>
                                    <li class="list-group-item">Seats in the library may not be reserved.</li>
                                    <li class="list-group-item">Students are not allowed to re-shelf books after removing
                                        them from the shelf. They should leave the books on the tables or study carrels
                                        after use.</li>
                                    <li class="list-group-item">Students are not allowed to borrow books on behalf of
                                        others or transfer borrowed materials to other students.</li>
                                    <li class="list-group-item">Students must observe and follow entrance and exit points.
                                    </li>
                                    <li class="list-group-item">Students may not take unissued library books, periodicals,
                                        or reference books into the classrooms (Room 37 & 38) in the library.</li>
                                    <li class="list-group-item">Students are reminded that the library is a place for
                                        learning and study. Any student disturbing others may be asked to leave the
                                        building, and further disciplinary action will be taken.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card text-dark bg-light mb-3 mx-1" style="max-width: 100%;">
                            <div class="card-header">DAMAGE/ LOSS OF LIBRARY MATERIALS</div>
                            <div class="card-body">
                                <ul class="list-group lead">
                                    <li class="list-group-item">Student(s) will be held responsible for any damage or loss
                                        of library materials in their possession and will be required to meet the cost of
                                        replacement.</li>
                                    <li class="list-group-item">Students must ensure that the books they borrow are in good
                                        condition to avoid being held responsible for any damages noted while returning the
                                        books.</li>
                                    <li class="list-group-item">Lost books must be reported to the librarian immediately
                                        and replaced or paid for within 30 days.</li>
                                    <li class="list-group-item">In case the book(s) are misused, wrongly handled, or lost,
                                        the person concerned will have to replace the book or pay the current market price
                                        of the book.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card text-dark bg-light mb-3 mx-1" style="max-width: 100%;">
                            <div class="card-header">USE OF ELECTRONIC RESOURCES</div>
                            <div class="card-body">
                                <ul class="list-group lead">
                                    <li class="list-group-item">Use of sound equipment like radios, Bluetooth speakers,
                                        cell phones, beepers, etc. is strictly prohibited in the library and its environs.
                                    </li>
                                    <li class="list-group-item">No call should be made or received in the library. Library
                                        staff have the power to confiscate any gadget in use.</li>
                                    <li class="list-group-item">Library computers are for academic purposes only. Do not
                                        tamper with the computer settings. Follow the internet safety guidelines.</li>
                                    <li class="list-group-item">Students may use their personal laptops only for academic
                                        purposes.</li>
                                    <li class="list-group-item">In case of need, limited photocopies of the relevant
                                        material can be made available.</li>
                                    <li class="list-group-item">Students are to safeguard access to e-resources by not
                                        sharing their username and password.</li>
                                    <li class="list-group-item">Users may download or quote a limited amount of information
                                        with proper acknowledgment.</li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
