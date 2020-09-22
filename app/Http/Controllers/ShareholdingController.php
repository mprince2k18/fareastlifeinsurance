<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shareholding;
use Carbon\Carbon;
use Alert;

class ShareholdingController extends Controller
{

    function index()
    {
      $shares = Shareholding::latest()->get();
      return view('dashboard.shareholding.index',compact('shares'));
    }

    function edit($id)
    {
      $share = Shareholding::findOrFail($id);
      return view('dashboard.shareholding.edit',compact('share'));
    }

    function trash($id)
    {
      $shares = Shareholding::findOrFail($id)->delete();
      Alert::toast('TRASHED','success');
      return back();
    }

    function create(Request $request)
    {
      $share = new Shareholding;
      $share->cat_shareholders  = $request->cat_shareholders;
      $share->number_shareholders  = $request->number_shareholders;
      $share->percentage  = $request->percentage;
      $share->created_at  = Carbon::now();
      $share->save();

      Alert::toast('ADDED','success');
      return back();
    }

    function update(Request $request, $id)
    {
      $share = Shareholding::findOrFail($id);
      $share->cat_shareholders  = $request->cat_shareholders;
      $share->number_shareholders  = $request->number_shareholders;
      $share->percentage  = $request->percentage;
      $share->created_at  = Carbon::now();
      $share->save();

      Alert::toast('ADDED','success');
      return back();
    }
    
}
