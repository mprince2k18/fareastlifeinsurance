<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Address;
use App\Award;
use App\Claim;
use App\Corporate;
use App\Event;
use App\Faq;
use App\FareastStar;
use App\FooterMenu;
use App\FooterWidgets;
use App\Logo;
use App\MainMenu;
use App\Management;
use App\ManagementBoard;
use App\News;
use App\Slider;
use App\Notice;
use App\Privacy;
use App\Product;
use App\Social;
use App\SubMenu;
use App\Topheader;
use App\Video;
use App\Map;
use App\QuickService;
use App\VisitorsCount;
use Alert;
use Hash;
use Auth;


class DashboardController extends Controller
{

  // middleware
    public function __construct()
    {
        $this->middleware('common');
    }


  // index
    function index()
    {
      $users = User::all();

      $visitors_count = VisitorsCount::count();

      $awards = Award::all();
      $corporates = Corporate::all();
      $events = Event::all();
      $stars = FareastStar::all();
      $board_of_directors = Management::where('menagaement_board_id',1)->get();
      $management_commitees = Management::where('menagaement_board_id',2)->get();
      $corporate_managements= Management::where('menagaement_board_id',3)->get();
      // ManagementBoard
      $newses = News::all();
      $sliders = Slider::all();
      $notices = Notice::all();
      // Product

      return view('dashboard.index.index',compact('users','newses','events','notices','board_of_directors','management_commitees','corporate_managements','awards','stars','corporates','sliders','visitors_count'));
    }



  // change_password
    function change_password($user_id)
    {
      return view('dashboard.users.change_password');
    }


  // change_password_update
    function change_password_update(Request $request)
    {


      $validator            = $request->validate([
        'password'          => 'required',
        'confirm_password'  => 'required|same:password',
      ]);


      User::findOrFail($request->user_id)->update([
        'password' =>bcrypt($request->password),
      ]);

      Alert::toast('Password Changed','success');
      Auth::logout();
      return redirect(route('dashboard'));

    }


    // END
}
