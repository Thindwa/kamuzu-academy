<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function index()
{
    $results = Result::with('subjects')->get();
    return view('results.index', compact('results'));
}

public function create()
{
    return view('results.create');
}

public function store(Request $request)
{
     $validated = $request->validate([
        'category' => 'required',
        'overall' => 'nullable|string', // Validate the overall field
        'subject.*' => 'required',
        'grade.*' => 'required',
    ]);

    // Step 1: Save the result including the overall grade
    $result = Result::create([
        'category' => $request->category,
        'overall_grade' => $request->overall, // Save the overall grade here
    ]);

    // Step 2: Save the subjects and grades
    foreach ($request->subject as $index => $subject) {
        $result->subjects()->create([
            'subject_name' => $subject,
            'grade' => $request->grade[$index]
        ]);
    }

    return redirect()->route('results.index')->with('success', 'Result created successfully.');
}

public function edit(Result $result)
{
    return view('results.edit', compact('result'));
}

public function update(Request $request, Result $result)
{
     $validated = $request->validate([
        'category' => 'required',
        'subject.*' => 'required',
        'grade.*' => 'required',
        'overall' => 'nullable', // Validate overall grade
    ]);

    // Step 1: Update the result
    $result->update([
        'category' => $request->category,
        'overall_grade' => $request->overall, // Save the overall grade
    ]);

    // Step 2: Clear and re-save the subjects
    $result->subjects()->delete();
    foreach ($request->subject as $index => $subject) {
        $result->subjects()->create([
            'subject_name' => $subject,
            'grade' => $request->grade[$index]
        ]);
    }

    return redirect()->route('results.index')->with('success', 'Result updated successfully.');
}

public function destroy(Result $result)
{
    $result->subjects()->delete(); // Deletes related subjects
    $result->delete(); // Deletes the result

    return redirect()->route('results.index')->with('success', 'Result deleted successfully.');
}


}
