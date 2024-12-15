<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffMembers = Staff::all();
        return view('staff.index', compact('staffMembers'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'category' => 'required|string',
            'name_academic.*' => 'required_if:category,AcademicStaff|string|max:255',
            'credentials.*' => 'required_if:category,AcademicStaff|string|max:255',
            'position_academic.*' => 'required_if:category,AcademicStaff|string|max:255',
            'subjects.*' => 'required_if:category,AcademicStaff|string|max:255',
            'name_secretarial.*' => 'required_if:category,SecretarialStaff|string|max:255',
            'position_secretarial.*' => 'required_if:category,SecretarialStaff|string|max:255',
            'name_support.*' => 'required_if:category,SupportDepartment|string|max:255',
            'position_support.*' => 'required_if:category,SupportDepartment|string|max:255',
        ]);

        // Create staff members based on category
        if ($request->category === 'AcademicStaff') {
            foreach ($request->name_academic as $index => $name) {
                Staff::create([
                    'category' => 'AcademicStaff',
                    'name' => $name,
                    'credentials' => $request->credentials[$index],
                    'position' => $request->position_academic[$index],
                    'subjects' => $request->subjects[$index],
                ]);
            }
        } elseif ($request->category === 'SecretarialStaff') {
            foreach ($request->name_secretarial as $index => $name) {
                Staff::create([
                    'category' => 'SecretarialStaff',
                    'name' => $name,
                    'position' => $request->position_secretarial[$index],
                    'credentials' => null, // No credentials for secretarial staff
                    'subjects' => null, // No subjects for secretarial staff
                ]);
            }
        } elseif ($request->category === 'SupportDepartment') {
            foreach ($request->name_support as $index => $name) {
                Staff::create([
                    'category' => 'SupportDepartment',
                    'name' => $name,
                    'position' => $request->position_support[$index],
                    'credentials' => null, // No credentials for support staff
                    'subjects' => null, // No subjects for support staff
                ]);
            }
        }

        return redirect()->route('staff.index')->with('success', 'Staff members added successfully!');
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

public function update(Request $request, Staff $staff)
{
    // Validate the request data
    $request->validate([
        'category' => 'required|string',
        'name_academic.*' => 'required|string|max:255',
        'credentials.*' => 'nullable|string|max:255',
        'position_academic.*' => 'required|string|max:255',
        'subjects.*' => 'nullable|string|max:255',
        'name_secretarial.*' => 'required|string|max:255',
        'position_secretarial.*' => 'required|string|max:255',
        'name_support.*' => 'required|string|max:255',
        'position_support.*' => 'required|string|max:255',
    ]);

    // Update the staff member based on the category
    $staff->category = $request->category; // Set the category

    // Clear previous entries for the respective category
    if ($request->category === 'AcademicStaff') {
        // Update academic staff specific details
        $staff->name = $request->name_academic; // Array of names
        $staff->credentials = $request->credentials ? implode(',', $request->credentials) : null; // Handle multiple credentials
        $staff->position = $request->position_academic; // Array of positions
        $staff->subjects = $request->subjects ? implode(',', $request->subjects) : null; // Handle multiple subjects
        // You may need to adjust your database schema to store these as arrays or JSON if needed.
    } elseif ($request->category === 'SecretarialStaff') {
        // Update secretarial staff specific details
        $staff->name = $request->name_secretarial; // Array of names
        $staff->position = $request->position_secretarial; // Array of positions
        $staff->credentials = null; // No credentials for secretarial staff
        $staff->subjects = null; // No subjects for secretarial staff
    } elseif ($request->category === 'SupportDepartment') {
        // Update support department specific details
        $staff->name = $request->name_support; // Array of names
        $staff->position = $request->position_support; // Array of positions
        $staff->credentials = null; // No credentials for support staff
        $staff->subjects = null; // No subjects for support staff
    }

    // Save the updated staff member
    $staff->save();

    return redirect()->route('staff.index')->with('success', 'Staff member updated successfully!');
}


    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff member deleted successfully!');
    }
}
