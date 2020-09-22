<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Alert;
use Carbon\Carbon;
use App\CorpCronicle;



class CorpCronicleController extends Controller
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
       $ccs = CorpCronicle::orderBy('id','desc')->get();
      return view('dashboard.corporate_chronicle.index')->withCcs($ccs);
    }

    function create (Request $request)
    {
      $request->validate([
        'date'  => 'required',
        'month'  => 'required',
        'year'  => 'required',
      ]);


        CorpCronicle::insertGetId([
        'date'            =>$request->date,
        'month'           =>$request->month,
        'year'            =>$request->year,
        'title'           =>$request->title,
        'desc'            =>$request->desc,
        'created_at'      => Carbon::now(),
      ]);

      Alert::toast('CorpCronicle ADDED','success');
      return back();

    }
    function getCorpCronicleUpdatePage($id)
    {
       $cc = CorpCronicle::find($id);
      return view('dashboard.corporate_chronicle.edit')->withCc($cc);
    }
 public function putCorpCronicleUpdatePage(Request $request, $id)
    {
       
        $CorpCronicle = CorpCronicle::find($id);
        $CorpCronicle->date = $request->date;
        $CorpCronicle->month = $request->month;
        $CorpCronicle->year = $request->year;
        $CorpCronicle->title = $request->title;
        $CorpCronicle->desc = $request->desc;
         $CorpCronicle->save();

        Alert::toast('CorpCronicle UPDATED','success');
        return redirect()->route('cronicle_index');
    }
    public function CorpCronicleDeletePage($id)
    {
        $CorpCronicleDeletePage = CorpCronicle::find($id);
       
        $CorpCronicleDeletePage->delete();
         Alert::toast('CorpCronicle DELETED','success');
        return redirect()->back();
    }
}
