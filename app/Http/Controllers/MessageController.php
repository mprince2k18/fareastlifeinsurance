<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Management;
use Carbon\Carbon;
use Alert;
use Image;

class MessageController extends Controller
{

  // message_index
    function message_index()
    {
      $managements = Management::all();
      return view('dashboard.message.index',compact('managements'));
    }

// message_create
    function message_create(Request $request)
    {


      $request->validate([
        'title'=>'required',
        'photo'=>'required',
        'message'=>'required',
        'signature'=>'required',
        'name'=>'required',
        'designation'=>'required',
        'qr_code'=>'required',
      ]);


      $last_inserted_id = Message::insertGetId([
        'title'=>$request->title,
        'photo'=>$request->photo,
        'message'=>$request->message,
        'signature'=>$request->signature,
        'name'=>$request->name,
        'designation'=>$request->designation,
        'qr_code'=>$request->qr_code,
        'created_at'=>Carbon::now(),
      ]);

// photo
      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(534,711)->save(base_path('public/uploads/message/'.$photo_name),100);
           Message::find($last_inserted_id)->update([
           'photo'       => $photo_name,
          ]);
          }

// signature
      if ($request->hasFile('signature')) {
           $photo_upload     =  $request ->signature;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(102,70)->save(base_path('public/uploads/signature/'.$photo_name),100);
           Message::find($last_inserted_id)->update([
           'signature'       => $photo_name,
          ]);
          }

// qr_code
      if ($request->hasFile('qr_code')) {
           $photo_upload     =  $request ->qr_code;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(202,202)->save(base_path('public/uploads/qr_code/'.$photo_name),100);
           Message::find($last_inserted_id)->update([
           'qr_code'       => $photo_name,
          ]);
          }

      Alert::toast($request->name .' ' . 'Message Added','success');
      return back();

    }

    // all_message
      function all_message()
      {
        $messages =  Message::latest()->paginate(10);
        return view('dashboard.message.all_message',compact('messages'));
      }

    // single_message
      function single_message($message_id)
      {
        $single_message = Message::findOrFail($message_id);
        $managements = Management::all();
        return view('dashboard.message.single_message',compact('single_message','managements'));
      }

    // delete_message
      function delete_message($message_id)
      {
        Message::findOrFail($message_id)->delete();

        Alert::toast('Message trashed','success');
        return back();
      }

    // update_message
      function update_message(Request $request)
      {


        if($request->hasFile('photo')){
           if(Message::find($request->message_id)->photo=='default.png'){
             $photo_upload     = $request->photo;
             $photo_extension  =  $photo_upload->getClientOriginalExtension();
             $photo_name       =  $request->photo . "." . $photo_extension;
             Image::make($photo_upload)->resize(534,711)->save(base_path('public/uploads/message/'.$photo_name),100);
             Message::find($request->message_id)->update([
             'photo'          => $photo_name,
           ]);
           }
         else {
           //delete
           $delete_photo=Message::find($request->message_id)->photo;
           unlink(base_path('public/uploads/message/'.$delete_photo));
           //update
           $photo_upload     = $request->photo;
           $photo_extension  =  $photo_upload->getClientOriginalExtension();
           $photo_name       =  $request->message_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(534,711)->save(base_path('public/uploads/message/'.$photo_name),100);
           Message::find($request->message_id)->update([
           'photo'          => $photo_name,
         ]);
         }
       }




       if($request->hasFile('signature')){
          if(Message::find($request->message_id)->signature=='default.png'){
            $photo_upload     = $request->signature;
            $photo_extension  =  $photo_upload->getClientOriginalExtension();
            $photo_name       =  $request->message_id . "." . $photo_extension;
            Image::make($photo_upload)->resize(102,70)->save(base_path('public/uploads/signature/'.$photo_name),100);
            Message::find($request->message_id)->update([
            'signature'          => $photo_name,
          ]);
          }
        else {
          //delete
          $delete_photo=Message::find($request->message_id)->signature;
          unlink(base_path('public/uploads/signature/'.$delete_photo));
          //update
          $photo_upload     = $request->signature;
          $photo_extension  =  $photo_upload->getClientOriginalExtension();
          $photo_name       =  $request->message_id . "." . $photo_extension;
          Image::make($photo_upload)->resize(102,70)->save(base_path('public/uploads/signature/'.$photo_name),100);
          Message::find($request->message_id)->update([
          'signature'          => $photo_name,
        ]);
        }
      }



      if($request->hasFile('qr_code')){
         if(Message::find($request->message_id)->qr_code=='default.png'){
           $photo_upload     = $request->qr_code;
           $photo_extension  =  $photo_upload->getClientOriginalExtension();
           $photo_name       =  $request->message_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(202,202)->save(base_path('public/uploads/qr_code/'.$photo_name),100);
           Message::find($request->message_id)->update([
           'qr_code'          => $photo_name,
         ]);
         }
       else {
         //delete
         $delete_photo=Message::find($request->message_id)->qr_code;
         unlink(base_path('public/uploads/qr_code/'.$delete_photo));
         //update
         $photo_upload     = $request->qr_code;
         $photo_extension  =  $photo_upload->getClientOriginalExtension();
         $photo_name       =  $request->message_id . "." . $photo_extension;
         Image::make($photo_upload)->resize(202,202)->save(base_path('public/uploads/qr_code/'.$photo_name),100);
         Message::find($request->message_id)->update([
         'qr_code'          => $photo_name,
       ]);
       }
     }


        Message::findOrFail($request->message_id)->update([
          'title'=>$request->title,
          'message'=>$request->message,
          'name'=>$request->name,
          'designation'=>$request->designation,
          'updated_at'=>Carbon::now(),
        ]);

        Alert::toast('Message Updated','success');
        return back();
      }

    // END
}
