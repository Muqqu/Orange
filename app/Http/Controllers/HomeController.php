<?php

namespace App\Http\Controllers;

use AKCybex\JazzCash\Facades\JazzCash;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;
use Hash;

class HomeController extends Controller
{

    //
    public function jazzCash(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'email' => 'required|email|unique:users',
            'pass' => 'required|min:8',
            'phone_no' => 'required'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>  Hash::make($data['pass']),
            'phone_no' => $data['phone_no'],
        ]);

        if ($data['creditCard'] == "option1") {
        } elseif ($data['creditCard'] == "jazzCash") {

            // will return form fields
            $data = \AKCybex\JazzCash\Facades\JazzCash::request()->setAmount($data['amount'])->toArray($data);

            return view('jazzCash', compact("data"));
        } elseif ($data['creditCard'] == "easypaisa") {
            // will return form fields

            $data = \AKCybex\JazzCash\Facades\JazzCash::request()->setAmount($data['amount'])->toArray($data);

            return view('easypaisa', compact("data"));
        }

        return view("dashboard.interest");
    }


    public function easyPaisa(Request $request)
    {
        $i = $request->all();
        $data = array(
            "storeId" => Config::get('constants.easypay. STORE_ID'),
            "postBackURL" => Config::get('constants.easypay.POST_BACK_URL1'),

        );

        // will return form fields
        $data = \AKCybex\JazzCash\Facades\JazzCash::request()->setAmount($i['amount'])->toArray($i);
        return view('easyPaisa', compact("data"));
    }


    public function payment(Request $request)
    {
        $payments = $request->all();
        return view("payment.successfull", compact("payments"));
    }
}
