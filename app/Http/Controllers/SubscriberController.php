<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Subscriber;

class SubscriberController extends Controller
{

    function create(Request $request){
      Subscriber::insert([
        'email' =>  $request->subscriber,
      ]);
    }
    //END
}
