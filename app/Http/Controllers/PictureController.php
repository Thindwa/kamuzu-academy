<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureUploadRequest;
use App\Models\Picture;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    // Display a listing of the pictures
    public function index()
    {
        $pictures = Picture::all();
        return view('pictures.index', compact('pictures'));
    }

   // Store the uploaded pictures
public function store(PictureUploadRequest $request)
{
    if ($request->hasFile('file')) {
        $pictures = [];

        foreach ($request->file('file') as $file) {
            $originalFileName = $file->getClientOriginalName();
            $filePath = $file->storeAs('pictures', $originalFileName, 'public');

            // Save each picture in the database
            $picture = Picture::create([
                'name' => $originalFileName,
                'url' => $filePath
            ]);

            $pictures[] = $picture; // Add to array
        }

        // Redirect back to the index route with a success message
        return redirect()->route('pictures.index')->with('success', 'Pictures uploaded successfully.');
    }

    // If no files were uploaded, redirect back with an error message
    return redirect()->route('pictures.index')->with('error', 'No files uploaded.');
}



public function deleteMultiple(Request $request)
{


    $pictureIds = $request->input('picture_ids');

    if (!empty($pictureIds)) {
        foreach ($pictureIds as $id) {
            $picture = Picture::find($id);
            if ($picture) {
                Storage::delete('public/' . $picture->url);
                $picture->delete();
            }
        }


         return redirect()->route('pictures.index')->with('success', 'Selected pictures deleted successfully');
    }


      return redirect()->route('pictures.index')->with('error', 'No pictures selected for deletion.');
}


    // Remove the specified picture
    public function destroy(Picture $picture)
    {

        // Delete the record from the database
        $picture->delete();

        return response()->json(['success' => true]);
    }
}
