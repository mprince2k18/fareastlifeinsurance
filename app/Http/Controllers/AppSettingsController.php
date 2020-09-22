<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topheader;
use App\Slider;
use App\Logo;
use App\MainMenu;
use App\SubMenu;
use App\FooterWidgets;
use App\FooterMenu;
use App\Corporate;
use App\Address;
use App\Social;
use App\Map;
use App\QuickService;
use Carbon\Carbon;
use Alert;
use Image;
use Auth;

class AppSettingsController extends Controller
{

  // middleware
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    }


  // logo_index
    function logo_index()
    {
      $logos        = Logo::all();
      $active_logo  = Logo::where('status',1)->get();
      return view('dashboard.app_settings.logo.logo_index',compact('logos','active_logo'));
    }


  // logo_create
    function logo_create(Request $request)
    {

      $logos = Logo::all();

      foreach ($logos as $logo) {
        Logo::findOrFail($logo->id)->update([
          'status' => 2,
        ]);
      }


      $request->validate([
        'logo'          =>'required',
      ]);


      $last_inserted_id = Logo::insertGetId([
        'logo'          =>$request->logo,
        'status'        =>1,
        'created_at'    =>Carbon::now(),
      ]);


      if ($request->hasFile('logo')) {
           $photo_upload     =  $request ->logo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(512,512)->save(base_path('public/uploads/logo/'.$photo_name),100);
           Logo::find($last_inserted_id)->update([
           'logo'            => $photo_name,
          ]);
          }

          Alert::toast($photo_name . ' ' . 'Uploaded' ,'success');
          return back();

     // logo_create END
    }


      // logo_status
        function logo_status($logo_id , $logo_status)
        {
          $logos = Logo::all();

          foreach ($logos as $logo) {
            Logo::findOrFail($logo->id)->update([
              'status' =>2,
            ]);
          }

        if ($logo_status == 2) {
          Logo::findOrFail($logo_id)->update([
                'status' => 1,
              ]);
        }


          Alert::toast('Logo Activated','success');
          return back();

        }


// logo_delete
        function logo_delete($logo_delete_id)
        {
          // Logo::findOrFail($logo_delete_id)->delete();
          //
          // Alert::toast('Logo Deleted','success');
          // return back();
          echo $logo_delete_id;
        }

// MENU
// menu_index
function menu_index()
{
  $parent_menus = MainMenu::all();
  $sub_menus = SubMenu::all();
  return view('dashboard.app_settings.menu.menu_index',compact('parent_menus','sub_menus'));
}

// main_menu_create
function main_menu_create(Request $request)
{

  $request->validate([
    'perent_menu_name'          =>'required',
    'link'                      =>'required',
  ]);


  MainMenu::insert([
    'perent_menu_name'=>$request->perent_menu_name,
    'link'=>$request->link,
    'created_at'      =>Carbon::now(),
  ]);

  Alert::toast($request->perent_menu_name . ' ' . 'Added','success');
  return back();
}


// main_menu_trash
function main_menu_trash($menu_id)
{

  MainMenu::findOrFail($menu_id)->delete();

  Alert::toast('DELETED','success');
  return back();
}

// sub_menu_create
function sub_menu_create(Request $request)
{

  $request->validate([
    'sub_menu_name'          =>'required',
    'parent_menu_id'         =>'required',
    'sub_menu_link'          =>'required',
  ]);


  SubMenu::insert([
    'sub_menu_name'     =>$request->sub_menu_name,
    'parent_menu_id'    =>$request->parent_menu_id,
    'sub_menu_link'    =>$request->sub_menu_link,
    'created_at'        =>Carbon::now(),
  ]);

  Alert::toast($request->sub_menu_name . ' ' . 'Added','success');
  return back();
}



// main_menu_trash
function main_menu_edit($menu_id)
{
  $menu = MainMenu::findOrFail($menu_id);
  return view('dashboard.app_settings.menu.update',compact('menu'));
}
// main_menu_trash
function submenu_edit($menu_id)
{
  $sub_menu = SubMenu::findOrFail($menu_id);
  $parent_menus = MainMenu::all();
  return view('dashboard.app_settings.menu.submenu_update',compact('sub_menu','parent_menus'));
}

// main_menu_trash
function main_menu_update(Request $request, $menu_id)
{
  MainMenu::findOrFail($menu_id)->update([
    'perent_menu_name'=>$request->perent_menu_name,
    'link'=>$request->link,
    'updated_at'      =>Carbon::now(),
  ]);
  Alert::toast('UPDATED','success');
  return back();
}

