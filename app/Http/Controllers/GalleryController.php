<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $gallery = \App\Models\Gallery::all();
        $profile = \App\Models\Profile::first();
        $data = array(
            'gallery' => $gallery,
            'profile' => $profile,
        );
        return view('gallery', $data);
    }
}
