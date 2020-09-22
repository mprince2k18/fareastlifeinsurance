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
                   <span class="breadcrumb-item active">MENU</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">MENU</h4>
        </div>

        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- Large modal -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">ADD PARENT MENU</button>

                           <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                               <div class="modal-content">


                               <form action="{{ route('main_menu_create') }}" method="post" style="padding: 6.5rem;">
                                 @csrf

           <!--                    Add New Menu-->
                           						<div class="row no-gutters">

                           							<!-- col-4 -->
                           							<div class="col-12">
                           							<label for="">Add Parent Menu:</label>
                           								<input class="form-control" type="text" name="perent_menu_name" placeholder="Add Parent Menu">
                           							</div>
                           							<!-- col-8 -->
                           						</div>

                                      <!-- Menu Link-->

                                      <div class="row no-gutters">

                                        <!-- col-4 -->
                                        <div class="col-12">
                                        <label for="">Add Parent Link:</label>
                                          <input class="form-control" type="text" name="link" placeholder="Add Parent Link">
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
                           </div>

                           {{-- Large modal end --}}





                           <!-- form-layout -->

                           <div class="form-layout form-layout-7">
                           <form action="{{ route('sub_menu_create') }}" method="post">
                             @csrf
                         <!--                    Add New Menu-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Sub Menu:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="sub_menu_name" placeholder="Add Sub Menu">
                               </div>
                               <!-- col-8 -->
                             </div>

                                     <!-- row -->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Parent Menus:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">

                                 <select name="parent_menu_id" class="form-control">

                                        @foreach ($parent_menus as $parent_menu)

                                          <option value="{{ $parent_menu->id }}">{{ $parent_menu->perent_menu_name }}</option>

                                        @endforeach

                                 </select>

                               </div>
                               <!-- col-8 -->
                             </div>


                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Sub Menu Link:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="sub_menu_link" placeholder="Add Sub Menu Link">
                               </div>
                               <!-- col-8 -->
                             </div>


                                        <div class="row no-gutters">

                                        <div class="col-md-12">
                                             <button type="submit" class="btn btn-info waves-effect waves-light">Add Sub Menu</button>
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
            <h4 class="tx-gray-800 mg-b-5">ALL MENUS</h4>

            {{-- inner_content --}}
            <div class="row">

              <div class="col-md-5">


                <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap table-striped">
                              <thead>
                                <tr>
                                  <th class="wd-15p">ID</th>
                                  <th class="wd-15p">PARENT MENU</th>
                                  <th class="wd-15p">Link</th>
                                  <th class="wd-20p">ACTION</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($parent_menus as $parent_menu)

                                  <tr>
                                    <td>{{ $parent_menu->id }}</td>
                                    <td>{{ $parent_menu->perent_menu_name }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a type="button" href="" class="btn btn-primary pd-x-25"><i class="icon ion-eye"></i></a>
                                          <a type="button" href="{{ url('/appsettings/main/menu/trash') }}/{{ $parent_menu->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
                                        </div>
                                    </td>
                                  </tr>

                                @endforeach

                              </tbody>
                            </table>
                          </div>


              </div>




              <div class="col-md-7">


                <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                              <thead>
                                <tr>
                                  <th class="wd-15p">ID</th>
                                  <th class="wd-15p">SUB MENU</th>
                                  <th class="wd-15p">PARENT MENU</th>
                                  {{-- <th class="wd-10p">CREATED</th> --}}
                                  <th class="wd-20p">ACTION</th>
                                </tr>
                              </thead>
                              <tbody>

                                @foreach ($sub_menus as $sub_menu)

                                  <tr>
                                    <td>{{ $sub_menu->id }}</td>
                                    <td>{{ $sub_menu->sub_menu_name }}</td>
                                    <td>{{ $sub_menu->relationBetweenMainMenu->perent_menu_name }}</td>
                                    {{-- <td>{{ $sub_menu->created_at->diffForHumans() }}</td> --}}
                                    {{-- <td>{{ $top_header->created_at->diffForHumans() }}</td> --}}
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a type="button" href="" class="btn btn-primary pd-x-25"><i class="icon ion-eye"></i></a>
                                          <a type="button" href="{{ url('/appsettings/sub/menu/trash') }}/{{ $sub_menu->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
                                        </div>
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
