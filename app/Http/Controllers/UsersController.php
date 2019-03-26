<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
use App\Http\Requests\UploadAvatarRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::where('id', '!=', 0)
            ->orderBy('id', 'asc')
            ->paginate(20);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::find($id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UploadAvatarRequest $request, $id)
    {
        $user = user::find($id);

        $user->title = $request->get('title');
        $user->descr = $request->get('descr');

        if ( $request->has('jury') ){
            $user->jury = true;
        } else {
            $user->jury = false;
        }

        if ( $request->has('admin') ){
            $user->admin = true;
        } else {
            $user->admin = false;
        }
        
        if ( $request->has('banned') ){
            $user->jury = false;
            $user->admin = false;
            $user->banned = true;
        } else {
            $user->banned = false;
        }

        if($request->hasFile('avatar')) 
        {

            $destinationPath = '/img/avatar/';
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(256,256)->save( public_path($destinationPath . $filename ));

            if ($user->avatar != 'default.png')
            {

              \File::delete(public_path($destinationPath . $user->avatar));
            }
            
            $user->avatar = $filename;

        }

        $user->save();
        return redirect('/users/'. $id)->with("success","User has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);
        $user->jury = false;
        $user->admin = false;
        $user->banned = true;
        $user->save();
        return redirect('/users/'. $id)->with("success","User has been banned");
    }

    public function deleteAvatar($id)
    {
        $user = user::find($id);
        if ($user->avatar != 'default.png')
        {
          $destinationPath = '/img/avatars/';
          \File::delete(public_path($destinationPath . $user->avatar));
        }
        $user->avatar = 'default.png';
        $user->save();

        return redirect('/users/' . $id);
    }
}
