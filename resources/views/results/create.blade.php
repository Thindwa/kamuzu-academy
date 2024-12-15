
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
                        <h4>Add Result
                          <a href="{{ url('results') }}" class="btn btn-secondary float-end">Back</a>
                   
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('results.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="category">Category</label><br>
                                <input type="radio" name="category" value="IGCSE" required> IGCSE
                                <input type="radio" name="category" value="AS LEVEL"> AS LEVEL
                                <input type="radio" name="category" value="A-LEVEL"> A-LEVEL
                                <input type="radio" name="category" value="GCSE"> GCSE
                                <input type="radio" name="category" value="ICCG"> ICCG
                            </div>

                            <div id="subjects-container" class="form-group mt-3">
                                <label for="subjects">Subjects & Grades</label>
                                <div class="row subject-grade">
                                    <div class="col-md-5">
                                        <input type="text" name="subject[]" class="form-control" placeholder="Subject"
                                            required>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="grade[]" class="form-control" placeholder="Grade"
                                            required>
                                    </div>

                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger remove-subject">Remove</button>
                                    </div>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <!-- Overall Grade Section -->
                                    <div id="overall-container" class="mt-3">

                                        <input type="text" name="overall" class="form-control"
                                            placeholder="Overall Grade">
                                    </div>
                                </div>
                            </div>




                            <button type="button" id="add-subject" class="btn btn-secondary mt-3">Add fields +</button>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-subject').addEventListener('click', function () {
            let container = document.getElementById('subjects-container');
            let newField = document.createElement('div');
            newField.classList.add('row', 'subject-grade', 'mt-3');
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

        // Event delegation to handle removal of dynamic fields
        document.addEventListener('click', function(e) {
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