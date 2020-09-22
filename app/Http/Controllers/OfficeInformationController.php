<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;
use App\OfficeInformation;

class OfficeInformationController extends Controller
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
       $oins = OfficeInformation::orderBy('id','desc')->get();
       return view('dashboard.office_information.index')->withOins($oins);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oin = new OfficeInformation;
        $oin->name = $request->name;
        $oin->where  = $request->where;
        $oin->phone  = $request->phone;
        $oin->address  = $request->address;
        $oin->catoption  = $request->catoption;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = rand(1000,9000).'.'.$image->getClientOriginalExtension();
            $location = 'uploads/officeinformation/';
            $image->move($location, $filename);
            $oin->image = $filename;
         }
        $oin->save();
        
        Alert::toast('Office Information ADDED','success');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oin = OfficeInformation::find($id);
        return view('dashboard.office_information.edit')->withOin($oin);
    
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
        $oin = OfficeInformation::find($id);
        $oin->name = $request->name;
        $oin->where  = $request->where;
        $oin->phone  = $request->phone;
        $oin->address  = $request->address;
        $oin->catoption  = $request->catoption;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = rand(1000,9000).'.'.$image->getClientOriginalExtension();
            $location = 'uploads/officeinformation/';
            $image->move($location, $filename);
            $oin->image = $filename;
         }
        $oin->save();
        
        Alert::toast('Office Information Updated','success');
        return redirect()->route('oin_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oin = OfficeInformation::find($id);
        $oin->delete();
        Alert::toast('Office Information DELETED','success');
        return redirect()->back();
    }
}
