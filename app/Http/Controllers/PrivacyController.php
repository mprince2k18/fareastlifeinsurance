<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privacy;
use Carbon\Carbon;
use Alert;
use Image;

class PrivacyController extends Controller
{
    // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    // privacy_index
    function privacy_index()
    {
      $terms            = Privacy::all();
      $terms_count      = Privacy::count();
      return view('dashboard.privacy.index',compact('terms','terms_count'));
    }

    // privacy_create
    function privacy_create(Request $request)
    {

      $request->validate([
        'privacy_details'          => 'required',
        'privacy_details'  => 'required',
        'photo'  => 'required',

      ]);


      Privacy::insert([
        'privacy_title'       =>$request->privacy_title,
        'privacy_details'     =>$request->privacy_details,
        'created_at'          =>Carbon::now(),
      ]);

      Alert::toast('PRIVACY ADDED','success');
      return back();
    }


        // single_privacy
        function single_privacy($privacy_id)
        {
          $single_privacy = Privacy::findOrFail($privacy_id);
          return view('dashboard.privacy.edit',compact('single_privacy'));
        }

        // privacy_update
        function privacy_update(Request $request)
        {
          Privacy::findOrFail($request->privacy_id)->update([
            'privacy_title'     =>$request->privacy_title,
            'privacy_details'   =>$request->privacy_details,
            'created_at'        =>Carbon::now(),
          ]);

          Alert::toast('PRIVACY UPDATED','success');
          return back();
        }

    // END
}
