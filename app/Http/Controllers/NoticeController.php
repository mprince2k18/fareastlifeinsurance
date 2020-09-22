<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notice;
use Carbon\Carbon;
use Alert;
use Image;

class NoticeController extends Controller
{
  // middleware
    /* public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    } */

    // notice_index

    function notice_index()
    {
      return view('dashboard.notices.index');
    }

    // notice_create

    function notice_create(Request $request)
    {

      $request->validate([
        'notice_title'          => 'required',
        'noticePdf'          => 'required|mimes:pdf,docx|max:20000',
        'notice_details'  => 'required',
        'photo'  => 'required',

      ]);


      $last_inserted_id     =Notice::insertGetId([
        'notice_title'      =>$request->notice_title,
        'noticePdf'      =>"default.pdf",
        'notice_details'    =>$request->notice_details,
        'photo'             =>$request->photo,
        'created_at'        =>Carbon::now(),
      ]);

      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/notices/'.$photo_name),100);
           Notice::find($last_inserted_id)->update([
           'photo'           => $photo_name,
          ]);
      }

      if ($request->file('noticePdf')) {
      $photo = $request->noticePdf;
      $photoName = $last_inserted_id . '.' . $photo->extension();
      $photo->move(base_path("public/frontend/notice_file/"),$photoName);
      Notice::findOrFail($last_inserted_id)->update([
          'noticePdf' => $photoName,
      ]);
      // echo $photoName;
      }

      Alert::toast('ADDED','success');
      return back();
    }

    function shownoticepdf($id , $pdf){
      return response()->file(base_path("public/frontend/notice_file/".$pdf));
    }



        // all_notices

        function all_notices()
        {
          $notices = Notice::all();
          return view('dashboard.notices.all_notices',compact('notices'));
        }


        // notice_delete

        function notice_delete($notice_id)
        {
          Notice::findOrFail($notice_id)->delete();

          Alert::toast('TRASHED','success');
          return back();
        }

// notice_trashed
        function notice_trashed()
        {
          $trashed_notices = Notice::onlyTrashed()->get();
          return view('dashboard.notices.trashed',compact('trashed_notices'));
        }


            // notice_restore

            function notice_restore($notice_id)
            {
              Notice::onlyTrashed()->where('id',$notice_id)->restore();

              Alert::toast('RESTORED','success');
              return back();
            }

          // notice_edit

            function notice_edit($notice_id)
            {
              $single_notice = Notice::findOrFail($notice_id);
              return view('dashboard.notices.edit',compact('single_notice'));
            }


// notice_update
            function notice_update(Request $request)
            {

              if($request->hasFile('photo')){
                 if(Notice::find($request->notice_id)->photo=='default.png'){
                   $photo_upload     = $request->photo;
                   $photo_extension  =  $photo_upload->getClientOriginalExtension();
                   $photo_name       =  $request->photo . "." . $photo_extension;
                   Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/notices/'.$photo_name),100);
                   Notice::find($request->notice_id)->update([
                   'photo'           => $photo_name,
                 ]);
                 }
               else {
                 //delete
                 $delete_photo=Notice::find($request->notice_id)->photo;
                 unlink(base_path('public/uploads/notices/'.$delete_photo));
                 //update
                 $photo_upload     = $request->photo;
                 $photo_extension  =  $photo_upload->getClientOriginalExtension();
                 $photo_name       =  $request->notice_id . "." . $photo_extension;
                 Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/notices/'.$photo_name),100);
                 Notice::find($request->notice_id)->update([
                 'photo'           => $photo_name,
               ]);
               }
             }


              Notice::findOrFail($request->notice_id)->update([
                'notice_title'    =>$request->notice_title,
                'notice_details'  =>$request->notice_details,
                'update_at'       =>Carbon::now(),
              ]);


              Alert::toast('UPDATED','success');
              return back();

            }


            // event_force_delete

            function notice_force_delete($notice_id)
            {
              Notice::onlyTrashed()->where('id',$notice_id)->forceDelete();

              Alert::toast('DELETED','success');
              return back();
            }

    // END
}
