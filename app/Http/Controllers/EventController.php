<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EventMail;

use App\Event;
use Carbon\Carbon;
use Alert;
use Image;
use Mail;

class EventController extends Controller
{
  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    // event_index

    function event_index()
    {
      return view('dashboard.event.index');
    }

    // event_create

    function event_create(Request $request)
    {

      $request->validate([
        'event_title'          => 'required',
        'event_details'  => 'required',
        'photo'  => 'required',
      ]);


      $last_inserted_id = Event::insertGetId([
        'event_title'=>$request->event_title,
        'event_details'=>$request->event_details,
        'photo'=>$request->photo,
        'created_at'=>Carbon::now(),
      ]);

      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(540,263)->save(base_path('public/uploads/events/'.$photo_name),100);
           Event::find($last_inserted_id)->update([
           'photo'          => $photo_name,
          ]);
          }

      $event_title = $request->event_title;
      Mail::to('mprince2k16@gmail.com')->send(new EventMail($event_title));

      Alert::toast('EVENT ADDED','success');
      return back();
    }

    // all_events

    function all_events()
    {
      $events = Event::all();
      return view('dashboard.event.all_events',compact('events'));
    }

    // event_delete

    function event_delete($event_id)
    {
      Event::findOrFail($event_id)->delete();

      Alert::toast('TRASHED','success');
      return back();
    }

    // event_edit

    function event_edit($event_id)
    {
      $single_event = Event::findOrFail($event_id);
      return view('dashboard.event.edit',compact('single_event'));
    }

    // event_trashed

    function event_trashed()
    {
      $trashed_events = Event::onlyTrashed()->get();
      return view('dashboard.event.trashed',compact('trashed_events'));
    }

    // event_force_delete

    function event_force_delete($event_id)
    {
      Event::onlyTrashed()->where('id',$event_id)->forceDelete();

      Alert::toast('DELETED','success');
      return back();
    }

    // event_restore

    function event_restore($event_id)
    {
      Event::onlyTrashed()->where('id',$event_id)->restore();

      Alert::toast('RESTORED','success');
      return back();
    }

    // event_update

    function event_update(Request $request)
    {

      if($request->hasFile('photo')){
         if(Event::find($request->event_id)->photo=='default.png'){
           $photo_upload     = $request->photo;
           $photo_extension  =  $photo_upload->getClientOriginalExtension();
           $photo_name       =  $request->photo . "." . $photo_extension;
           Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/events/'.$photo_name),100);
           Event::find($request->event_id)->update([
           'photo'          => $photo_name,
         ]);
         }
       else {
         //delete
         $delete_photo=Event::find($request->event_id)->photo;
         unlink(base_path('public/uploads/events/'.$delete_photo));
         //update
         $photo_upload     = $request->photo;
         $photo_extension  =  $photo_upload->getClientOriginalExtension();
         $photo_name       =  $request->event_id . "." . $photo_extension;
         Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/events/'.$photo_name),100);
         Event::find($request->event_id)->update([
         'photo'          => $photo_name,
       ]);
       }
     }


      Event::findOrFail($request->event_id)->update([
        'event_title'=>$request->event_title,
        'event_details'=>$request->event_details,
        'update_at'=>Carbon::now(),
      ]);

      Alert::toast('UPDATED','success');
      return back();

    }

    // END
}
