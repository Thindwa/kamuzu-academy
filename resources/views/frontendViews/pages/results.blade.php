@extends('layouts.frontend-master')

@section('content')
    <section class="page-header cta2">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h1 class="mb-3 text-capitalize text-white">Exam</h1>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a class="text-white" href="{{ URL::to('/home') }}">Home</a></li>
                        <li class="list-inline-item text-white">/ &nbsp; <a class="text-white" href="{{ URL::to('/results') }}">Results</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                       
                       
                        <div class="content">
                             <!-- New content starts here -->
                            <h4 class="mt-5 text-uppercase fw-bold ka-text">June 2024 External Exam Results</h4>
                             <hr>
                            <p class="lead">
                                We are proud to announce our students’ achievements in the 2024 examinations. We celebrate
                                the outstanding accomplishments of our students and acknowledge areas for improvement.
                            </p>
                            <p class="lead">
                                We recognize and reward exceptional academic achievement by offering scholarships to
                                outstanding students who have achieved six or more A*/A grades at IGCSE, including those
                                from other schools. Depending on the number of A*/A grades, students can receive academic
                                scholarships ranging from 10% to 40% of tuition fees. We also celebrate sporting excellence
                                by offering scholarships to talented student-athletes. Outstanding performers in the field
                                of sports can receive scholarships up to 50% of tuition fees.
                            </p>
                            
                               <h6 class="mt-5 text-uppercase fw-bold ka-text">NOTABLE ACHIEVEMENTS (A*/A grades) IGCSE</h6>
                                <!-- Achievers Image Cards -->
                           
                            <div class="row">
                                @foreach($pictures as $achiever)
                                    <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                                       
                                            <img src="{{ asset('storage/' . $achiever->url) }}" class="card-img-top" alt="{{ $achiever->name }}">
                                            
                                     
                                    </div>
                                @endforeach
                            </div>
                               
                               <h6 class="mt-5 text-uppercase fw-bold ka-text text-center">CAMBRIDGE INTERNATIONAL EXAMINATIONS</h6>
                               <div class="container">
   <div class="row">
    <!-- First Row with Three Columns -->
    <div class="col-md-10">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>IGCSE</th>
                        <th>A*-C</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results->where('category', 'IGCSE')->first()->subjects ?? [] as $subject)
                    <tr>
                        <td>{{ $subject->subject_name }} </td>
                        <td>{{ $subject->grade }} %</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <h6>Overall</h6>
                        </td>
                        <td>
                            <h6>{{ $results->where('category', 'IGCSE')->first()->overall_grade ?? '-' }} %</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-10">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>AS LEVEL</th>
                        <th>A*-E</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results->where('category', 'AS LEVEL')->first()->subjects ?? [] as $subject)
                    <tr>
                        <td>{{ $subject->subject_name }} </td>
                        <td>{{ $subject->grade }} %</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <h6>Overall</h6>
                        </td>
                        <td>
                            <h6>{{ $results->where('category', 'AS LEVEL')->first()->overall_grade ?? '-' }} %</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-10">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A-LEVEL</th>
                        <th>A*-E</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results->where('category', 'A-LEVEL')->first()->subjects ?? [] as $subject)
                    <tr>
                        <td>{{ $subject->subject_name }} </td>
                        <td>{{ $subject->grade }} %</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <h6>Overall</h6>
                        </td>
                        <td>
                            <h6>{{ $results->where('category', 'A-LEVEL')->first()->overall_grade ?? '-' }} %</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row mt-12">
    <!-- Second Row with Two Columns -->
    <div class="col-md-10">
        <h6>AQA</h6>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>GCSE</th>
                        <th>Grades 4 – 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results->where('category', 'GCSE')->first()->subjects ?? [] as $subject)
                    <tr>
                        <td>{{ $subject->subject_name }} </td>
                        <td>{{ $subject->grade }} %</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <h6>Overall</h6>
                        </td>
                        <td>
                            <h6>{{ $results->where('category', 'GCSE')->first()->overall_grade ?? '-' }} %</h6>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-10">
        <h6>INTERMEDIATE CERTIFICATE IN CLASSICAL GREEK (ICCG)</h6>
        <div class="table-responsive">
            <table class="table table-bordered equal-height-table">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Greek pass rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results->where('category', 'ICCG')->first()->subjects ?? [] as $subject)
                    <tr>
                        <td>{{ $subject->subject_name }} </td>
                        <td>{{ $subject->grade }} %</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>


                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
