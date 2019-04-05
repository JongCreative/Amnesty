<?php

namespace App\Http\Controllers;

use App\Http\Requests\PressRequest;
use App\Press;
use Illuminate\Http\Request;

class PressController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function __construct() {
		$this->middleware('auth', ['except' => ['index']]);
		$this->middleware('CheckRank:admin', ['except' => ['index']]);
	}

	public function index() {
		$press = Press::orderBy('date', 'desc')->paginate(20);
		\Session::flash('backUrl', '/press');
		return view('press.index', compact('press'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		if (\Session::has('backUrl')) {
			\Session::keep('backUrl');
		}
		return view('press.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(PressRequest $request) {
		$http = array('https://', 'http://');
		$press = new Press;
		$press->title = request('title');
		$press->source = request('src');
		$press->descr = request('descr');
		$press->link = str_replace($http, '', request('link'));
		$press->date = request('date');

		if (\Session::has('backUrl')) {
			$url = \Session::get('backUrl');
		} else {
			$url = '/admin';
		}

		$press->save();
		return redirect($url)->with('success', 'New press article added.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Press  $press
	 * @return \Illuminate\Http\Response
	 */
	public function show(Press $press) {
		return view('press.show', compact('press'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Press  $press
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Press $press) {
		return view('press.edit', compact('press'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Press  $press
	 * @return \Illuminate\Http\Response
	 */
	public function update(PressRequest $request, Press $press) {
		$http = array('https://', 'http://');

		$press->title = request('title');
		$press->source = request('src');
		$press->descr = request('descr');
		$press->link = str_replace($http, '', request('link'));
		$press->date = request('date');

		$press->save();
		return redirect('/press/' . $press->id)->with('success', 'Press article updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Press  $press
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Press $press) {
		$press->delete();
		return redirect('/press')->with('success', 'Press article successfully deleted');
	}
}
