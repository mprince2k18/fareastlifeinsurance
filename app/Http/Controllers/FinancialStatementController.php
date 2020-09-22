<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FinancialStatement;
use App\Year;
use App\Year2;
use Alert;

class FinancialStatementController extends Controller
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
      $all_reports = FinancialStatement::latest()->paginate(5);
      $years = Year::all();
      return view('dashboard.financial_statement.index',compact('all_reports','years'));
    }

    // year_create
    function year_update(Request $request,$id)
    {
      $year = Year::find($id);
      $year->year = $request->year;
      $year->year2 = $request->year2;
      $year->save();

      Alert::toast('ADDED','success');
      return back();


    }



    function create(Request $request)
    {

      $reports = new FinancialStatement();
      $reports->title = $request->title;
      $reports->year_id = $request->year_id;

      /*if ($request->hasFile('file')) {
        $path = $request->file('file')->store('financial_statements');
      }

      $reports->file = $path;*/

      if ($file = $request->file('file')) {
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = 'uploads/fs/' ;
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
      FinancialStatement::findOrFail($id)->delete();
      Alert::toast('TRASHED','success');
      return back();
    }

    function edit($id)
    {
      $each_reports = FinancialStatement::findOrFail($id);
      $years = Year::all();
      return view('dashboard.financial_statement.edit',compact('each_reports','years'));
    }

    function update(Request $request, $id)
    {

      $reports = FinancialStatement::where('id', $id)->first();
      $reports->title = $request->title;
      $reports->year_id = $request->year_id;

      /*if ($request->hasFile('file')) {
        $path = $request->file('file')->store('financial_statements');
      }

      $reports->file = $path;*/

      if ($file = $request->file('file')) {
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = 'uploads/fs/' ;
        $file->move($destinationPath,$fileName);
        $reports->file = $fileName;
      }

      $reports->save();

     Alert::toast('TRASHED','success');
     return back();
    }

    function download($id){
      $report_file = FinancialStatement::findOrFail($id);
      $file=public_path() . '/uploads/' . $report_file->file;
      return response()->download($file);
      // return $file;
    }


    //END
}
