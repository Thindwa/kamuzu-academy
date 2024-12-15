<?php

namespace App\Http\Controllers;

use App\Models\Leadership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadershipController extends Controller
{
    public function index()
{
    $leaderships = Leadership::all();
    return view('leadership.index', compact('leaderships'));
}

public function create()
{
    return view('leadership.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'bio' => 'nullable|string',
        'message' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('leadership_images', 'public');
    }

    Leadership::create($data);
    return redirect()->route('leadership.index')->with('success', 'Leader added successfully.');
}

public function show(Leadership $leadership)
{
    return view('leadership.show', compact('leadership'));
}

public function edit(Leadership $leadership)
{
    return view('leadership.edit', compact('leadership'));
}

public function update(Request $request, Leadership $leadership)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'bio' => 'nullable|string',
        'message' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('leadership_images', 'public');
    }

    $leadership->update($data);
    return redirect()->route('leadership.index')->with('success', 'Leader updated successfully.');
}

public function destroy(Leadership $leadership)
{
    if ($leadership->image) {
        Storage::disk('public')->delete($leadership->image);
    }

    $leadership->delete();
    return redirect()->route('leadership.index')->with('success', 'Leader removed successfully.');
}

}
