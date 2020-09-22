<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ValueStatement;
use App\Year;
use App\Year2;
use Alert;

class ValueStatementController extends Controller
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
      $all_reports = ValueStatement::latest()->paginate(5);
      $year = Year::first();
      return view('dashboard.value_statement.index',compact('all_reports','year'));
    }

    function create(Request $request)
    {

      $report = new ValueStatement();
      $report->title = $request->title;
      $report->year1 = $request->year1;
      $report->year2 = $request->year2;
      $report->amount = $request->amount;
      $report->amount2 = $request->amount2;
      $report->save();


      Alert::toast('ADDED','success');
      return back();
      // return $path;
    }

    function trash($id)
    {
      ValueStatement::findOrFail($id)->delete();
      Alert::toast('TRASHED','success');
      return back();
    }

    function edit($id)
    {
      $each_reports = ValueStatement::findOrFail($id);
      $year = Year::first();
     // $year2s = Year2::all();
      return view('dashboard.value_statement.edit',compact('each_reports','year'));
    }

    function update(Request $request, $id)
    {

      $reports = ValueStatement::where('id', $id)->first();
      $reports->title = $request->title;
      $reports->year1 = $request->year1;
      $reports->year2 = $request->year2;
      $reports->amount = $request->amount;
      $reports->amount2 = $request->amount2;

      $reports->save();

     Alert::toast('Updated Successfully','success');
     return redirect()->route('value.index');
    }

}
