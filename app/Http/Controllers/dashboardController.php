<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function index()
    {
        return view('users.dashboard');
    }

    public function changeEmail()
    {
        return view('users.changeEmail');
    }

    public function updateEmail(Request $request)
    {
       if (!(Hash::check($request->get('currentPassword'), \Auth::user()->password))){
          return redirect()->back()->with("error", "Your current password does not match with the password you provided.");
        }

        $validateData = $request->validate([
          'currentPassword' => 'required',
        ]);


        //Change Password
      
        $user = \Auth::user();
        $user->email = $request->get('email');
        $user->save();

        return redirect('/dashboard')->with("success","email changed successfully!");
            return redirect('/dashboard');
    }

}
