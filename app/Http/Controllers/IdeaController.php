<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ideas;

class IdeaController extends Controller
{
    //
    public function index()
    {
        # code...

        return view("joinIdea");
    }
    public function register(Request $request)
    {
        # code...
        $request->validate([
            'title' => 'required',
            'motive' => 'required',
            'message' => 'required',
            'email' => 'required',
            'contact_no' => 'required'
        ]);

        Ideas::create([
            'title' => $request->title,
            'message' => $request->message,
            'motive' => $request->motive,
            'email' => $request->email,
            'contact_no' => $request->contact_no
        ]);
        return redirect()->back();
    }
}
