

@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                 <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Edit Result
                          <a href="{{ url('results') }}" class="btn btn-secondary float-end">Back</a>
                   
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('results.update', $result->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="category">Category</label><br>
                                <input type="radio" name="category" value="IGCSE" {{ $result->category == 'IGCSE' ?
                                'checked' : '' }} required> IGCSE
                                <input type="radio" name="category" value="AS LEVEL" {{ $result->category == 'AS LEVEL'
                                ? 'checked' : '' }}> AS LEVEL
                                <input type="radio" name="category" value="A-LEVEL" {{ $result->category == 'A-LEVEL' ?
                                'checked' : '' }}> A-LEVEL
                                <input type="radio" name="category" value="GCSE" {{ $result->category == 'GCSE' ?
                                'checked' : '' }}> GCSE
                                <input type="radio" name="category" value="ICCG" {{ $result->category == 'ICCG' ?
                                'checked' : '' }}> ICCG
                            </div>

                            <div id="subjects-container" class="form-group mt-3">
                                <label for="subjects">Subjects & Grades</label>
                                @foreach ($result->subjects as $subject)
                                <div class="row subject-grade mb-3">
                                    <div class="col-md-5">
                                        <input type="text" name="subject[]" class="form-control"
                                            value="{{ $subject->subject_name }}" placeholder="Subject" required>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="grade[]" class="form-control"
                                            value="{{ $subject->grade }}" placeholder="Grade" required>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger remove-subject">Remove</button>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="form-group mt-3">
                                <label for="overall">Overall Grade</label>
                                <input type="text" name="overall" class="form-control"
                                    value="{{ $result->overall_grade }}" placeholder="Overall Grade">
                            </div>

                            <button type="button" id="add-subject" class="btn btn-secondary mt-3">Add +</button>

                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Function to add a new subject and grade input field
        document.getElementById('add-subject').addEventListener('click', function () {
            let container = document.getElementById('subjects-container');
            let newField = document.createElement('div');
            newField.classList.add('row', 'subject-grade', 'mb-3');
            newField.innerHTML = `
                <div class="col-md-5">
                    <input type="text" name="subject[]" class="form-control" placeholder="Subject" required>
                </div>
                <div class="col-md-5">
                    <input type="text" name="grade[]" class="form-control" placeholder="Grade" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-subject">Remove</button>
                </div>
            `;
            container.appendChild(newField);
        });

        // Function to remove a subject and grade input field
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-subject')) {
                e.target.closest('.subject-grade').remove();
            }
        });
    </script>
            </div>
        </div>
    </div>
</div>
@endsection
