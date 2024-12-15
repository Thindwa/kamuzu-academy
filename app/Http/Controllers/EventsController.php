<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::latest()->paginate(5);
        foreach ($events as $event) {
            if ($event->start_datetime !== null) {
                $event->start_datetime = new \DateTime($event->start_datetime);
            }

            if ($event->end_datetime !== null) {
                $event->end_datetime = new \DateTime($event->end_datetime);
            }
        }

        return view('EventsPost.index', compact('events'));
    }

    public function create(){
        return view('EventsPost.create');
    }

    public function show($id)
    {
        $event = Event::find($id);

        if (!$event) {
            abort(404);
        }

        if ($event->start_datetime !== null) {
            $event->start_datetime = new \DateTime($event->start_datetime);
        }

        if ($event->end_datetime !== null) {
            $event->end_datetime = new \DateTime($event->end_datetime);
        }

        return view('EventsPost.show', compact('event'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
            'start_datetime' => 'nullable|date',
            'end_datetime' => 'nullable|date',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Image validation
        ]);

        $slug = Str::slug($validatedData['title']);

        $event = new Event();
        $event->title = $validatedData['title'];
        $event->description = $validatedData['description'];
        $event->slug = $slug;
        $event->start_datetime = $validatedData['start_datetime'];
        $event->end_datetime = $validatedData['end_datetime'];

        if ($request->hasFile('event_image')) {
            $path = $request->file('event_image')->store('events', 'public');
            $event->event_image = $path;
        }

        $event->save();

        return redirect()->route('events.index')->with('success', 'Event created successfully');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('EventsPost.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        $validatedData = $request->validate([
            'title' => 'required|string',
            'start_datetime' => 'nullable|date',
            'end_datetime' => 'nullable|date',
            'description' => 'nullable|string',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $event->update([
            'title' => $validatedData['title'],
            'start_datetime' => $validatedData['start_datetime'],
            'end_datetime' => $validatedData['end_datetime'],
            'description' => $validatedData['description'],
        ]);

        if ($request->hasFile('event_image')) {
            // Delete old image if exists
            if ($event->event_image) {
                Storage::delete($event->event_image);
            }

            $path = $request->file('event_image')->store('events', 'public');
            $event->event_image = $path;
            $event->save();
        }

        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->event_image) {
            Storage::delete($event->event_image);
        }

        $event->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }
}
