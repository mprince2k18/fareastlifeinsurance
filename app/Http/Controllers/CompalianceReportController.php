<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CompalianceReport;
use Alert;

class CompalianceReportController extends Controller
{
  // certificate_certificate
  function certificate_report()
  {
    $all_reports = CompalianceReport::latest()->paginate(5);
    return view('dashboard.complaince_report.index',compact('all_reports'));
  }
  function certificate_report_create(Request $request)
  {

    $reports = new CompalianceReport();
    $reports->desc = $request->desc;

    /*if ($request->hasFile('file')) {
      $path = $request->file('file')->store('complaince_reports');
    }

    $reports->file = $path;*/

    if ($file = $request->file('file')) {
      $fileName = $file->getClientOriginalName() ;
      $destinationPath = 'uploads/crp/' ;
      $file->move($destinationPath,$fileName);
      $reports->file = $fileName;
    }

    $reports->save();


    Alert::toast('ADDED','success');
    return back();
    // return $path;
  }

  function certificate_report_delete($id)
  {
    CompalianceReport::findOrFail($id)->delete();
    Alert::toast('TRASHED','success');
    return back();
  }

  function certificate_report_edit($id)
  {
    $each_reports = CompalianceReport::findOrFail($id);
    return view('dashboard.complaince_report.edit',compact('each_reports'));
  }

  function certificate_report_update(Request $request, $id)
  {

    $reports = CompalianceReport::where('id', $id)->first();
    $reports->desc = $request->desc;

    /*if ($request->hasFile('file')) {
      $path = $request->file('file')->store('complaince_reports');
    }

    $reports->file = $path;*/

    if ($file = $request->file('file')) {
      $fileName = $file->getClientOriginalName() ;
      $destinationPath = 'uploads/crp/' ;
      $file->move($destinationPath,$fileName);
      $reports->file = $fileName;
    }

    $reports->save();

   Alert::toast('TRASHED','success');
   return back();
  }

  function download($id){
    $report_file = CompalianceReport::findOrFail($id);
    $file=public_path() . '/uploads/' . $report_file->file;
    return response()->download($file);
    // return $file;
  }


}
