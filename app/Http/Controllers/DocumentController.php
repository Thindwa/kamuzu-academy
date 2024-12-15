<?php

namespace App\Http\Controllers;



use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{


public function index()
{
    $documents = Document::all();
    return view('documents.index', compact('documents'));
}

public function create()
{
    return view('documents.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'file' => 'required|mimes:pdf|max:2048',
    ]);

    $file = $request->file('file');
    $fileName = time() . '_' . $file->getClientOriginalName();
    $filePath = $file->storeAs('pdfs', $fileName, 'public');

    $document = Document::create([
        'name' => $request->input('name'),
        'file_path' => $filePath,
    ]);

    return redirect()->route('documents.index');
}

public function show(Document $document)
{
    return view('documents.show', compact('document'));
}

public function edit(Document $document)
{
    return view('documents.edit', compact('document'));
}

public function update(Request $request, Document $document)
{
    $request->validate([
        'name' => 'required',
        'file' => 'nullable|mimes:pdf|max:2048',
    ]);

    // Update document name
    $document->name = $request->input('name');

    // Check if a new file is provided
    if ($request->hasFile('file')) {
        // Validate and store the new file
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('pdfs', $fileName, 'public');

        // Delete the old file
        Storage::disk('public')->delete($document->file_path);

        // Update the file path in the database
        $document->file_path = $filePath;
    }

    // Save the changes to the document
    $document->save();

    return redirect()->route('documents.index');
}


public function destroy(Document $document)
{
    // Delete the document file and then delete the record
    Storage::disk('public')->delete($document->file_path);
    $document->delete();

    return redirect()->route('documents.index');
}

}