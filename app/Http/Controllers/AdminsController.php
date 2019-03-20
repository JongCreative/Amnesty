<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;

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
    	\Config::write(['contest.endDate' => request('endDate')]);
    	\Config::write(['contest.prize' => request('prize')]);
    	\Config::write(['contest.region' => request('region')]);
    	\Config::write(['contest.theme' => request('theme')]);

        $id = \Config::get('contest.contest');
        
        $contest = contest::find($id);

        $contest->theme = request('theme');

        $contest->save();

        return redirect('/admin');
    }
}
