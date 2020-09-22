<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Promotion;
use Carbon\Carbon;
use Alert;


class PromotionController extends Controller
{

     // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

// index
    function index()
    {
      return view('dashboard.promotion.index');
    }

// all
    function all()
    {
      $pages = Promotion::all();
      return view('dashboard.promotion.all',compact('pages'));
    }


// create
    function create(Request $request)
    {

      $page = new Promotion();
      $page->page_title = $request->page_title;
      $page->page_details = $request->page_details;
      $page->slug = Str::slug($request->page_title);

      if ($file = $request->file('photo')) {
          $fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/uploads/pages' ;
          $file->move($destinationPath,$fileName);
          $page->photo = $fileName;
        }else{
            $page->photo = $request->old_photo;
        }

      $page->save();


            Alert::toast('ADDED','success');
            return back();
    }


    // edit
        function edit($page_id)
        {
          $single_page = Promotion::findOrFail($page_id);
          return view('dashboard.promotion.edit',compact('single_page'));
        }

    // trash
        function trash($page_id)
        {
          Promotion::findOrFail($page_id)->delete();

          Alert::toast('TRASHED','success');
          return back();
        }

    // update
        function update(Request $request)
        {
          Promotion::findOrFail($request->page_id)->update([
            'page_title'=>$request->page_title,
            'page_details'=>$request->page_details,
            'updated_at'=>Carbon::now(),
          ]);

          Alert::toast('UPDATED','success');
          return back();
        }

    //END
}
