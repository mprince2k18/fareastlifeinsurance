<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Gallery;
use Carbon\Carbon;
use Alert;
use Image;

class GalleryController extends Controller
{

  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    function index()
    {
      $galleries = Gallery::latest()->get();
      return view('dashboard.gallery.index',compact('galleries'));
    }




    function gallery_delete($gallery_id)
    {
      Gallery::findOrFail($gallery_id)->delete();
      return back();
    }



    function gallery_create(Request $request)
    {
      $request->validate([
        'gallery'  => 'required',
        'title'  => 'required',

      ]);


      $last_inserted_id     = Gallery::insertGetId([
        'gallery'           =>$request->gallery,
        'title'           =>$request->title,
        'created_at'        => Carbon::now(),
      ]);

      if ($request->hasFile('gallery')) {
           $photo_upload     =  $request ->gallery;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->save(base_path('public/uploads/gallery/'.$photo_name),100);
           Gallery::find($last_inserted_id)->update([
           'gallery'         => $photo_name,
          ]);
          }

      Alert::toast('ADDED','success');
      return back();
    }
    //END
}
