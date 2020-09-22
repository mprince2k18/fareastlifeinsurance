@extends('dashboard.app')

@section('title')
Office Information
@endsection

@section('css_cdn')



@endsection

@section('content')






    <div class="br-mainpanel">


      <div class="br-pageheader pd-y-30 pd-l-20">
              <nav class="breadcrumb pd-0 mg-0 tx-13">
                 <a class="breadcrumb-item" href="{{ route('dashboard') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
      <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                 <span class="breadcrumb-item active">Update Office Information</span>
              </nav>
           </div>



             <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
               <h4 class="tx-gray-800 mg-b-5">Update Office Information</h4>
             </div>


             <!-- br-pageheader -->
             <div class="br-pagebody">
               <div class="br-section-wrapper">

                 {{-- inner_content --}}
                 <!-- form-layout -->

                           <div class="form-layout form-layout-7">
                           <form action="{{route('editpage.oin',$oin->id)}}" method="post" enctype="multipart/form-data">
                             {{method_field('PUT')}}
       						            {{csrf_field()}}

                                

                          
         <!--Add Phone-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Name:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="name" value="{{$oin->name}}" placeholder="Add Name">
                               </div>
                               <!-- col-8 -->
                             </div>

                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Where Belongs To:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="where" value="{{$oin->where}}" placeholder="Add Where Belongs To">
                               </div>
                               <!-- col-8 -->
                             </div>

                              <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Phone:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="phone" value="{{$oin->phone}}" placeholder="Add Phone">
                               </div>
                               <!-- col-8 -->
                             </div>

                              <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Address:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="address" value="{{$oin->address}}" placeholder="Add Address">
                               </div>
                               <!-- col-8 -->
                             </div>

                              <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Logo Image:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="file" name="image" placeholder="Add Logo Image:">
                                 @if(isset($oin->image))
                                    <img src="{{URL::asset('uploads/officeinformation/'.$oin->image)}}" height="100" width="100">
                                  @endif
                               </div>
                               <!-- col-8 -->
                             </div>
                            
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Option:
                               </div>

                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                <select id="cars" name="catoption">
                                <option  @if($oin->catoption =="Divisional") selected="selected"
                                      @endif   value="Divisional">Divisional</option>

                                <option @if($oin->catoption =="Service Center") selected="selected"
                                      @endif value="Service Center">Service Center</option>

                                <option @if($oin->catoption =="Zonal Office") selected="selected"
                                      @endif value="Zonal Office">Zonal Office</option>
                                      
                                <option @if($oin->catoption =="Branch Office") selected="selected"
                                      @endif value="Branch Office">Branch Office</option>
                              </select>
                               </div>
                               <!-- col-8 -->
                             </div>

                                        <div class="row no-gutters">

                                        <div class="col-md-12">
                                             <button type="submit" class="btn btn-info waves-effect waves-light">Update Data</button>
                                        </div>


                               <!-- col-8 -->
                             </div>

                           </form>

                           </div>
                           <!-- form-layout -->
                 {{-- inner_content END --}}

               </div>
             </div>



@endsection

@section('js_cdn')



@endsection
