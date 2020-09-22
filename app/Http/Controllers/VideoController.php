<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;
use Carbon\Carbon;
use Alert;
use Image;

class VideoController extends Controller
{
  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    // video_index
    function video_index()
    {
      $videos = Video::all();
      return view('dashboard.video.index',compact('videos'));
    }

    // video_create
    function video_create(Request $request)
    {

      $request->validate([
        'video'          => 'required',
      ]);


      Video::insert([
        'video'       =>$request->video,
        'created_at'  =>Carbon::now(),
      ]);

      Alert::toast('ADDED','success');
      return back();

    }


    // video_delete
    function video_delete($video_id)
    {
      Video::findOrFail($video_id)->delete();

      Alert::toast('DELETED','success');
      return back();

    }

    // END
}
