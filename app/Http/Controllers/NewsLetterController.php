<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
  // index
    function index()
    {
      return view('dashboard.newsletter.newsletter');
    }
  // subscription
    function subscription()
    {
      return view('dashboard.newsletter.subscription');
    }
    //END
}
