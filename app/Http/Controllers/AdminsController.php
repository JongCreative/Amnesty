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
}
