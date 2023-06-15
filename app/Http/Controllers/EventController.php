<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = \App\Models\Activity::orderBy('datetime', 'desc')->paginate(6);
        $profile = \App\Models\Profile::first();
        $data = array(
            'events' => $events,
            'profile' => $profile,
        );
        return view('event', $data);
    }

    public function show(Activity $event)
    {
        $events = Activity::query()->orderBy('datetime', 'desc')->limit(3)->get();
        $profile = \App\Models\Profile::first();
        return view('event-detail', compact('event', 'events', 'profile'));
    }
}
