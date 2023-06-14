<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        $profile = \App\Models\Profile::first();
        $data = array(
            'profile' => $profile,
        );
        return view('donate', $data);
    }
}
