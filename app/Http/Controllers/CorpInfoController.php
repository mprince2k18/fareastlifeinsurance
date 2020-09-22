<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\CorpInfo;
use Alert;


class CorpInfoController extends Controller
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

      return view('dashboard.corp_info.index');
    }

    // corp_create
    function create (Request $request)
    {
      $request->validate([
        'title'  => 'required',
        'desc'  => 'required',
      ]);

        CorpInfo::insertGetId([
        'title'           =>$request->title,
        'desc'           =>$request->desc,
        'created_at'        => Carbon::now(),
      ]);

      Alert::toast('CorpInfo ADDED','success');
      return back();

    }
    //END
}
