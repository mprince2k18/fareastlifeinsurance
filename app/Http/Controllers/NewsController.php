<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use Carbon\Carbon;
use Alert;
use Image;

class NewsController extends Controller
{
  // middleware
    /* public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('role');
    } */

    // news_index

    function news_index()
    {
      return view('dashboard.news.index');
    }

    // news_create

    function news_create(Request $request)
    {

      $request->validate([
        'news_title'          => 'required',
        'news_details'  => 'required',
        'photo'  => 'required',

      ]);



      $last_inserted_id     =News::insertGetId([
        'news_title'        =>$request->news_title,
        'news_details'      =>$request->news_details,
        'photo'             =>$request->photo,
        'created_at'        =>Carbon::now(),
      ]);

      if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/news/'.$photo_name),100);
           News::find($last_inserted_id)->update([
           'photo'           => $photo_name,
          ]);
          }

      Alert::toast('ADDED','success');
      return back();
    }



        // all_news

        function all_news()
        {
          $newses = News::all();
          return view('dashboard.news.all_news',compact('newses'));
        }


        // news_delete

        function news_delete($news_id)
        {
          News::findOrFail($news_id)->delete();

          Alert::toast('TRASHED','success');
          return back();
        }

        // news_trashed

        function news_trashed()
        {
          $trashed_newses = News::onlyTrashed()->get();
          return view('dashboard.news.trashed',compact('trashed_newses'));
        }


            // news_restore

            function news_restore($news_id)
            {
              News::onlyTrashed()->where('id',$news_id)->restore();

              Alert::toast('RESTORED','success');
              return back();
            }

          // news_edit

            function news_edit($news_id)
            {
              $single_news = News::findOrFail($news_id);
              return view('dashboard.news.edit',compact('single_news'));
            }


// news_update
            function news_update(Request $request)
            {

              if($request->hasFile('photo')){
                 if(News::find($request->news_id)->photo=='default.png'){
                   $photo_upload     = $request->photo;
                   $photo_extension  =  $photo_upload->getClientOriginalExtension();
                   $photo_name       =  $request->photo . "." . $photo_extension;
                   Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/news/'.$photo_name),100);
                   News::find($request->news_id)->update([
                   'photo'           => $photo_name,
                 ]);
                 }
               else {
                 //delete
                 $delete_photo=News::find($request->news_id)->photo;
                 unlink(base_path('public/uploads/news/'.$delete_photo));
                 //update
                 $photo_upload     = $request->photo;
                 $photo_extension  =  $photo_upload->getClientOriginalExtension();
                 $photo_name       =  $request->news_id . "." . $photo_extension;
                 Image::make($photo_upload)->resize(200,200)->save(base_path('public/uploads/news/'.$photo_name),100);
                 News::find($request->news_id)->update([
                 'photo'           => $photo_name,
               ]);
               }
             }


              News::findOrFail($request->news_id)->update([
                'news_title'    =>$request->news_title,
                'news_details'  =>$request->news_details,
                'update_at'     =>Carbon::now(),
              ]);


              Alert::toast('UPDATED','success');
              return back();

            }


            // news_force_delete

            function news_force_delete($news_id)
            {
              News::onlyTrashed()->where('id',$news_id)->forceDelete();

              Alert::toast('DELETED','success');
              return back();
            }
// END
}
