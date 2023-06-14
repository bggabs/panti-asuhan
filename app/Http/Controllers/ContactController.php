<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        Feedback::all();
        $feedback = Feedback::orderBy('id', 'asc')->paginate(6);
        return view('contact',compact('feedback'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        return view('dashboard.pages.child.form-child');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->photo);
        //melakukan validasi data
        $request->validate([
            'id'=>'required',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        //mengisi nilai model Gallery
        $feedback = new Feedback;
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->message = $request->input('message');

        do {
            $id = rand(1000, 9999);
        } while (Feedback::where('id', $id)->exists());

        $feedback->id = $id;
        $feedback->save();

//        $feedback->id = $id;
//        $feedback->photo = $request->file('photo')->store('feedback', 'public');
//        $feedback->save();

        //Child::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('dashboard.contact.index')
            ->with('success', 'Berhasil Mengirim Feedback Anda!');
    }
}
