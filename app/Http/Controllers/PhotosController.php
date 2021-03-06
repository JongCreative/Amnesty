<?php

namespace App\Http\Controllers;

use Image;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // access storage for delete file

use App\Http\Requests\UploadPhotosRequest;

class PhotosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

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
    public function store(UploadPhotosRequest $request)
    {
        if ($sources = $request->File('src')) 
        {
            foreach ($sources as $src) 
            {
                // Handle filename
                $filename           = uniqid() .'.'.$src->getClientOriginalExtension();
                $filenameToStore    = config('contest.contest').'_'.$filename;

                // Generate exif data from uploaded image
                $exif               = Image::make($src)->exif();
                $exifExposure       = Image::make($src)->exif('ExposureTime');
                $exifFlash          = Image::make($src)->exif('Flash');
                $exifBrand          = Image::make($src)->exif('Make');
                $exifModel          = Image::make($src)->exif('Model');
                $exifCapture        = Image::make($src)->exif('DateTimeOriginal');
                $exifFocal          = Image::make($src)->exif('FocalLength');
                $exifAperture       = Image::make($src)->exif('ApertureValue');
                
                // Manipulated photo - stored to public.storage
                $resizedUpload      = Image::make($src);
                $resizedUpload->resize(2048, null, function ($c) 
                {
                    $c->aspectRatio();
                    $c->upsize();
                })->save(public_path('\storage/'. $filenameToStore));
                
                //Store to storage.app.public.folderNameDefinedInConfigFile
                $OriginalUpload     = $src->storeAs('public/'. config('contest.contest'), $filenameToStore);

                // Store in database
                $photo = new Photo;
                $photo->user_id         = auth()->user()->id;
                
                if (isset($series_id)) {
                    $photo->series_id = series()->id;
                }

                $photo->title           = $request->input('title');
                $photo->descr           = $request->input('descr');
                $photo->focal           = $request->input('focal');
                $photo->aperture        = $request->input('aperture');
                $photo->src             = $filenameToStore;
                $photo->exposure        = $exifExposure;
                $photo->flits           = $exifFlash;
                $photo->camera_brand    = $exifBrand;
                $photo->brand_model     = $exifModel;
                $photo->capture_time    = $exifCapture;
                $photo->focal           = $exifFocal;
                $photo->aperture        = $exifAperture;
                $photo->save();
            }
        }

        return redirect('photos')->with('success', ' Thank you for joining the contest! View all your submissions on your own dashboard!');
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

        //check for correct user_id
        if(auth()->user()->id != $photo->user_id){
            return redirect('photos')->with('error', 'Please login first');
        }
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
        $photo = Photo::find($photo->id);
        
        //check for correct user_id
        if(auth()->user()->id != $photo->user_id){
            return redirect('photos')->with('error', 'Please login first');
        }

        Storage::delete('public/'. config('contest.contest').$photo->src);
        $photo->delete();
        return redirect('photos')->with('success', 'successfully removed');
    }
}
