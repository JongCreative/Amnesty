<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function contestterms()
    {
        return view('welcome');
    }

    public function press()
    {
        return view('welcome');
    }

    public function sponsors()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('welcome');
    }

    public function faq()
    {
        return view('welcome');
    }

    public function jury()
    {
        $juryMembers = user::where('jury', true)->get();
        return view('jury', compact('juryMembers') );
    }
   
}