// main_menu_trash
function submenu_update(Request $request, $menu_id)
{

  SubMenu::findOrFail($menu_id)->update([
    'sub_menu_name'     =>$request->sub_menu_name,
    'parent_menu_id'    =>$request->parent_menu_id,
    'sub_menu_link'    =>$request->sub_menu_link,
    'updated_at'      =>Carbon::now(),
  ]);
  Alert::toast('UPDATED','success');
  return back();
}

// main_menu_trash
function sub_menu_trash($submenu_id)
{

  SubMenu::findOrFail($submenu_id)->delete();

  Alert::toast('DELETED','success');
  return back();
}


// MENU END


// SLIDER

// slider_index

function slider_index()
{
  $sliders  = Slider::latest()->paginate(50);
  $trashed_sliders  = Slider::onlyTrashed()->get();
  return view('dashboard.app_settings.slider.slider_index',compact('sliders','trashed_sliders'));
}

// slider_create

function slider_create(Request $request)
{

  $request->validate([
    'banner_caption'          =>'nullable',
    'banner'                  =>'required',
    'link'                    =>'required',
  ]);



  $last_inserted_id   = Slider::insertGetId([
    'banner_caption'  =>  $request->banner_caption,
    'banner'          =>  $request->banner,
    'link'            =>  $request->link,
    'created_at'      =>  Carbon::now(),
  ]);

  if ($request->hasFile('banner')) {
       $photo_upload     =  $request->banner;
       $photo_extension  =  $photo_upload -> getClientOriginalExtension();
       $photo_name       =  $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->resize(1920,1080)->save(base_path('public/uploads/slider/'.$photo_name),100);
       Slider::find($last_inserted_id)->update([
       'banner'          => $photo_name,
      ]);
      }

  Alert::toast('Added','success');
  return back();
}

// slider_trash

function slider_trash($slider_id)
{
  Slider::findOrFail($slider_id)->delete();

  Alert::toast('TRASHED','success');
  return back();
}

// slider_restore

function slider_restore($slider_id)
{
  Slider::onlyTrashed()->where('id',$slider_id)->restore();

  Alert::toast('RESTORED','success');
  return back();
}

// slider_delete

function slider_delete($slider_id)
{
  Slider::onlyTrashed()->where('id',$slider_id)->forceDelete();

  Alert::toast('DELETED','success');
  return back();
}

// slider_edit

function slider_edit($slider_id)
{
  $single_slider = Slider::findOrFail($slider_id);
  return view('dashboard.app_settings.slider.slider_edit',compact('single_slider'));
}

// slider_update

function slider_update(Request $request)
{

  if($request->hasFile('banner')){
     if(Slider::find($request->slider_id)->banner == 'default.png'){
       $photo_upload     = $request->banner;
       $photo_extension  =  $photo_upload->getClientOriginalExtension();
       $photo_name       =  $request->banner . "." . $photo_extension;
       Image::make($photo_upload)->resize(1920,1080)->save(base_path('public/uploads/slider/'.$photo_name),100);
       Slider::find($request->slider_id)->update([
       'banner'          => $photo_name,
     ]);
     }
   else {
     //delete
     $delete_photo=Slider::find($request->slider_id)->banner;
     unlink(base_path('public/uploads/slider/'.$delete_photo));
     //update
     $photo_upload     = $request->banner;
     $photo_extension  =  $photo_upload->getClientOriginalExtension();
     $photo_name       =  $request->slider_id . "." . $photo_extension;
     Image::make($photo_upload)->resize(1920,1080)->save(base_path('public/uploads/slider/'.$photo_name),100);
     Slider::find($request->slider_id)->update([
     'photo'          => $photo_name,
   ]);
   }
 }


  Slider::findOrFail($request->slider_id)->update([
    'banner_caption'=>$request->banner_caption,
    'link'=>$request->link,
    'update_at'=>Carbon::now(),
  ]);

  Alert::toast('UPDATED','success');
  return back();

}

// SLIDER END





//TOP HEADER
  // top_header_index
    function index()
    {
      $top_headers        = Topheader::all();
      $top_headers_count  = Topheader::count();
      return view('dashboard.app_settings.top_header.top_header',compact('top_headers','top_headers_count'));

    }

