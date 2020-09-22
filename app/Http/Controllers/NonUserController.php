<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NonUserController extends Controller
{


  // middleware
    public function __construct()
    {
        $this->middleware('outsiders');
    }


  function non_verified()
  {
    // Auth::logout();
    return view('auth.non_verified');
  }
  // END
}
