<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function contestEdit()
    {
        return view('admin.editContest');
    }

    public function contestUpdate(Request $request)
    {
    		//request('theme')
    		\Config::write(['contest.theme' => request('theme')]);
        return redirect('/admin');
    }
}
