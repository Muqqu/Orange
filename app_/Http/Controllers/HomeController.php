<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;
use App\Models\TimeSlots;
use Hash;
class HomeController extends Controller
{

    //
    public function jazzCash(Request $request){
        $data = $request->all();
        $request->validate([
            'email' => 'required',
            'pass'=>'required|min:8',
            'phone_no'=> 'required'
        ]);
      
        User::create([
            'name' =>$data['name'],
            'email' => $data['email'],
            'password' =>  Hash::make($data['pass'])
        ]);
    
        if($data['creditCard'] == "option1"){

        }
        elseif($data['creditCard'] == "jazzCash"){
            // will return form fields
$data = \AKCybex\JazzCash\Facades\JazzCash::request()->setAmount($data['amount'])->toArray($i);

return view('jazzCash',compact("data"));
        }

        elseif($data['creditCard'] == "easypaisa"){
            // will return form fields
         
$data = \AKCybex\JazzCash\Facades\JazzCash::request()->setAmount($data['amount'])->toArray($i);

return view('easypaisa',compact("data"));
        }



    }


    public function easyPaisa(Request $request){
        $i = $request->all();
    $data = array(
        "storeId"=> Config::get('constants.easypay. STORE_ID'),
"postBackURL"=> Config::get('constants.easypay.POST_BACK_URL1'), 

    );

// will return form fields
$data = \AKCybex\JazzCash\Facades\JazzCash::request()->setAmount($i['amount'])->toArray($i);

    return view('easyPaisa',compact("data"));

    }
}
