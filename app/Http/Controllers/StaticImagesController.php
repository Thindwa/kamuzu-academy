<?php

namespace App\Http\Controllers;

use App\Models\StaticImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class StaticImagesController extends Controller
{
    public function update(Request $request, $identifier)
{
    $image = StaticImages::where('identifier', $identifier)->first();

    if (!$image) {
        return redirect()->back()->with('error', 'Image not found.');
    }

    if ($request->hasFile('new_image')) {
        $newImages = $request->file('new_image');
        $newImageNames = [];

        if (is_array($newImages)) {

            foreach ($newImages as $newImage) {
                $uniqueFileName = uniqid() . '.' . $newImage->getClientOriginalName();
                $compressedImage = Image::make($newImage);
                $compressedImage->resize(2000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $compressedImage->save(public_path('images/static_pages_images/' . $uniqueFileName));

                $newImageNames[] = $uniqueFileName;
            }
        } else {

            $newImage = $newImages;
            $uniqueFileName = uniqid() . '.' . $newImage->getClientOriginalName();
            $compressedImage = Image::make($newImage);
            $compressedImage->resize(2000, 1000, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $compressedImage->save(public_path('images/static_pages_images/' . $uniqueFileName));
            $newImageNames = $uniqueFileName;
        }

        $this->deleteOldImages($image->filename);
        $existingImageNames = is_array($image->filename) ? $image->filename : [];

        if (is_array($newImages)) {
            $updatedImageNames = array_merge($existingImageNames, $newImageNames);
        } else {

            $updatedImageNames = $newImageNames;
        }
        $image->filename = $updatedImageNames;
        $image->save();

        return redirect()->back()->with('success', 'Images updated successfully.');
    } else {
        return redirect()->back()->with('error', 'No new images uploaded.');
    }
}

private function deleteOldImages($imageNames)
{
    if (is_array($imageNames)) {
        foreach ($imageNames as $imageName) {
            $oldImagePath = public_path('images/static_pages_images/' . $imageName);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        }
    } else {
        $oldImagePath = public_path('images/static_pages_images/' . $imageNames);
        if (File::exists($oldImagePath)) {
            File::delete($oldImagePath);
        }
    }
}
}
