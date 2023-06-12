<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = \App\Models\Activity::all();
        return view('event', compact('events'));
//        return view('event');
    }
}
