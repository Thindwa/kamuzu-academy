@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize text-white">Staff</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white" href="{{ URL::to('/boarding') }}">Staff</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 mx-auto">
                    <h4 class="ka-text py-4">Academic Staff</h4>
                    <table class="table table-bordered" id="academic-staff-table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Credentials</th>
                                <th scope="col">Position</th>
                                 <th scope="col">Subjects</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($academicStaff as $staff)
                                <tr>
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $staff->credentials }}</td>
                                    <td>{{ $staff->position }}</td>
                                    <td>{{ $staff->subjects }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-9 mx-auto">
                    <h4 class="ka-text pb-2 py-4">Secretarial Staff</h4>
                    <table class="table table-striped" id="secretarial-staff-table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($secretarialStaff as $staff)
                                <tr>
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $staff->position }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-9 mx-auto">
                    <h4 class="ka-text py-4 pb-2">Heads of Support Departments</h4>
                    <table class="table table-striped" id="support-departments-table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($supportDepartments as $staff)
                                <tr>
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $staff->position }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
