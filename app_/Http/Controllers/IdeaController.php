<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ideas;
use Illuminate\Support\Facades\DB;
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
        $allowedfileExtension=['pdf','jpg','png','docx',"txt"];
        $request->validate([
            'title' => 'required',
            'motive'=>'required',
            'message'=> 'required',
            'email' => 'required',
            'contact_no'=> 'required'
        ]);

        Ideas::create([
            'title' => $request->title,
            'message'=> $request->message,
            'motive'=> $request->motive,
            'email'=> $request->email,
            'contact_no'=> $request->contact_no
        ]);
       foreach ( $request->aksfileupload as $aksfileupload) {
        # code...
        DB::table('ideasattachments')->insert([
            'email'=> $request->email,
            'fileUrl' => $request->aksfileupload[0],
        
        ]);
       }
       $files = $request->file('aksfileupload');
       foreach($files as $file){
       $filename = $file->getClientOriginalName();
       $extension = $file->getClientOriginalExtension();
       $check=in_array($extension,$allowedfileExtension);
     
       }
        $url = $request->aksfileupload[0]->move('ideas', $filename);
        // if ($request->hasFile('aksfileupload')) {
        // $file = $request->file('aksfileupload');

        //         $fileName = time() . '.' . $request->aksfileupload->extension();
        //         $url = $request->aksfileupload->move('ideas', $fileName);
        // }
        return view("joinIdea.success");
    }
}
