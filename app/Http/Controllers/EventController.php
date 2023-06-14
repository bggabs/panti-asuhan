<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = \App\Models\Activity::all();
        return view('event', compact('events'));
//        return view('event');
    }

    public function show(Activity $event)
    {
        $events = Activity::query()->orderBy('datetime', 'desc')->limit(3)->get();
        return view('event-detail', compact('event', 'events'));
    }
}
