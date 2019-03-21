<?php

namespace App\Http\Controllers;

use App\Press;
use Illuminate\Http\Request;
use App\Http\Requests\PressRequest;

class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $press = Press::orderBy('date', 'desc')->paginate(20);
        \Session::flash('backUrl', '/press');
        return view('press.index', compact('press') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('press.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PressRequest $request)
    {
        $http = array('https://', 'http://');
        $press = new Press;
        $press->title = request('title');
        $press->source = request('src');
        $press->link = str_replace($http, '', request('link'));
        $press->date = request('date');

        $press->save();
        return redirect('/press')->with('success', 'New press article added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function show(Press $press)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function edit(Press $press)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(PressRequest $request, Press $press)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function destroy(Press $press)
    {
        //
    }
}
