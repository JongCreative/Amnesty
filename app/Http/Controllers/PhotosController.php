<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd (Photo::all());
        //dd(Photo::orderBy('created_at', 'DESC')->get());
        $photo = Photo::orderBy('id', 'DESC')->paginate(10);
        return view('photos.index')->with('photos', $photo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'descr' => 'required',
            //'src' => 'required',
        ]);

        $photo = new Photo;
        $photo->title = $request->input('title');
        $photo->descr = $request->input('descr');
        // $photo->src = $request->input('src');
        
        // $photo->exposure = $request->input('exposure');              //extract from exif
        // $photo->flits = $request->input('flits');                    //extract from exif
        // $photo->camera_brand = $request->input('camera_brand');      //extract from exif
        // $photo->brand_model = $request->input('brand_model');        //extract from exif
        // $photo->capture_time = $request->input('capture_time');      //extract from exif

        // $photo->focal = $request->input('focal');
        // $photo->aperture = $request->input('aperture');
        // $photo->save();

        return redirect('photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        $photo = Photo::find($photo->id);
        return view('photos.show')->with('photos', $photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('photos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        return redirect('photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        return redirect('photos');
    }
}
