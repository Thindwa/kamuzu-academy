<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hierarchy;

class HierarchyController extends Controller
{
    public function index()
    {
        $hierarchies = $this->buildHierarchy();
        return view('hierarchy.index', compact('hierarchies'));
    }
    protected function buildHierarchy($parent_id = null)
    {
        $hierarchies = Hierarchy::where('parent_id', $parent_id)->get();

        foreach ($hierarchies as $hierarchy) {
            $hierarchy->children = $this->buildHierarchy($hierarchy->id);
        }

        return $hierarchies;
    }

    public function create()
    {
        return view('hierarchy.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $hierarchy = new Hierarchy;
        $hierarchy->name = $request->input('name');
        $hierarchy->position = $request->input('position');
        $hierarchy->parent_id = $request->input('parent_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/governance'), $imageName);
            $hierarchy->image_url = 'images/governance/' . $imageName;
        }


        $hierarchy->save();

        return redirect()->route('hierarchy.index')->with('success', 'Hierarchy member created successfully');
    }

    public function edit(Hierarchy $hierarchy)
    {
        return view('hierarchy.edit', compact('hierarchy'));
    }


    public function update(Request $request, Hierarchy $hierarchy)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',

        ]);

        $hierarchy->name = $request->input('name');
        $hierarchy->position = $request->input('position');


        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images/governance'), $imageName);
        //     $hierarchy->image_url = 'images/governance/' . $imageName;
        // }

        $hierarchy->save();

        return redirect()->route('hierarchy.index')->with('success', 'Hierarchy member updated successfully');
    }

    public function destroy(Hierarchy $hierarchy)
    {
        // Delete the hierarchy member
        $hierarchy->delete();

        return redirect()->route('hierarchy.index')->with('success', 'Hierarchy member deleted successfully');
    }

}