// top_header_create
    function top_header_create(Request $request)
    {

      $request->validate([
        'phone_number'  => 'numeric|nullable',
        'email'         => 'email|nullable',
        'gplay'         => 'nullable',
      ]);

      Topheader::insert([
        'phone_number' =>$request->phone_number,
        'email'        =>$request->email,
        'gplay'        =>$request->gplay,
      ]);

      Alert::toast('Inserted','success');
      return back();

    }

    // top_header_edit
      function top_header_edit($top_header_id)
      {
        $single_top_header=Topheader::findOrFail($top_header_id);
        return view('dashboard.app_settings.top_header.top_header_edit',compact('single_top_header'));
      }

    // top_header_update
      function top_header_update(Request $request)
      {

        Topheader::findOrFail($request->top_header_id)->update([
          'phone_number' =>$request->phone_number,
          'email'        =>$request->email,
          'gplay'        =>$request->gplay,
        ]);

        Alert::toast('Updated','success');
        return redirect(route('top_header_index'));
      }


      // top_header_edit
        function top_header_delete($top_header_id)
        {
          Topheader::findOrFail($top_header_id)->delete();

          Alert::toast('Deleted','success');
          return back();
        }


// FOOTER
// footer_index
function footer_index()
{
  $all_footer_widgets = FooterWidgets::all();
  $all_menus          = MainMenu::all();
  $footer_menus       = FooterMenu::all();
  return view('dashboard.app_settings.footer.footer_index',compact('all_footer_widgets','all_menus','footer_menus'));
}

// footer_widgets
function footer_widgets(Request $request)
{

  $request->validate([
    'widget_name'  => 'required',
  ]);


  FooterWidgets::insert([
    'widget_name' =>$request->widget_name,
    'created_at'  =>Carbon::now(),
  ]);

  Alert::toast($request->widget_name . ' ' . 'Inserted','success');
  return back();
}


// footer_menu_create
function footer_menu_create(Request $request)
{

  $request->validate([
    'footer_menu_name'  => 'required',
    'footer_widget_id'  => 'required',
    'link'  => 'required',
  ]);


  FooterMenu::insert([
    'footer_menu_name'    =>$request->footer_menu_name,
    'existing_menus'      =>$request->existing_menus,
    'footer_widget_id'    =>$request->footer_widget_id,
    'link'                =>$request->link,
    'created_at'          =>Carbon::now(),
  ]);

  Alert::toast($request->footer_menu_name . ' ' . 'Inserted','success');
  return back();
}
// footer_menu_delete
function footer_menu_delete($footer_menu_id)
{
  FooterMenu::findOrFail($footer_menu_id)->delete();

  Alert::toast('Trashed','success');
  return back();
}
// FOOTER END

// CORPORATE
// corporate_index
function corporate_index()
{
  $corporates = Corporate::all();
  return view('dashboard.app_settings.corporate.index',compact('corporates'));
}

// corporate_create
function corporate_create(Request $request)
{

  $request->validate([
    'corporate'  => 'required',
    'corporate_link'  => 'nullable',
  ]);


  $last_inserted_id = Corporate::insertGetId([
    'corporate'       =>$request->corporate,
    'corporate_link'  =>$request->corporate_link,
    'created_at'      =>Carbon::now(),
  ]);


  if ($request->hasFile('corporate')) {
       $photo_upload     =  $request ->corporate;
       $photo_extension  =  $photo_upload -> getClientOriginalExtension();
       $photo_name       =  $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->resize(80,80)->save(base_path('public/uploads/corporate/'.$photo_name),100);
       Corporate::find($last_inserted_id)->update([
       'corporate'       => $photo_name,
      ]);
      }

      Alert::toast('Added','success');
      return back();
}

// corporate_delete
function corporate_delete($corporate_id)
{
  Corporate::findOrFail($corporate_id)->delete();

  Alert::toast('Trashed','success');
  return back();
}

// CORPORATE END

// ADDRESS
// address_index
function address_index()
{
  $addresses = Address::all();
  return view('dashboard.app_settings.address.index',compact('addresses'));
}

// address_create
function address_create(Request $request)
{

  $request->validate([
    'address'  => 'nullable',
    'phone'  => 'nullable',
    'mail'  => 'nullable',
    'link'  => 'nullable',
  ]);


  Address::insert([
    'address'     =>$request->address,
    'phone'       =>$request->phone,
    'mail'        =>$request->mail,
    'link'        =>$request->link,
    'created_at'  =>Carbon::now(),
  ]);

  Alert::toast('ADDRESS ADDED','success');
  return back();
}

