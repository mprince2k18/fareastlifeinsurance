<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewUserMail;

use App\User;
use App\Role;
use App\Activation;
use Hash;
use Carbon\Carbon;
use Alert;
use Mail;

class SuperAdminController extends Controller
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
        $users          = User::where('status_id',1)->get();
        $pending_users  = User::where('status_id', '!=', 1)->get();
        $roles          = Role::all();
        return view('dashboard.users.index',compact('users','roles','pending_users'));
      }


  // add_new_users
    function add_new_users()
    {
      $roles = Role::all();
      return view('dashboard.users.create',compact('roles'));
    }

  // users_create
    function users_create(Request $request)
    {

      $request->validate([
        'name'          => 'required',
        'email'  => 'required|email',
        'password'  => 'required',
        'role_id'  => 'required',
      ]);

      User::insert([
        'name'        => $request->name,            //name
        'email'       => $request->email,           //email
        'password'    =>bcrypt($request->password), //password
        'role_id'     => $request->role_id,
        'status_id'   => 1,
        'created_at'  =>Carbon::now(),
      ]);

        $name     = $request->name;       //name
        $email    = $request->email;      //email
        $password = $request->password;   //password

        Mail::to($email)->send(new NewUserMail($name,$email,$password)); //MailSystem

        Alert::toast($request->name . ' ' . 'Added Successfully', 'success'); //Alert
        return back();
    }

    // user_view
    function user_view($user_id)
    {
        $roles        = Role::all();                  //role
        $activations  = Activation::all();            //Activation
        $single_user  = User::findOrFail($user_id);   //Single User
        return view('dashboard.users.edit',compact('single_user','roles','activations'));
    }

    // update_user
    function update_user(Request $request)
    {
        User::findOrFail($request->user_id)->update([
          'name'        =>$request->name,
          'email'       =>$request->email,
          'password'    =>$request->password,
          'role_id'     =>$request->role_id,
          'status_id'   =>$request->status_id,
      ]);

          Alert::toast($request->name . ' ' . 'Updated Successfully', 'success');
          return redirect(route('users'));;
    }

    // END
}
