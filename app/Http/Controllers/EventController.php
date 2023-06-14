<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = \App\Models\Activity::all();
        $profile = \App\Models\Profile::first();
        $data = array(
            'events' => $events,
            'profile' => $profile,
        );
        return view('event', $data);
    }
}
