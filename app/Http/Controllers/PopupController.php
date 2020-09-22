<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Popup;
use Image;
use Alert;
use Carbon\Carbon;

class PopupController extends Controller
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
      $galleries = Popup::latest()->get();
      return view('dashboard.popup.index',compact('galleries'));
    }


    //
    //
    // function gallery_delete($gallery_id)
    // {
    //   Gallery::findOrFail($gallery_id)->delete();
    //   return back();
    // }
    //
    //
    //
    function create (Request $request)
    {
      $request->validate([
        'photo'   => 'required',
        'link'    => 'required',
      ]);
    //
    //
      $last_inserted_id     = Popup::insertGetId([
        'photo'             =>$request->photo,
        'link'              =>$request->link,
        'fromDate'              =>$request->fromDate,
        'toDate'              =>$request->toDate,
        'created_at'        => Carbon::now(),
      ]);

      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->save(base_path('public/uploads/popup/'.$photo_name),100);
           Popup::find($last_inserted_id)->update([
           'photo'         => $photo_name,
          ]);
          }

      Alert::toast('ADDED','success');
      return back();
    }
    //END
}
