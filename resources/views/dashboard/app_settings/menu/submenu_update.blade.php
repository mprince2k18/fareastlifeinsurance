@extends('dashboard.app')

@section('title')
MENU
@endsection

@section('css_cdn')



@endsection

@section('content')




        <div class="br-mainpanel">


          <div class="br-pageheader pd-y-30 pd-l-20">
                  <nav class="breadcrumb pd-0 mg-0 tx-13">
                     <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
          <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                     <span class="breadcrumb-item active">SUB MENU</span>
                  </nav>
               </div>



          <!-- br-pageheader -->
          <div class="br-pagebody">
            <div class="br-section-wrapper">

              <a href="{{ route('menu_index') }}" class="btn btn-primary">ALL MENU</a>

              {{-- inner_content --}}
              <div class="row">

                <div class="col-md-12">


                  <form action="{{ route('submenu_update',$sub_menu->id) }}" method="post">
                    @csrf

                  <!--                    Add New Menu-->
                         <div class="row no-gutters">

                           <!-- col-4 -->
                           <div class="col-12">
                           <label for="">Parent Menu:</label>
                             <input class="form-control" type="text" name="sub_menu_name" placeholder="Submenu Parent Menu" value="{{ $sub_menu->sub_menu_name }}">
                           </div>
                           <!-- col-8 -->
                         </div>

                         <!-- Menu Link-->

                         <div class="row no-gutters">

                           <!-- col-4 -->
                           <div class="col-12">
                             <select name="parent_menu_id" class="form-control">

                                    @foreach ($parent_menus as $parent_menu)

                                      <option value="{{ $parent_menu->id }}">{{ $parent_menu->perent_menu_name }}</option>

                                    @endforeach

                             </select>
                           </div>
                           <!-- col-8 -->
                         </div>

                         <div class="row no-gutters">

                           <!-- col-4 -->
                           <div class="col-12">
                           <label for="">Parent Link:</label>
                             <input class="form-control" type="text" name="sub_menu_link" placeholder="Add Parent Link" value="{{ $sub_menu->sub_menu_link }}">
                           </div>
                           <!-- col-8 -->
                         </div>




                     <div class="row no-gutters">

                     <div class="col-md-12">
                           <button type="submit" class="btn btn-info waves-effect waves-light">Send Data</button>
                     </div>


                  <!-- col-8 -->
                  </div>

                  </form>


                </div>

              </div>

              {{-- inner_content END --}}

            </div>
          </div>












@endsection

@section('js_cdn')


@endsection
