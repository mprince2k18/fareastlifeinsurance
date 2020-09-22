<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FareastStar;
use App\FareastStarValue;
use Alert;
use Image;
use Carbon\Carbon;

class FareastStarValueController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

      function index($id)
    {
      $star = FareastStar::find($id);
      $starid = $star->id;
      $starvalues = FareastStarValue::where('fareast_star_id',$starid)->get();
      return view('dashboard.fareast_star_values.index',compact('star','starvalues'));
    }

     public function store(Request $request)
    {
         $request->validate([
	        'year'          => 'required',
	        'file'  => 'required'
        ]);

        $fsv = new FareastStarValue;
        $fsv->year = $request->year;
        $fsv->fareast_star_id = $request->fareast_star_id;

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/fareast_star_values/';
            $image->move($location, $filename);
            $fsv->file = $filename;
         }

        $fsv->save();

        Alert::toast('ADDED','success');
        return back();
    }

    public function edit($id)
    {
        $fsv = FareastStarValue::find($id);
        return view('dashboard.fareast_star_values.edit')->withFsv($fsv);
    }

    public function update(Request $request,$id)
    {
      
        $fsv = FareastStarValue::find($id);
        $fsv->year = $request->year;
       
        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/fareast_star_values/';
            $image->move($location, $filename);
            $fsv->file = $filename;
         }

        $fsv->save();

        Alert::toast('Updated','success');
        return back();
    }

    public function delete($id)
    {
        $value = FareastStarValue::find($id);
        $value->delete();
        return redirect()->back();
    }
}
