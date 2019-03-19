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

    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('users.dashboard')->with('photos', $user->photos);
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


        //Change email
      
        $user = \Auth::user();
        $user->email = $request->get('email');
        $user->save();

        return redirect('/dashboard')->with("success","email changed successfully!");
            return redirect('/dashboard');
    }

    /**
     * Change Description
     * @return view, or change the description and returns to dashboard with success message.
     */
    public function changeDescr()
    {
        return view('users.changeDescription');
    }

    public function updateDescr(Request $request)
    {
       if (!(Hash::check($request->get('currentPassword'), \Auth::user()->password))){
          return redirect()->back()->with("error", "Your current password does not match with the password you provided.");
        }

        $validateData = $request->validate([
          'currentPassword' => 'required',
        ]);


        //Change Description
      
        $user = \Auth::user();
        $user->descr = $request->get('descr');
        $user->save();

        return redirect('/dashboard')->with("success","About me has changed successfully!");
            return redirect('/dashboard');
    }

    /**
     * Change Password
     * @return view, or change the description and returns to dashboard with success message.
     */
    public function changePassword()
    {
        return view('users.changePassword');
    }

    public function updatePassword(Request $request)
    {
       if (!(Hash::check($request->get('currentPassword'), \Auth::user()->password))){
          return redirect()->back()->with("error", "Your current password does not match with the password you provided.");
        }

        if(strcmp($request->get('currentPassword'), $request->get('newPassword')) == 0){
              //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        if(strcmp($request->get('newPassword_confirmation'), $request->get('newPassword')) != 0){
              //New Password and Confirm Password are not the same
            return redirect()->back()->with("error","Confirm Password does not match with the New Password");
        }

        $validateData = $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|string|min:8|confirmed',
        ]);

        //Change Description
      
        $user = \Auth::user();
        $user->password = Hash::make($request->get('newPassword'));
        $user->save();

        return redirect('/dashboard')->with("success","Password has changed successfully!");
            return redirect('/dashboard');
    }

}