// address_delete
function address_delete($address_id)
{
  Address::findOrFail($address_id)->delete();

  Alert::toast('ADDRESS DELETED','success');
  return back();

}
// address_edit
function address_edit($address_id)
{
  $single_address = Address::findOrFail($address_id);
  return view('dashboard.app_settings.address.edit',compact('single_address'));
}
// address_update
function address_update(Request $request)
{
  Address::findOrFail($request->address_id)->update([
    'address'   =>$request->address,
    'phone'     =>$request->phone,
    'mail'      =>$request->mail,
    'link'      =>$request->link,
  ]);

  Alert::toast('ADDRESS UPDATED','success');
  return redirect(route('address_index'));
}

// ADDRESS END

// MAP
// map_index
function map_index()
{
  $maps = Map::all();
  $map_count = Map::count();
  return view('dashboard.app_settings.map.map_index',compact('maps','map_count'));

}

// map_create
function map_create(Request $request)
{

  $request->validate([
    'map'  => 'required',
  ]);


  Map::insert([
    'map'=>$request->map,
    'created_at'=>Carbon::now(),
  ]);
  Alert::toast('ADDED','success');
  return redirect(route('map_index'));
}

// map_trash
function map_trash($map_id)
{
  Map::findOrFail($map_id)->delete();

  Alert::toast('TRASHED','success');
  return back();
}

// map_trash
function map_update(Request $request)
{
  Map::findOrFail($request->map_id)->update([
    'map'=>$request->map,
    'updated_at'=>Carbon::now(),
  ]);

  Alert::toast('UPDATED','success');
  return redirect(route('map_index'));
}

// quick_service

function quick_service()
{
  $quick_services = QuickService::all();
  return view('dashboard.app_settings.quick_service.quick_service',compact('quick_services'));
}
// quick_service_create

function quick_service_create(Request $request)
{

  $request->validate([
    'photo'  => 'required',
    'hover_photo'  => 'required',
    'link'  => 'required',
  ]);


  $last_inserted_id = QuickService::insertGetId([
    'photo'=>$request->photo,
    'hover_photo'=>$request->hover_photo,
    'link'=>$request->link,
    'created_at'=>Carbon::now()
  ]);

  if ($request->hasFile('photo')) {
       $photo_upload     =  $request ->photo;
       $photo_extension  =  $photo_upload -> getClientOriginalExtension();
       $photo_name       =  $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->resize(228,228)->save(base_path('public/uploads/quick_service/'.$photo_name),100);
       QuickService::find($last_inserted_id)->update([
       'photo'       => $photo_name,
      ]);
      }

  if ($request->hasFile('hover_photo')) {
       $photo_upload     =  $request ->hover_photo;
       $photo_extension  =  $photo_upload -> getClientOriginalExtension();
       $photo_name       =  $last_inserted_id . "_hover" . "." . $photo_extension;
       Image::make($photo_upload)->resize(228,228)->save(base_path('public/uploads/quick_service/'.$photo_name),100);
       QuickService::find($last_inserted_id)->update([
       'hover_photo'       => $photo_name,
      ]);
      }

  Alert::toast('ADDED','success');
  return back();
}

// quick_service_trash

function quick_service_trash($quick_service_id)
{
  QuickService::findOrFail($quick_service_id)->delete();

  Alert::toast('TRASHED','success');
  return back();
}

// SOCIAL
// social_index
function social_index()
{
  $social = Social::first();
  return view('dashboard.app_settings.social.index',compact('social'));
}

// social_create
function social_update(Request $request,$id)
{

  /*$request->validate([
    'facebook'  => 'nullable',
    'whatsapp'  => 'nullable',
    'youtube'  => 'nullable',
    'google'  => 'nullable',
  ]);


  Social::insert([
    'facebook'    =>$request->facebook,
    'whatsapp'    =>$request->whatsapp,
    'youtube'     =>$request->youtube,
    'google'      =>$request->google,
    'created_at'  =>Carbon::now(),
  ]);*/

  $social = Social::find($id);
  $social->facebook = $request->facebook;
  $social->whatsapp = $request->whatsapp;
  $social->youtube = $request->youtube;
  $social->google = $request->google;
  
  $social->save();

  Alert::toast('ADDRESS UPDATED','success');
  return back();
}

// social_delete
function social_delete($social_id)
{

Social::findOrFail($social_id)->delete();

  Alert::toast('DELETED','success');
  return back();
}



    // END
}
