<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\StaticText;
use Illuminate\Support\Str;
use App\Models\StaticImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch counts from the database
        $userCount = User::count();
        $newsPostCount = Post::count();


        $eventCount = Event::where('start_datetime', '>', Carbon::now())->count();

        // Pass counts to the view
        return view('backendViews.backend', [
            'userCount' => $userCount,
            'newsPostCount' => $newsPostCount,
            'eventCount' => $eventCount,
            // 'staffCount' => $staffCount,
        ]);
    }



    public function frontend()
    {
        $news = Post::latest()->take(3)->get();

        $news->each(function ($item) {
            $item->description = Str::limit($item->description, 100);
        });


        $StaticText = [
            'opportunities' => StaticText::where('identifier', 'opportunities')->first(),
            'english_support' => StaticText::where('identifier', 'english_support')->first(),
            'learning_support' => StaticText::where('identifier', 'learning_support')->first(),
            'counselling' => StaticText::where('identifier', 'counselling')->first(),
            'college' => StaticText::where('identifier', 'college')->first(),
            'admissions' => StaticText::where('identifier', 'admissions')->first(),
            'welcome' => StaticText::where('identifier', 'welcome')->first(),
            'vision' => StaticText::where('identifier', 'vision')->first(),
        ];

        // In your controller
        $opportunitiesImages = StaticImages::where('identifier', 'opportunities')->first();

        // Split the content for 'opportunities' identifier
        $splitContent = explode("\n", trim($StaticText['opportunities']->value));

        // dd($splitContent);

        $images = [
            'english' => StaticImages::where('identifier', 'english')->first(),
            'learning' => StaticImages::where('identifier', 'learning')->first(),
            'counselling' => StaticImages::where('identifier', 'counselling')->first(),
            'college' => StaticImages::where('identifier', 'college')->first(),
        ];

        $events = Event::latest()->take(4)->get();

    // Transform start_datetime and end_datetime for each event
    $events->each(function ($event) {
        $event->start_datetime = $event->start_datetime ? new \DateTime($event->start_datetime) : null;
        $event->end_datetime = $event->end_datetime ? new \DateTime($event->end_datetime) : null;
    });


        return view('frontendViews.frontend', compact('news','events', 'StaticText', 'images', 'opportunitiesImages', 'splitContent'));
    }



    public function allNews()
    {
        $news = Post::all();

        // Disable only_full_group_by mode
        DB::statement('SET sql_mode=(SELECT REPLACE(@@sql_mode, "ONLY_FULL_GROUP_BY", ""))');

        // Get archive links based on month of creation
        $archiveLinks = Post::selectRaw("DATE_FORMAT(created_at, '%M %Y') AS month, DATE_FORMAT(created_at, '%Y-%m') AS link")
            ->groupBy('month', 'link')
            ->orderByRaw('MAX(created_at) DESC')
            ->pluck('link', 'month');

            $news->each(function ($item) {
                $item->description = Str::limit($item->description, 100);
            });

        return view('frontendViews.news.allnews', compact('news', 'archiveLinks'));
    }

    public function allEvents()
    {
        $events = Event::all();

        return view('frontendViews.ViewEvents.allevents', compact('events'));
    }

    public function filterEvents(Request $request)
    {
        $date = $request->input('date');

        // Filter events by date
        $events = Event::whereDate('date', $date)->get();

        return view('frontendViews.news.allevents', compact('events'));
    }


    public function newsArchive($link)
    {
        // Logic to retrieve news based on the provided link
       $news = Post::where('created_at', 'LIKE', $link.'%')->get();
        // Disable only_full_group_by mode
        DB::statement('SET sql_mode=(SELECT REPLACE(@@sql_mode, "ONLY_FULL_GROUP_BY", ""))');

        // Get archive links based on month of creation
        $archiveLinks = Post::selectRaw("DATE_FORMAT(created_at, '%M %Y') AS month, DATE_FORMAT(created_at, '%Y-%m') AS link")
            ->groupBy('month', 'link')
            ->orderByRaw('MAX(created_at) DESC')
            ->pluck('link', 'month');


            $news->each(function ($item) {
                $item->description = Str::limit($item->description, 100);
            });


        return view('frontendViews.news.archive', compact('news', 'archiveLinks'));
    }

    public function singleNews($slug)
{
    // Retrieve the news item by slug
    $news = Post::where('slug', $slug)->firstOrFail();

    // Retrieve recent news (example: 5 most recent news excluding the current news)
    $recentNews = Post::where('slug', '!=', $slug)->latest()->take(5)->get();

    return view('frontendViews.news.singlenews', compact('news', 'recentNews'));
}


public function singleEvents($slug)
{
    $event = Event::where('slug', $slug)->firstOrFail();

    // Fetch recent events, excluding the current one
    $otherEvents = Event::where('slug', '!=', $slug)
                        ->latest()
                        ->take(5)
                        ->get();

    return view('frontendViews.ViewEvents.eventsingle', compact('event', 'otherEvents'));
}



}