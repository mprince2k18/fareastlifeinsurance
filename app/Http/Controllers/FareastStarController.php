<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FareastStar;
use Alert;
use Image;
use Carbon\Carbon;

class FareastStarController extends Controller
{
  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

// fareast_index
    function fareast_star_index()
    {
      $stars = FareastStar::all();
      return view('dashboard.fareast_star.index',compact('stars'));
    }


// fareast_star_create
    function fareast_star_create(Request $request)
    {

      $request->validate([
        'name'          => 'required',
        'thumbnail'  => 'required',
        'far_star_desc'  => 'required',
      ]);



      $last_inserted_id = FareastStar::insertGetId([
        'name'=>$request->name,
        'thumbnail'       =>$request->thumbnail,
        'far_star_desc'   =>$request->far_star_desc,
        'created_at'      =>Carbon::now(),
      ]);


      if ($request->hasFile('thumbnail')) {
           $photo_upload        =  $request ->thumbnail;
           $photo_extension     =  $photo_upload -> getClientOriginalExtension();
           $photo_name          =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(100,100)->save(base_path('public/uploads/fareaststar/'.$photo_name),100);
           FareastStar::find($last_inserted_id)->update([
           'thumbnail'          => $photo_name,
          ]);
          }


      Alert::toast($request->name . ' ' . 'success');
      return back();
    }

     function fareast_star_edit($id)
    {
      $st = FareastStar::find($id);
      return view('dashboard.fareast_star.edit',compact('st'));
    }


     function fareast_star_update(Request $request, $id)
    {
       $st = FareastStar::find($id);
       $st->name = $request->name;
       $st->far_star_desc = $request->far_star_desc;
       
         if ($file = $request->file('thumbnail')) {
          $fileName = $file->getClientOriginalName() ;
          $destinationPath = 'uploads/fareaststar/' ;
          $file->move($destinationPath,$fileName);
          $st->thumbnail = $fileName;
        }

        $st->save();

        Alert::toast('Fareast Star UPDATED','success');
        return redirect()->route('fareast_star_index');
    }



    // fareast_star_delete
        function fareast_star_delete($fareaststar_id)
        {
          FareastStar::findOrFail($fareaststar_id)->delete();

          Alert::toast('DELETED','success');
          return back();
        }


    // END
}