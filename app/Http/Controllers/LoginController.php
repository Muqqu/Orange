<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Videos;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.index');
    }

    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::User();
            if ($user->role_id == "Appointment") {
                return view("appointment.detail");
            } else {
                return redirect()->route('dashboard')->with([
                    'message' => 'Your logged in successfully',
                    'alert-type' => 'success',
                    'username' => $user->name,
                ]);
            }
        }

        return redirect("/login")->withSuccess('Login details are not valid');
    }
    public function dashboard()
    {
        $videos = Videos::all();

        if (Auth::check()) {
            return view('dashboard.index', compact("videos"));
        }

        return redirect("/login")->withSuccess('You are not allowed to access');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8|same:password',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function video($id)
    {
        $videos = Videos::find($id);
        return array('video' => $videos);
    }

    public function forgotPassword()
    {
        return view('auth.forgotpassword');
    }
    public function resetPassword($email)
    {
        return view('auth.resetpassword', compact("email"));
    }
    public function reset(Request $request)
    {

        $user = User::where("email", $request->email . ".com");
        $user->update([
            'password' => Hash::make($request->password)
        ]);
        $videos = Videos::all();
        return view('dashboard.index', compact("videos"));
    }
}
