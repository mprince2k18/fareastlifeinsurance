<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DirectorReport;
use App\Year;
use Alert;

class DirectorReportController extends Controller
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
      $all_reports = DirectorReport::latest()->paginate(5);
      $years = Year::all();
      return view('dashboard.director_reports.index',compact('all_reports','years'));
    }

    // year_create
    function year_create(Request $request)
    {
      $year = new Year();
      $year->year = $request->year;
      $year->save();

      Alert::toast('ADDED','success');
      return back();


    }



    function create(Request $request)
    {

      $reports = new DirectorReport();
      $reports->title = $request->title;
      //$reports->year_id = $request->year_id;

      /*if ($request->hasFile('file')) {
        $path = $request->file('file')->store('director_reportss');
      }*/

       if ($file = $request->file('file')) {
          $fileName = $file->getClientOriginalName() ;
          $destinationPath = 'uploads/dr/' ;
          $file->move($destinationPath,$fileName);
          $reports->file = $fileName;
        }

      

      $reports->save();


      Alert::toast('ADDED','success');
      return back();
      // return $path;
    }

    function trash($id)
    {
      DirectorReport::findOrFail($id)->delete();
      Alert::toast('TRASHED','success');
      return back();
    }

    function edit($id)
    {
      $each_reports = DirectorReport::findOrFail($id);
      $years = Year::all();
      return view('dashboard.director_reports.edit',compact('each_reports','years'));
    }

    function update(Request $request, $id)
    {

      $reports = DirectorReport::where('id', $id)->first();
      $reports->title = $request->title;
     // $reports->year_id = $request->year_id;

     /* if ($request->hasFile('file')) {
        $path = $request->file('file')->store('director_reportss');
      }*/

       if ($file = $request->file('file')) {
          $fileName = $file->getClientOriginalName() ;
          $destinationPath = 'uploads/dr/' ;
          $file->move($destinationPath,$fileName);
          $reports->file = $fileName;
        }

     

      $reports->save();

     Alert::toast('update','success');
     return redirect()->route('director.index');
    }

    function download($id){
      $report_file = DirectorReport::findOrFail($id);
      $file=public_path() . '/uploads/' . $report_file->file;
      return response()->download($file);
      // return $file;
    }

}
