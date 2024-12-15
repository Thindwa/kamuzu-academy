@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                    <h1>Add Staff Member</h1>
                    <form action="{{ route('staff.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Category</label><br>
                            <div>
                                <input type="radio" id="academic" name="category" value="AcademicStaff" required>
                                <label for="academic">Academic Staff</label>
                            </div>
                            <div>
                                <input type="radio" id="secretarial" name="category" value="SecretarialStaff" required>
                                <label for="secretarial">Secretarial Staff</label>
                            </div>
                            <div>
                                <input type="radio" id="support" name="category" value="SupportDepartment" required>
                                <label for="support">Support Department</label>
                            </div>
                        </div>

                     
                        <div id="staffFields" class="mt-3"></div>
                     <div class="d-flex justify-content-start">
    <button type="button" id="addEntry" class="btn btn-secondary mx-0">Add Entry</button>
    <button type="submit" class="btn btn-primary mx-3">Submit</button>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const radioButtons = document.querySelectorAll('input[name="category"]');
    const academicFields = document.getElementById('academicFields');
    const secretarialFields = document.getElementById('secretarialFields');
    const supportFields = document.getElementById('supportFields');

    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            academicFields.style.display = 'none';
            secretarialFields.style.display = 'none';
            supportFields.style.display = 'none';

            if (this.value === 'AcademicStaff') {
                academicFields.style.display = 'block';
            } else if (this.value === 'SecretarialStaff') {
                secretarialFields.style.display = 'block';
            } else if (this.value === 'SupportDepartment') {
                supportFields.style.display = 'block';
            }
        });
    });

    document.getElementById('addEntry').addEventListener('click', function () {
        const selectedCategory = document.querySelector('input[name="category"]:checked');
        if (!selectedCategory) {
            alert('Please select a category first.');
            return;
        }
        
        let newEntry;
        if (selectedCategory.value === 'AcademicStaff') {
           newEntry = `
    <div class="form-group staff-entry row mb-3">
        <div class="col-md-3">
            <input type="text" name="name_academic[]" class="form-control" placeholder="Name" required>
        </div>
        <div class="col-md-2">
            <input type="text" name="credentials[]" class="form-control" placeholder="Credentials" required>
        </div>
        <div class="col-md-3">
            <input type="text" name="position_academic[]" class="form-control" placeholder="Position" required>
        </div>
        <div class="col-md-3">
            <input type="text" name="subjects[]" class="form-control" placeholder="Subjects" required>
        </div>
        <div class="col-md-1 d-flex align-items-end">
            <button type="button" class="btn btn-danger remove-entry">Remove</button>
        </div>
    </div>`;

        } else if (selectedCategory.value === 'SecretarialStaff') {
            newEntry = `
                <div class="form-group staff-entry">
                    <input type="text" name="name_secretarial[]" class="form-control" placeholder="Name" required>
                    <input type="text" name="position_secretarial[]" class="form-control" placeholder="Position" required>
                    <button type="button" class="btn btn-danger remove-entry">Remove</button>
                </div>`;
                
                newEntry = `
    <div class="form-group staff-entry row mb-3">
        <div class="col-md-4">
            <input type="text" name="name_secretarial[]" class="form-control" placeholder="Name" required>
        </div>
        <div class="col-md-4">
            <input type="text" name="position_secretarial[]" class="form-control" placeholder="Position" required>
        </div>
          <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="btn btn-danger remove-entry">Remove</button>
        </div>
     
    </div>`;

        } else if (selectedCategory.value === 'SupportDepartment') {
          
                
                newEntry = `
    <div class="form-group staff-entry row mb-3">
        <div class="col-md-4">
            <input type="text" name="name_support[]" class="form-control" placeholder="Name" required>
        </div>
        <div class="col-md-4">
              <input type="text" name="position_support[]" class="form-control" placeholder="Position" required>
        </div>
       
        <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="btn btn-danger remove-entry">Remove</button>
        </div>
    </div>`;

        }
        
        document.getElementById('staffFields').insertAdjacentHTML('beforeend', newEntry);
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-entry')) {
            e.target.closest('.staff-entry').remove();
        }
    });
</script>
@endsection
