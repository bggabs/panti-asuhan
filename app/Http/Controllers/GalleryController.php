<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $gallery = \App\Models\Gallery::all();
        return view('gallery', compact('gallery'));
    }
}
