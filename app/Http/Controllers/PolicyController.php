<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PolicyController extends Controller
{
    public function index()
    {
        $policies = Policy::all();
        return view('policies.index', compact('policies'));
    }

    public function create()
    {
        return view('policies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf',
        ]);

        // Store the file in the 'public/policies' directory
        $filePath = $request->file('file')->store('policies', 'public');

        Policy::create([
            'title' => $request->title,
            'file_path' => $filePath,
        ]);

        return redirect()->route('policies.index')->with('success', 'Policy uploaded successfully.');
    }

    public function edit(Policy $policy)
    {
        return view('policies.edit', compact('policy'));
    }

    public function update(Request $request, Policy $policy)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf',
        ]);

        // Update file if a new one is uploaded
        if ($request->hasFile('file')) {
            // Delete the old file
            Storage::disk('public')->delete($policy->file_path);

            // Store the new file in 'public/policies'
            $filePath = $request->file('file')->store('policies', 'public');
            $policy->file_path = $filePath;
        }

        // Update title
        $policy->title = $request->title;
        $policy->save();

        return redirect()->route('policies.index')->with('success', 'Policy updated successfully.');
    }

    public function destroy(Policy $policy)
    {
        // Delete the file from 'public/policies'
        Storage::disk('public')->delete($policy->file_path);
        $policy->delete();

        return redirect()->route('policies.index')->with('success', 'Policy deleted successfully.');
    }
}
