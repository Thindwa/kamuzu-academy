@extends('layouts.frontend-master')

<style>
    .table td:nth-child(2),
    .table td:nth-child(3) {
        width: 75%;
    }
</style>

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Boarding Life</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white"
                                href="{{ URL::to('/boarding') }}">Boarding Life</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class=" text-uppercase fw-bold mb-3 ka-text">Boarding Life</h2>
                        <hr>
                        <div class="content pe-0 pe-lg-5">
                            <p class="lead">All students are allocated to a ‘House’ and this is the main unit for pastoral
                                and academic
                                supervision, as well as the basis for team competitions in sport, drama and other events.
                            </p>
                            <p class="lead">Each House is led by a Housemaster or Housemistress who is assisted by a team
                                of Tutors and
                                Prefects. Each student is assigned a Tutor who is a member of the teaching staff, and they
                                meet together each Thursday for an exchange of information. This is a good opportunity to
                                discuss any problems; alternatively, the Tutor can be seen at any time if there is a
                                particular need. </p>

                            <h5 class="ka-text">Name of Houses</h5>

                            <div class=" table-responsive-sm">
                                <table class="table table-striped lead">

                                    <tbody>
                                        <tr>
                                            <td>CHILANGA</td>
                                            <td>Headquarters of Senior Chief Kaomba, one of the Trustees. In Kasungu
                                                District,
                                                just south of the town.
                                                House colour: Green
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>CHILOWA</td>
                                            <td>One of the oldest Sub-chiefs in Kasungu District.
                                                House colour: Bright Red

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>GOMANI</td>
                                            <td>A Ngoni Paramount Chief in the Ntcheu and Dedza
                                                Districts.
                                                House colour: Green

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>KAPENI</td>
                                            <td>A Mang'anja Chief of the Blantyre area.
                                                House colour: Bright Red

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>KILUPULA</td>
                                            <td>A Ngonde Chief in Karonga District.
                                                House colour: Yellow

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>MBELWA</td>
                                            <td>Ngoni Paramount Chief, covering the whole Mzimba District.
                                                House colour: Oxford Blue

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>MLONYENI</td>
                                            <td>Ngoni Paramount Chief in Mchinji District.
                                                House colour: Oxford Blue

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                NTHALIRE
                                            </td>
                                            <td>Chief in Chitipa District.
                                                House colour: Yellow

                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 py-5 mt-lg-0">
                    <img loading="lazy" decoding="async" src="{!! url('images/boarding.jpg') !!}" class="rounded w-100">
                    <p class="ka-text">Aerial view of one of the hostel areas</p>

                    <div class="py-5">
                        <h5 class="ka-text">Interhouse competitions</h5>

                        <div class="row">
                            <div class="col-6">
                                <p class="lead">One of the major binding factors among house members is the interhouse
                                    competition,
                                    whether it is
                                    in sports, drama or singing competitions. Will it be Chilanga or Chilowa, Mlonyeni or
                                    Kilupula
                                    to emerge as winners? This is one of the highlights of boarding life.

                                    The game in the photo was Mbelwa Vs Chilowa judging from the shirt colours. No one wants
                                    to let
                                    his house down – not before a battalion of supporters which include fellow students and
                                    teachers.
                                </p>
                            </div>
                            <div class="col-6"> <img class="lozad" decoding="async" src="{!! url('images/interhouse.jpg') !!}"
                                    class="rounded w-100"></div>
                        </div>



                    </div>
                </div>
                <div class="row py-0">
                    <div class="col-lg-6">
                        <h5 class="ka-text">FOOD</h5>
                        <p class="lead">There are many other things which ought to go along with boarding life. One of
                            them
                            being the provision of food. Food is served in the dinning hall starting with breakfast, then
                            lunch
                            and
                            lastly supper. Main course and dessert are served during lunch and supper. There are also snacks
                            served
                            with the morning tea.</p>
                        <img class="lozad" decoding="async" src="{!! url('images/food.jpg') !!}" class="rounded w-100">
                    </div>

                    <div class="col-lg-6">
                        <h5 class="ka-text">LUNCH TIME</h5>
                        <p class="lead">All in all, boarding life builds character of tolerance, fairness and
                            responsibility as the
                            student
                            lives away from their biological mum and dad who would check on them if they have done personal
                            chores of hygiene such as brushing of one’s teeth, taking a bath etc. At the end of one’s stay
                            in
                            boarding, (s)he is more a accomplished personality</p>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
