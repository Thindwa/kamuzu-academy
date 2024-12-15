@extends('layouts.app-master')

@section('content')
<div id="wrapper">
    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="bg-light p-4 rounded">
                <div class="container">
                    <h1>Edit Staff Member</h1>
                    <form action="{{ route('staff.update', $staff) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Category</label><br>
                            <div>
                                <input type="radio" id="academic" name="category" value="AcademicStaff" required {{ $staff->category === 'AcademicStaff' ? 'checked' : '' }}>
                                <label for="academic">Academic Staff</label>
                            </div>
                            <div>
                                <input type="radio" id="secretarial" name="category" value="SecretarialStaff" required {{ $staff->category === 'SecretarialStaff' ? 'checked' : '' }}>
                                <label for="secretarial">Secretarial Staff</label>
                            </div>
                            <div>
                                <input type="radio" id="support" name="category" value="SupportDepartment" required {{ $staff->category === 'SupportDepartment' ? 'checked' : '' }}>
                                <label for="support">Support Department</label>
                            </div>
                        </div>

                        <div id="staffFields" class="mt-3">
                            @if ($staff->category === 'AcademicStaff')
                                @foreach ($staff->getAcademicStaff() as $academic)
                                    <div class="form-group staff-entry row mb-3">
                                        <div class="col-md-3">
                                            <input type="text" name="name_academic[]" class="form-control" placeholder="Name" value="{{ $academic->name }}" >
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="credentials[]" class="form-control" placeholder="Credentials" value="{{ $academic->credentials }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="position_academic[]" class="form-control" placeholder="Position" value="{{ $academic->position }}" >
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="subjects[]" class="form-control" placeholder="Subjects" value="{{ $academic->subjects }}" >
                                        </div>
                                        <div class="col-md-1 d-flex align-items-end">
                                            <button type="button" class="btn btn-danger remove-entry">Remove</button>
                                        </div>
                                    </div>
                                @endforeach
                            @elseif ($staff->category === 'SecretarialStaff')
                                <div class="form-group staff-entry row mb-3">
                                    <div class="col-md-4">
                                        <input type="text" name="name_secretarial" class="form-control" placeholder="Name" value="{{ $staff->name }}" >
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="position_secretarial" class="form-control" placeholder="Position" value="{{ $staff->position }}" >
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end">
                                        <button type="button" class="btn btn-danger remove-entry">Remove</button>
                                    </div>
                                </div>
                            @elseif ($staff->category === 'SupportDepartment')
                                <div class="form-group staff-entry row mb-3">
                                    <div class="col-md-4">
                                        <input type="text" name="name_support" class="form-control" placeholder="Name" value="{{ $staff->name }}">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="position_support" class="form-control" placeholder="Position" value="{{ $staff->position }}" >
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end">
                                        <button type="button" class="btn btn-danger remove-entry">Remove</button>
                                    </div>
                                </div>
                            @endif
                        </div>

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
    const staffFields = document.getElementById('staffFields');

    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            staffFields.innerHTML = ''; // Clear existing fields
            // Logic for displaying relevant fields based on selected category
            if (this.value === 'AcademicStaff') {
                // Load Academic Staff fields if necessary
            } else if (this.value === 'SecretarialStaff') {
                // Load Secretarial Staff fields if necessary
            } else if (this.value === 'SupportDepartment') {
                // Load Support Department fields if necessary
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
                       <input type="text" name="name_academic[]" class="form-control" placeholder="Name" >
                   </div>
                   <div class="col-md-2">
                       <input type="text" name="credentials[]" class="form-control" placeholder="Credentials" >
                   </div>
                   <div class="col-md-3">
                       <input type="text" name="position_academic[]" class="form-control" placeholder="Position" >
                   </div>
                   <div class="col-md-3">
                       <input type="text" name="subjects[]" class="form-control" placeholder="Subjects" >
                   </div>
                   <div class="col-md-1 d-flex align-items-end">
                       <button type="button" class="btn btn-danger remove-entry">Remove</button>
                   </div>
               </div>`;
        } else if (selectedCategory.value === 'SecretarialStaff') {
            newEntry = `
                <div class="form-group staff-entry row mb-3">
                    <div class="col-md-4">
                        <input type="text" name="name_secretarial" class="form-control" placeholder="Name" >
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="position_secretarial" class="form-control" placeholder="Position" >
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-entry">Remove</button>
                    </div>
                </div>`;
        } else if (selectedCategory.value === 'SupportDepartment') {
            newEntry = `
                <div class="form-group staff-entry row mb-3">
                    <div class="col-md-4">
                        <input type="text" name="name_support" class="form-control" placeholder="Name" >
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="position_support" class="form-control" placeholder="Position" >
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-entry">Remove</button>
                    </div>
                </div>`;
        }
        
        staffFields.insertAdjacentHTML('beforeend', newEntry);
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-entry')) {
            e.target.closest('.staff-entry').remove();
        }
    });
</script>
@endsection
