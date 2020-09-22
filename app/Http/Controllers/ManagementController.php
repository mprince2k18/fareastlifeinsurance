<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ManagementBoard;
use App\Management;
use App\Ceo;
use App\Chairman;
use Carbon\Carbon;
use Alert;
use Image;

class ManagementController extends Controller
{

  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

    // chairman
    function chairman()
    {
      return view('dashboard.management.chairman');
    }

    // chairman
    function ceo()
    {
      return view('dashboard.management.ceo');
    }

    // chairman_create
    function chairman_create(Request $request)
    {

      $request->validate([
        'name'                  => 'required',
        'chairman_message'      => 'required',
        'position'              => 'required',
      ]);


      $last_inserted_id = Chairman::insertGetId($request->except('_token'));


            if ($request->hasFile('circle_photo')) {
                 $photo_upload     =  $request ->circle_photo;
                 $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                 $photo_name       =  $last_inserted_id . "." . $photo_extension;
                 Image::make($photo_upload)->save(base_path('public/uploads/chairman/'.$photo_name),100);
                 Chairman::find($last_inserted_id)->update([
                 'circle_photo'           => $photo_name,
                ]);
                }

            if ($request->hasFile('square_photo')) {
                 $photo_upload     =  $request ->square_photo;
                 $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                 $photo_name       =  $last_inserted_id . "." . $photo_extension;
                 Image::make($photo_upload)->save(base_path('public/uploads/chairman/'.$photo_name),100);
                 Chairman::find($last_inserted_id)->update([
                 'square_photo'           => $photo_name,
                ]);
                }

            if ($request->hasFile('long_photo')) {
                 $photo_upload     =  $request ->long_photo;
                 $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                 $photo_name       =  $last_inserted_id . "." . $photo_extension;
                 Image::make($photo_upload)->save(base_path('public/uploads/chairman/'.$photo_name),100);
                 Chairman::find($last_inserted_id)->update([
                 'long_photo'           => $photo_name,
                ]);
                }

                // signature
                      if ($request->hasFile('signature')) {
                           $photo_upload     =  $request ->signature;
                           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                           $photo_name       =  $last_inserted_id . "." . $photo_extension;
                           Image::make($photo_upload)->save(base_path('public/uploads/signature/'.$photo_name),100);
                           Chairman::find($last_inserted_id)->update([
                           'signature'       => $photo_name,
                          ]);
                          }

                // qr_code
                      if ($request->hasFile('qr_code')) {
                           $photo_upload     =  $request ->qr_code;
                           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                           $photo_name       =  $last_inserted_id . "." . $photo_extension;
                           Image::make($photo_upload)->save(base_path('public/uploads/qr_code/'.$photo_name),100);
                           Chairman::find($last_inserted_id)->update([
                           'qr_code'       => $photo_name,
                          ]);
                          }


      Alert::toast('ADDED ' . 'success');
      return back();
    }

    // chairman_create
    function ceo_create(Request $request)
    {

      $request->validate([
        'name'                  => 'required',
        'chairman_message'      => 'required',
        'position'              => 'required',
      ]);


      $last_inserted_id = Ceo::insertGetId($request->except('_token'));


            if ($request->hasFile('circle_photo')) {
                 $photo_upload     =  $request ->circle_photo;
                 $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                 $photo_name       =  $last_inserted_id . "." . $photo_extension;
                 Image::make($photo_upload)->save(base_path('public/uploads/ceo/'.$photo_name),100);
                 Ceo::find($last_inserted_id)->update([
                 'circle_photo'           => $photo_name,
                ]);
                }

            if ($request->hasFile('square_photo')) {
                 $photo_upload     =  $request ->square_photo;
                 $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                 $photo_name       =  $last_inserted_id . "." . $photo_extension;
                 Image::make($photo_upload)->save(base_path('public/uploads/ceo/'.$photo_name),100);
                 Ceo::find($last_inserted_id)->update([
                 'square_photo'           => $photo_name,
                ]);
                }

            if ($request->hasFile('long_photo')) {
                 $photo_upload     =  $request ->long_photo;
                 $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                 $photo_name       =  $last_inserted_id . "." . $photo_extension;
                 Image::make($photo_upload)->save(base_path('public/uploads/ceo/'.$photo_name),100);
                 Ceo::find($last_inserted_id)->update([
                 'long_photo'           => $photo_name,
                ]);
                }

                // signature
                      if ($request->hasFile('signature')) {
                           $photo_upload     =  $request ->signature;
                           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                           $photo_name       =  $last_inserted_id . "." . $photo_extension;
                           Image::make($photo_upload)->save(base_path('public/uploads/signature/'.$photo_name),100);
                           Ceo::find($last_inserted_id)->update([
                           'signature'       => $photo_name,
                          ]);
                          }

                // qr_code
                      if ($request->hasFile('qr_code')) {
                           $photo_upload     =  $request ->qr_code;
                           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                           $photo_name       =  $last_inserted_id . "." . $photo_extension;
                           Image::make($photo_upload)->save(base_path('public/uploads/qr_code/'.$photo_name),100);
                           Ceo::find($last_inserted_id)->update([
                           'qr_code'       => $photo_name,
                          ]);
                          }


      Alert::toast('ADDED ' . 'success');
      return back();
    }

