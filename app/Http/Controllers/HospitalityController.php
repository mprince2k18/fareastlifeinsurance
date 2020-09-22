<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;
use App\Hospitality;

class HospitalityController extends Controller
{   

     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $nhs = Hospitality::orderBy('id','desc')->get();
       return view('dashboard.network_hospitality.index')->withNhs($nhs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $nh = new Hospitality;
        $nh->title = $request->title;
        $nh->desc  = $request->desc;
        $nh->sdes  = $request->sdes;
        $nh->save();
        
        Alert::toast('Network Hospitality ADDED','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nh = Hospitality::find($id);
        return view('dashboard.network_hospitality.edit')->withNh($nh);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nh = Hospitality::find($id);
        $nh->title = $request->title;
        $nh->desc  = $request->desc;
        $nh->sdes  = $request->sdes;
        $nh->save();
        
        Alert::toast('Network Hospitality Updated','success');
         return redirect()->route('nhospitality_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nh = Hospitality::find($id);
        $nh->delete();
        Alert::toast('Network Hospitality DELETED','success');
        return redirect()->back();
    }
}
