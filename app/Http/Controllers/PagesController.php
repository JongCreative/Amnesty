<?php

namespace App\Http\Controllers;

use App\User;

class PagesController extends Controller {

	public function index() {
		$juryMembers = user::where('jury', true)->get();
		return view('welcome', compact('juryMembers'));
	}

	public function contestterms() {
		return view('welcome');
	}

	public function contact() {
		return view('welcome');
	}

	public function faq() {
		return view('welcome');
	}

	public function jury() {
		$juryMembers = user::where('jury', true)->get();
		return view('jury', compact('juryMembers'));
	}

}
