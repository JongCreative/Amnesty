<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;
use App\Http\Requests\SponsorRequest;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::orderBy('id', 'desc')->paginate(20);
        return view('sponsors.index', compact('sponsors') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SponsorRequest $request)
    {
        $sponsor = new Sponsor;
        $sponsor->name = request('name');
        $sponsor->contribution = request('contribution');
        $sponsor->save();

        return redirect('/admin')->with('success', 'New sponsor added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        return view('sponsors.show', compact('sponsor') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsor $sponsor)
    {
        return view('sponsors.edit', compact('sponsor') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsor $sponsor)
    {
        $sponsor->name = request('name');
        $sponsor->contribution = request('contribution');
        $sponsor->save();

        return redirect('/sponsors/'.$sponsor->id)->with('success', 'Sponsor Updated');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsor $sponsor)
    {
        //
    }
}
