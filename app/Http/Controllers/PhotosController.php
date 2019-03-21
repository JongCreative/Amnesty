<?php

namespace App\Http\Controllers;

use Image;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // access storage for delete file

//use App\Http\Requests\UploadPhotosRequest;

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
        if ($sources = $request->File('src')) {
            foreach ($sources as $src) {
                $this->validate($request, [
                    'title' => 'required',
                    'descr' => 'required',
                    //apache max upload 2mb
                    'src' => 'required|image|mimes:jpeg,jpg|max:850|min:100',
                    ]);

                //Handle image format
                $src = $request->hasFile('src');
                $src = $request->File('src');
                $filenameWithExt = $src->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $src->guessClientExtension();
                $filenameToStore = uniqid($filename.'_', true).'.'. $extension;
                //Store to storage.app.public.folderNameDefinedInConfigFile
                $path = $src->storeAs('public/'. config('contest.contest'), $filenameToStore);

                $photo = new Photo;
                $photo->title = $request->input('title');
                $photo->descr = $request->input('descr');
                $photo->user_id = auth()->user()->id;
                $photo->src = $filenameToStore;
                $photo->focal = $request->input('focal');
                $photo->aperture = $request->input('aperture');
                $photo->save();
            }
        }

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
        $photo = Photo::find($photo->id);
        return view('photos.edit')->with('photos', $photo);
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
        $this->validate($request, [
            'title' => 'required',
            'descr' => 'required',
        ]);
        
        $photo              = Photo::find($photo->id);
        $photo->title       = $request->input('title');
        $photo->descr       = $request->input('descr');
        $photo->focal       = $request->input('focal');
        $photo->aperture    = $request->input('aperture');
        $photo->save();
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
        Storage::delete('public/'. config('contest.contest').$photo->src);
        $photo->delete();
        return redirect('photos')->with('success', 'successfully removed');
    }
}
