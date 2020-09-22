<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\BenifitProduct;
use App\IntroductionProduct;
use Carbon\Carbon;
use Alert;
use Image;

class ProductController extends Controller
{

// middleware
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('verified');
      $this->middleware('role');
  }

  // product_index
    function product_index()
    {
      $products = Product::all();
      return view('dashboard.product.index',compact('products'));
    }

  // product_create
    function product_create(Request $request)
    {

      $request->validate([
        'product_title'          => 'required',
        'product_details'  => 'required',
        'product_details_ban'  => 'required',
        'product_photo'  => 'required',
        'product_photo_bang'  => 'required',

      ]);


      $last_inserted_id     = Product::insertGetId([
        'product_title'     =>$request->product_title,
        'product_details'   =>$request->product_details,
        'product_details_ban'   =>$request->product_details_ban,
        'product_photo'     =>$request->product_photo,
        'product_photo_bang'     =>$request->product_photo_bang,
        'created_at'        => Carbon::now(),
      ]);

      if ($request->hasFile('product_photo')) {
           $photo_upload     =  $request ->product_photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(262,265)->save(base_path('public/uploads/products/'.$photo_name),100);
           Product::find($last_inserted_id)->update([
           'product_photo'   => $photo_name,
          ]);
          }

      if ($request->hasFile('product_photo_bang')) {
           $photo_upload     =  $request ->product_photo_bang;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "product_photo_bang" . "." . $photo_extension;
           Image::make($photo_upload)->resize(262,265)->save(base_path('public/uploads/products/'.$photo_name),100);
           Product::find($last_inserted_id)->update([
           'product_photo_bang'   => $photo_name,
          ]);
          }

      Alert::toast($request->product_title . '' . 'ADDED','success');
      return back();
    }


  // all_products
    function all_products()
    {
      $products = Product::all();
      return view('dashboard.product.all_products',compact('products'));
    }

  // delete_product
    function delete_product($product_id)
    {
      Product::findOrFail($product_id)->delete();

      Alert::toast('DELETED','success');
      return back();
    }

  // force_delete
    function force_delete($product_id)
    {
      Product::onlyTrashed()->where('id',$product_id)->forceDelete();

      BenifitProduct::where('product_id',$product_id)->delete();
      IntroductionProduct::where('product_id',$product_id)->delete();

      Alert::toast('DELETED','success');
      return back();
    }

  // edit_products
    function edit_products($product_id)
    {
      $single_product = Product::findOrFail($product_id);
      return view('dashboard.product.edit',compact('single_product'));
    }

  // trashed_product
    function trashed_product()
    {
      $trashed_products = Product::onlyTrashed()->get();
      return view('dashboard.product.trashed',compact('trashed_products'));
    }

  // restore_product
    function restore_product($product_id)
    {
      $trashed_products = Product::onlyTrashed()->findOrFail($product_id)->restore();

      Alert::toast('DELETED','success');
      return back();
    }

  // update_product
    function update_product(Request $request)
    {


      if($request->hasFile('product_photo')){
         if(Product::find($request->product_id)->product_photo=='default.png'){
           $photo_upload     = $request->product_photo;
           $photo_extension  =  $photo_upload->getClientOriginalExtension();
           $photo_name       =  $request->product_photo . "." . $photo_extension;
           Image::make($photo_upload)->resize(120,120)->save(base_path('public/uploads/products/'.$photo_name),100);
           Product::find($request->product_id)->update([
           'product_photo'   => $photo_name,
         ]);
         }
       else {
         //delete
         $delete_photo=Product::find($request->product_id)->product_photo;
         unlink(base_path('public/uploads/products/'.$delete_photo));
         //update
         $photo_upload     = $request->product_photo;
         $photo_extension  =  $photo_upload->getClientOriginalExtension();
         $photo_name       =  $request->product_id . "." . $photo_extension;
         Image::make($photo_upload)->resize(120,120)->save(base_path('public/uploads/products/'.$photo_name),100);
         Product::find($request->product_id)->update([
         'product_photo'   => $photo_name,
       ]);
       }
     }

     Product::findOrFail($request->product_id)->update([
       'product_title'      =>$request->product_title,
       'product_details'    =>$request->product_details,
       'updated_at'         => Carbon::now(),
     ]);


     Alert::toast('UPDATED','success');
     return back();

    }

    function introduction_create(Request $request){
      // print_r($request->all());
      $request->validate([
        'product_id' => 'required',
        'title' => 'required',
        'dis' => 'required',
        'titleBan' => 'required',
        'disBan' => 'required'
      ]);

      BenifitProduct::insert([
        'product_id' => $request->product_id,
        'title' => $request->title,
        'dis' => $request->dis,
        'titleBan' => $request->titleBan,
        'disBan' => $request->disBan
      ]);

      return back();
    }
    function profit_create(Request $request){
      // print_r($request->all());
      $request->validate([
        'product_id' => 'required',
        'title' => 'required',
        'dis' => 'required',
        'titleBan' => 'required',
        'disBan' => 'required'
      ]);

      IntroductionProduct::insert([
        'product_id' => $request->product_id,
        'title' => $request->title,
        'dis' => $request->dis,
        'titleBan' => $request->titleBan,
        'disBan' => $request->disBan
      ]);

      return back();
    }

    // END
}
