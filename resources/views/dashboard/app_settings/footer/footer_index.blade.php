@extends('dashboard.app')

@section('title')
FOOTER MENU
@endsection

@section('css_cdn')



@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">FOOTER MENU</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">FOOTER MENU</h4>
        </div>

        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- Large modal -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">ADD FOOTER WIDGETS</button>

                          {{--<div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                               <div class="modal-content">


                               <form action="{{ route('footer_widgets') }}" method="post" style="padding: 6.5rem;">
                                 @csrf

           <!--                    Add New Menu-->
                           						<div class="row no-gutters">

                           							<!-- col-4 -->
                           							<div class="col-12">
                           							<label for="">ADD FOOTER WIDGETS MENU:</label>
                           								<input class="form-control" type="text" name="widget_name" placeholder="ADD FOOTER WIDGETS MENU">
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
                           </div>--}}

                           {{-- Large modal end --}}





                           <!-- form-layout -->

                           <div class="form-layout form-layout-7">
                           <form action="{{ route('footer_menu_create') }}" method="post">
                             @csrf
                         <!--                    Add New Menu-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Footer Menu:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="footer_menu_name" placeholder="Add Footer Menu">
                               </div>
                               <!-- col-8 -->
                             </div>






                             <!-- row -->
                   {{--  <div class="row no-gutters">
                       <div class="col-5 col-sm-4">
                         Existing Menus:
                       </div>
                       <!-- col-4 -->
                       <div class="col-7 col-sm-8">

                         <select name="existing_menus" class="form-control">

                           <option value="">Null</option>

                                @foreach ($all_menus as $all_menu)

                                  <option value="{{ $all_menu->id }}">{{ $all_menu->perent_menu_name }}</option>

                                @endforeach

                         </select>

                       </div>
                       <!-- col-8 -->
                     </div>--}}



                     <div class="row no-gutters">
                       <div class="col-5 col-sm-4">
                         Footer Menu Link:
                       </div>
                       <!-- col-4 -->
                       <div class="col-7 col-sm-8">
                         <input class="form-control" type="text" name="link" placeholder="Add Footer Menu Link">
                       </div>
                       <!-- col-8 -->
                     </div>






                                     <!-- row -->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Footer Widgets:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">

                                 <select name="footer_widget_id" class="form-control">

                                        @foreach ($all_footer_widgets as $footer_widget)

                                          <option value="{{ $footer_widget->id }}">{{ $footer_widget->widget_name }}</option>

                                        @endforeach

                                 </select>

                               </div>
                               <!-- col-8 -->
                             </div>





                                        <div class="row no-gutters">

                                        <div class="col-md-12">
                                             <button type="submit" class="btn btn-info waves-effect waves-light">Add Footer Menu</button>
                                        </div>


                               <!-- col-8 -->
                             </div>

                           </form>

                           </div>
                           <!-- form-layout -->





            {{-- inner_content END --}}

          </div>
        </div>












        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h4 class="tx-gray-800 mg-b-5">ALL FOOTER MENUS</h4>

            {{-- inner_content --}}
            <div class="row">

                {{-- <div class="col-md-4">


                 <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap table-striped">
                              <thead>
                                <tr>
                                  <th class="wd-15p">ID</th>
                                  <th class="wd-15p">FOOTER MENU</th>

                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($all_footer_widgets as $all_footer_widget)

                                  <tr>
                                    <td>{{ $all_footer_widget->id }}</td>
                                    <td>{{ $all_footer_widget->widget_name }}</td>

                                  </tr>

                                @endforeach

                              </tbody>
                            </table>
                          </div>


              </div>--}}




              <div class="col-md-12">


                <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                              <thead>
                                <tr>
                                  <th class="wd-15p">FOOTER MENU Name</th>
                                  <th class="wd-15p">FOOTER WIDGETS</th>
                                  <th class="wd-15p">LINK</th>
                                  <th class="wd-20p">ACTION</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($footer_menus as $footer_menu)

                                  <tr>
                                    <td>{{ $footer_menu->footer_menu_name }}</td>
                                 
                                    <td>{{ $footer_menu->relationBetweenFooterWidgets->widget_name }}</td>
                                    <td>{{ $footer_menu->link }}</td>
                                    <td>
                                      <a href="{{ url('/appsettings/footer/menu/delete') }}/{{ $footer_menu->id }}" class="btn btn-danger"><i class="icon ion-trash-a"></i></a>
                                    </td>
                                  </tr>

                                @endforeach

                              </tbody>
                            </table>
                          </div>


                </div>


              </div>


            </div>

            {{-- inner_content END --}}

          </div>
        </div>




@endsection

@section('js_cdn')



@endsection
