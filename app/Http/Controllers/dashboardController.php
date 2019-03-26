<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Image;
use Illuminate\Http\Request;
use App\Http\Requests\UploadAvatarRequest;

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

        dd($request);
        //Change Description
      
        $user = \Auth::user();
        $user->descr = $request->get('descr');
        $user->save();
        
        return redirect('/dashboard')->with("success","About me has changed successfully!");
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

    public function changeName()
    {
        return view('users.changeName');
    }

    public function updateName(Request $request)
    {
       if (!(Hash::check($request->get('currentPassword'), \Auth::user()->password))){
          return redirect()->back()->with("error", "Your current password does not match with the password you provided.");
        }

        $validateData = $request->validate([
          'currentPassword' => 'required',
        ]);


        //Change email
      
        $user = \Auth::user();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->title = $request->get('title');
        $user->save();

        return redirect('/dashboard')->with("success","Name has been changed successfully!");
    }

    public function avatar()
    {
        abort(404);
    }

    public function updateAvatar(UploadAvatarRequest $request)
    {
      if($request->hasFile('avatar')) 
      {

        $destinationPath = '/img/avatar/';
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(256,256)->save( public_path($destinationPath . $filename ));

        $user = \Auth::user();
        if ($user->avatar != 'default.png')
        {

          \File::delete(public_path($destinationPath . $user->avatar));
        }
        
        $user->avatar = $filename;
        $user->save();
        return redirect('/dashboard')->with('Succes', 'Avatar has been updated');
      } else {
        return redirect('/dashboard');
      }

    }

}
