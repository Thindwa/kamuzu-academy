@extends('layouts.frontend-master')

@section('content')
    <div class="container">
        <div class="container py-0">

            <div class="row lead">
                <div class="col-lg-8 mx-auto">
                    <p class="lead pb-3">
                        Kamuzu Academy has both a Board of Trustees, who hold the school “in trust” for the benefit of its
                        students and a Board of Governors, who are responsible for overseeing the management of the school.
                    </p>
                    <h5 class="ka-text">Board of Governance</h5>
                    <div class="table-responsive-sm">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th>Image</th> --}}
                                    <th>Name</th>
                                    <th>Committee</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sortedBoardOfGovernors = $boardOfGovernors->sortBy('name');
                                @endphp

                                @foreach ($sortedBoardOfGovernors as $governance)
                                    <tr>
                                        {{-- <td>
                                        <img src="{{ $governance->image_url }}" class="img-fluid rounded-circle"
                                            alt="Profile Image" style="width: 50px; height: 50px;">
                                    </td> --}}
                                        <td>{{ $governance->name }}</td>
                                        <td>{{ $governance->position }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="row py-4 lead">
                <div class="col-lg-8 mx-auto">
                    <h5 class="ka-text">Board of Trustees</h5>
                    <div class="table-responsive-sm">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th>Image</th> --}}
                                    <th>Name</th>
                                    <th>Committee</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sortedBoardOfTrustees = $boardOfTrustees->sortBy('name');
                                @endphp

                                @foreach ($sortedBoardOfTrustees as $member)
                                    <tr>
                                        {{-- <td>
                                        <img src="{{ $member->image_url }}" class="img-fluid rounded-circle"
                                            alt="Profile Image" style="width: 50px; height: 50px;">
                                    </td> --}}
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->position }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <div class="row lead">
                <div class="col-lg-8 mx-auto">
                    <h5 class="ka-text">Board of Governors Sub-Committees</h5>
                    <div class="table-responsive-sm">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Chairperson</th>
                                    <th>Committee</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- No need to sort manually as this table has fixed data --}}
                                <tr>
                                    <td>Dr. G. Chizimba Msilimba</td>
                                    <td>Teaching Appointments & Curriculum Development Committee</td>
                                </tr>
                                <tr>
                                    <td>Mama Dr. C.T. Kadzamira</td>
                                    <td>General Purposes Committee</td>
                                </tr>
                                <tr>
                                    <td>Mr. M. Tembo</td>
                                    <td>Finance Committee</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
