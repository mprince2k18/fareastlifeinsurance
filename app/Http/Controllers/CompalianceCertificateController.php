<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CompalianceCertificate;
use Alert;

class CompalianceCertificateController extends Controller
{
  // certificate_certificate
  function certificate_certificate()
  {
    $all_reports = CompalianceCertificate::latest()->paginate(5);
    return view('dashboard.complaince_certificate.index',compact('all_reports'));
  }
  function certificate_certificate_create(Request $request)
  {

    $reports = new CompalianceCertificate();
    $reports->title = $request->title;

    /*if ($request->hasFile('file')) {
      $path = $request->file('file')->store('complaince_certificates');
    }

    $reports->file = $path;*/
    if ($file = $request->file('file')) {
      $fileName = $file->getClientOriginalName() ;
      $destinationPath = 'uploads/cr/' ;
      $file->move($destinationPath,$fileName);
      $reports->file = $fileName;
    }

    $reports->save();


    Alert::toast('ADDED','success');
    return back();
    // return $path;
  }

  function certificate_certificate_delete($id)
  {
    CompalianceCertificate::findOrFail($id)->delete();
    Alert::toast('TRASHED','success');
    return back();
  }

  function certificate_certificate_edit($id)
  {
    $each_reports = CompalianceCertificate::findOrFail($id);
    return view('dashboard.complaince_certificate.edit',compact('each_reports'));
  }

  function certificate_certificate_update(Request $request, $id)
  {

    $reports = CompalianceCertificate::where('id', $id)->first();
    $reports->title = $request->title;

    /*if ($request->hasFile('file')) {
      $path = $request->file('file')->store('complaince_certificates');
    }

    $reports->file = $path;*/

    if ($file = $request->file('file')) {
      $fileName = $file->getClientOriginalName() ;
      $destinationPath = 'uploads/cr/' ;
      $file->move($destinationPath,$fileName);
      $reports->file = $fileName;
    }

    $reports->save();

   Alert::toast('TRASHED','success');
   return back();
  }

  function download($id){
    $report_file = CompalianceCertificate::findOrFail($id);
    $file=public_path() . '/uploads/' . $report_file->file;
    return response()->download($file);
    // return $file;
  }


}