    // management_index
    function management_index()
    {
      $management_boards = ManagementBoard::all();
      return view('dashboard.management.index',compact('management_boards'));
    }


    // management_delete
    function management_delete($management_id)
    {
      Management::findOrFail($management_id)->delete();

      Alert::toast('DELETED' . 'success');
      return back();
    }

    // management_edit
    function management_edit($management_id)
    {
      $management_boards = ManagementBoard::all();
      $single_management = Management::findOrFail($management_id);
      return view('dashboard.management.edit',compact('management_boards','single_management'));
    }



    // management_create
    function management_create(Request $request)
    {

      $request->validate([
        'name'                  => 'required',
        'speaks'                => 'required',
        'menagaement_board_id'  => 'required',
        'photo'                 => 'required',
      ]);



      $last_inserted_id =Management::insertGetId([
        'name'                  => $request->name,
        'designation'           => $request->designation,
        'speaks'                =>$request->speaks,
        'menagaement_board_id'  =>$request->menagaement_board_id,
        'photo'                 =>$request->photo,
        'created_at'            => Carbon::now(),
      ]);

      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(140,140)->save(base_path('public/uploads/management/'.$photo_name),100);
           Management::find($last_inserted_id)->update([
           'photo'           => $photo_name,
          ]);
          }

      Alert::toast($request->name . ' ' . 'success');
      return back();

    }



        // management_update
        function management_update(Request $request)
        {

          if($request->hasFile('photo')){
             if(Management::find($request->management_id)->photo=='default.png'){
               $photo_upload     = $request->photo;
               $photo_extension  =  $photo_upload->getClientOriginalExtension();
               $photo_name       =  $request->management_id . "." . $photo_extension;
               Image::make($photo_upload)->resize(140,140)->save(base_path('public/uploads/management/'.$photo_name),100);
               Management::find($request->management_id)->update([
               'photo'          => $photo_name,
             ]);
             }
           else {
             //delete
             $delete_photo=Management::find($request->management_id)->photo;
             unlink(base_path('public/uploads/management/'.$delete_photo));
             //update
             $photo_upload     = $request->photo;
             $photo_extension  =  $photo_upload->getClientOriginalExtension();
             $photo_name       =  $request->management_id . "." . $photo_extension;
             Image::make($photo_upload)->resize(140,140)->save(base_path('public/uploads/management/'.$photo_name),100);
             Management::find($request->management_id)->update([
             'photo'          => $photo_name,
           ]);
           }
         }


          Management::findOrFail($request->management_id)->update([
            'name'                  => $request->name,
            'designation'           => $request->designation,
            'speaks'                => $request->speaks,
            'menagaement_board_id'  => $request->menagaement_board_id,
            'updated_at'            => Carbon::now(),
          ]);
          
          $val = Management::find($request->management_id);
          
          $val->designation = $request->designation;

          $val->save();
           
          Alert::toast($request->name . ' ' . 'success');
          return back();

        }


    // management_board_create
    function management_board_create(Request $request)
    {
      ManagementBoard::insert([
        'management_board'=>$request->management_board,
        'created_at'      => Carbon::now(),
      ]);

      Alert::toast($request->management_board . ' ' . 'success');
      return back();
    }





    // boardofmanagement
    function boardofmanagement()
    {
      $board_of_managements = Management::where('menagaement_board_id',1)->get();
      return view('dashboard.management.board_of_management',compact('board_of_managements'));

    }

    // managementcommitee
    function managementcommitee()
    {
      $management_commitees = Management::where('menagaement_board_id',2)->get();
      return view('dashboard.management.management_commitee',compact('management_commitees'));

    }

    // corporatemanagement
    function corporatemanagement()
    {
      $corporate_managements = Management::where('menagaement_board_id',3)->get();
      return view('dashboard.management.corporate_managements',compact('corporate_managements'));

    }
    // END
}
