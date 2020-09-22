<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AnnualReports;
use Alert;

class AnnualReportsController extends Controller
{

  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    // annual_report
    function annual_report()
    {
      $all_reports = AnnualReports::latest()->paginate(5);
      return view('dashboard.annual_report.index',compact('all_reports'));
    }
    function annual_report_create(Request $request)
    {

      $reports = new AnnualReports();
      $reports->desc = $request->desc;

      /*if ($request->hasFile('file')) {
        $path = $request->file('file')->store('annual_reports');
      }

      $reports->file = $path;*/

      if ($file = $request->file('file')) {
          $fileName = $file->getClientOriginalName() ;
          $destinationPath = 'uploads/ar/' ;
          $file->move($destinationPath,$fileName);
          $reports->file = $fileName;
        }

      $reports->save();


      Alert::toast('ADDED','success');
      return back();
      // return $path;
    }

    function annual_report_delete($id)
    {
      AnnualReports::findOrFail($id)->delete();
      Alert::toast('TRASHED','success');
      return back();
    }

    function annual_report_edit($id)
    {
      $each_reports = AnnualReports::findOrFail($id);
      return view('dashboard.annual_report.edit',compact('each_reports'));
    }

    function annual_report_update(Request $request, $id)
    {

      $reports = AnnualReports::where('id', $id)->first();
      $reports->desc = $request->desc;

      /*if ($request->hasFile('file')) {
        $path = $request->file('file')->store('annual_reports');
      }

      $reports->file = $path;*/

      if ($file = $request->file('file')) {
          $fileName = $file->getClientOriginalName() ;
          $destinationPath = 'uploads/ar/' ;
          $file->move($destinationPath,$fileName);
          $reports->file = $fileName;
        }

      $reports->save();

     Alert::toast('Updated','success');
     return redirect()->route('annual_report');
    }

    function download($id){
      $report_file = AnnualReports::findOrFail($id);
      $file=public_path() . '/uploads/' . $report_file->file;
      return response()->download($file);
      // return $file;
    }

    //END
}
