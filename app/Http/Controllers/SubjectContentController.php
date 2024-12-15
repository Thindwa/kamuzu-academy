<?php

namespace App\Http\Controllers;

use App\Models\SubjectContent;
use Illuminate\Http\Request;

class SubjectContentController extends Controller
{
    // Display a list of all subjects' content
    public function index()
    {
        $subjects = SubjectContent::all();
        return view('admin.subjects.index', compact('subjects'));
    }

    // Show the form for creating a new subject
    public function create()
    {
        return view('admin.subjects.create');
    }

    // Store the new subject in the database
    public function store(Request $request)
    {

        $request->validate([
            'subject_name' => 'required|string|max:255|unique:subject_contents',
            'content' => 'required',
        ]);

        SubjectContent::create($request->all());

        return redirect()->route('subjectscontent.index')->with('success', 'Subject added successfully.');
    }

    // Show the form for editing subject content
    public function edit($id)
    {
        $subject = SubjectContent::findOrFail($id);
        return view('admin.subjects.edit', compact('subject'));
    }

    // Update the content in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject_name' => 'required|string|max:255|unique:subject_contents,subject_name,'.$id,
            'content' => 'required',
        ]);

        $subject = SubjectContent::findOrFail($id);
        $subject->update($request->all());

        return redirect()->route('subjectscontent.index')->with('success', 'Content updated successfully.');
    }

    // Delete a subject from the database
    public function destroy($id)
    {
        $subject = SubjectContent::findOrFail($id);
        $subject->delete();

        return redirect()->route('subjectscontent.index')->with('success', 'Subject deleted successfully.');
    }
}

