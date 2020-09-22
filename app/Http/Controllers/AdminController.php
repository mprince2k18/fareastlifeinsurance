<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Logo;
use App\Activation;
use Hash;
use Alert;
use Carbon\Carbon;

class AdminController extends Controller
{

  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }

// role
    function role()
    {
      $roles          = Role::all();
      $trashed_roles  = Role::onlyTrashed()->paginate(5);
      return view('dashboard.status.role.index',compact('roles','trashed_roles'));
    }

// role_create
    function role_create(Request $request)
    {

      $request->validate([
        'role_name'          =>'required'
      ]);


      Role::insert([
        'role_name'   =>$request->role_name,
        'created_at'  =>Carbon::now(),
      ]);

      Alert::toast($request->role_name . ' ' . 'Added' , 'success');
      return back();
    }

// role_edit
    function role_edit($role_id)
    {
      $single_role    = Role::findOrFail($role_id);
      return view('dashboard.status.role.edit',compact('single_role'));
    }

// role_update
    function role_update(Request $request)
    {
      Role::findOrFail($request->role_id)->update([
        'role_name'   =>$request->role_name,
      ]);

      Alert::toast($request->role_name . ' ' . 'Updated' , 'success');
      return redirect(route('role'));;
    }


    // force_delete
        function force_delete($role_id)
        {
          Role::onlyTrashed()->where('id',$role_id)->forceDelete();

          Alert::toast('Deleted' , 'danger');
          return back();
        }

    // soft_delete
        function soft_delete($role_id)
        {
          Role::findOrFail($role_id)->delete();

          Alert::toast('Trashed' , 'danger');
          return back();
        }

    // re_store
        function re_store($role_id)
        {
          Role::onlyTrashed()->where('id',$role_id)->restore();

          Alert::toast('Restored' , 'success');
          return back();
        }


  // Activation
      function activation()
      {
        $activations          = Activation::all();
        $trashed_activations  = Activation::onlyTrashed()->paginate(5);
        return view('dashboard.status.activation.index',compact('activations','trashed_activations'));
      }

      // activation_create
          function activation_create(Request $request)
          {

            $request->validate([
              'activation_name'          =>'required'
            ]);


            Activation::insert([
              'activation_name'   =>$request->activation_name,
              'created_at'        =>Carbon::now(),
            ]);

            Alert::toast($request->activation_name . ' ' . 'Added' , 'success');
            return back();
          }

          // activation_edit
              function activation_edit($activation_id)
              {
                $single_activation = Activation::findOrFail($activation_id);
                return view('dashboard.status.activation.edit',compact('single_activation'));
              }

              // activation_update
                  function activation_update(Request $request)
                  {
                    Activation::findOrFail($request->activation_id)->update([
                      'activation_name' =>$request->activation_name,
                    ]);

                    Alert::toast($request->activation_name . ' ' . 'Updated' , 'success');
                    return redirect(route('activation'));;
                  }

                  // force_delete
                      function activation_force_delete($activation_id)
                      {
                        Activation::onlyTrashed()->where('id',$activation_id)->forceDelete();

                        Alert::toast('Deleted' , 'danger');
                        return back();
                      }

                  // soft_delete
                      function activation_soft_delete($activation_id)
                      {
                        Activation::findOrFail($activation_id)->delete();

                        Alert::toast('Trashed' , 'danger');
                        return back();
                      }

                  // re_store
                      function activation_restore($activation_id)
                      {
                        Activation::onlyTrashed()->where('id',$activation_id)->restore();

                        Alert::toast('Restored' , 'success');
                        return back();
                      }

                      function logo_trash($logo_id)
                      {
                        Logo::findOrFail($logo_id)->delete();

                        Alert::toast('LOGO DELETED' , 'success');
                        return back();
                      }

    // END
}
