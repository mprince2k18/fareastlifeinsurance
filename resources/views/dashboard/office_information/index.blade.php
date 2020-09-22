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
                 <span class="breadcrumb-item active">Office Information</span>
              </nav>
           </div>



             <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
               <h4 class="tx-gray-800 mg-b-5">Office Information</h4>
             </div>


             <!-- br-pageheader -->
             <div class="br-pagebody">
               <div class="br-section-wrapper">

                 {{-- inner_content --}}
                 <!-- form-layout -->

                           <div class="form-layout form-layout-7">
                           <form action="{{ route('oin_create') }}" method="post" enctype="multipart/form-data">
                             @csrf

                                     <!--Add Phone-->
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Name:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="name" placeholder="Add Name">
                               </div>
                               <!-- col-8 -->
                             </div>

                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Where Belongs To:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="where" placeholder="Add Where Belongs To">
                               </div>
                               <!-- col-8 -->
                             </div>

                              <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Phone:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="phone" placeholder="Add Phone">
                               </div>
                               <!-- col-8 -->
                             </div>

                              <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Address:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="address" placeholder="Add Address">
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
                                <option value="Divisional">Divisional</option>
                                <option value="Service Center">Service Center</option>
                                <option value="Zonal Office">Zonal Office</option>
                                <option value="Branch Office">Branch Office</option>
                              </select>
                               </div>
                               <!-- col-8 -->
                             </div>


                                        <div class="row no-gutters">

                                        <div class="col-md-12">
                                             <button type="submit" class="btn btn-info waves-effect waves-light">Add Data</button>
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
      				<h4 class="tx-gray-800 mg-b-5">ALL Office Informations</h4>

              {{-- inner_content --}}
              <div class="table-wrapper">
              						<table id="datatable1" class="table display responsive nowrap">
              							<thead>
              								<tr>
              									<th class="wd-15p">name</th>
                                <th class="wd-15p">where</th>
                                <th class="wd-15p">phone</th>
                                <th class="wd-15p">address</th>
                                <th class="wd-15p">option</th>
                                <th class="wd-15p">image</th>
              									<th class="wd-10p">Action</th>
              								</tr>
              							</thead>
              							<tbody>

                        @foreach ($oins as $oin)

                                <tr>
                                  <td>{{ $oin->name }}</td>
                                  <td>{{ $oin->where }}</td>
                                  <td>{{ $oin->phone   }}</td>
                                  <td>{{ $oin->address   }}</td>
                                  <td>{{ $oin->catoption   }}</td>
                                  <td> @if(isset($oin->image))
                                    <img src="{{URL::asset('uploads/officeinformation/'.$oin->image)}}" height="100" width="100">
                                    @endif</td>
                                  <td>
                                      <div class="btn-group" role="group" aria-label="Basic example">
                                        <a type="button" href="{{route('editpage.oin',$oin->id)}}" class="btn btn-teal pd-x-25"><i class="icon ion-arrow-expand"></i></a>

                                      <form method="POST" action="{{route('deletepage.oin',$oin->id)}}">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                       
                                        <button class="btn btn-danger">DELETE</button>
                                       </form>

                                      </div>
                                  </td>
                                </tr>

                              @endforeach

              							</tbody>
              						</table>
              					</div>
              {{-- inner_content END --}}

            </div>
          </div>


@endsection

@section('js_cdn')



@endsection
