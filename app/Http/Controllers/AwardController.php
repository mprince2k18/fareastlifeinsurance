<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Award;
use Alert;
use Image;
use Carbon\Carbon;

class AwardController extends Controller
{
  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

// fareast_index
    function award_index()
    {
      $awards = Award::all();
      return view('dashboard.awards.index',compact('awards'));
    }


// fareast_star_create
    function award_create(Request $request)
    {

      $request->validate([
        'name'          =>'required',
        'thumbnail'          =>'required',
      ]);


      $last_inserted_id = Award::insertGetId([
        'name'        =>$request->name,
        'thumbnail'   =>$request->thumbnail,
        'created_at'  =>Carbon::now(),
      ]);


      if ($request->hasFile('thumbnail')) {
           $photo_upload     =  $request ->thumbnail;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(150,209)->save(base_path('public/uploads/awards/'.$photo_name),100);
           Award::find($last_inserted_id)->update([
           'thumbnail'       => $photo_name,
          ]);
          }

      Alert::toast($request->name . ' ' . 'success');
      return back();
    }

     function award_edit($id)
    {
      $award = Award::find($id);
      return view('dashboard.awards.edit',compact('award'));
    }


     function award_update(Request $request, $id)
    {
       $award = Award::find($id);
       $award->name = $request->name;
       
         if ($file = $request->file('thumbnail')) {
          $fileName = $file->getClientOriginalName() ;
          $destinationPath = 'uploads/awards/' ;
          $file->move($destinationPath,$fileName);
          $award->thumbnail = $fileName;
        }

        $award->save();

        Alert::toast('Award UPDATED','success');
        return redirect()->route('award_index');
    }



    // fareast_star_delete
        function award_trash($award_id)
        {
          Award::findOrFail($award_id)->delete();

          Alert::toast('DELETED','success');
          return back();
        }

        // END
}
