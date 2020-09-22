<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use Alert;
use Image;
use Carbon\Carbon;

class FaqController extends Controller
{
  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

// faq_index
    function faq_index()
    {
      $faqs = Faq::all();
      return view('dashboard.faq.index',compact('faqs'));
    }


// faq_create
    function faq_create(Request $request)
    {

      $request->validate([
        'question'          => 'required',
        'answer'            => 'required',
        'video'             => 'required',
      ]);


      Faq::insert([
        'question'      =>$request->question,
        'answer'        =>$request->answer,
        'video'         =>$request->video,
        'created_at'    =>Carbon::now(),
      ]);

      Alert::toast('FAQ ADDED','success');
      return back();
    }



    // faq_delete
        function faq_delete($faq_id)
        {
          Faq::findOrFail($faq_id)->delete();

          Alert::toast('FAQ DELETED','success');
          return back();
        }


    // faq_delete
        function faq_edit($faq_id)
        {
          $single_faq = Faq::findOrFail($faq_id);
          return view('dashboard.faq.edit',compact('single_faq'));
        }

    // faq_update
        function faq_update(Request $request)
        {
          Faq::findOrFail($request->faq_id)->update([
            'question'      =>$request->question,
            'answer'        =>$request->answer,
            'video'         =>$request->video,
            'updated_at'    =>Carbon::now(),
          ]);

          Alert::toast('FAQ Updated','success');
          return back();
        }

        function getVideo(Request $request)
        {
          $video=Faq::findOrFail($request->tableId)->video;
          echo $video;
        }

    // END
}
