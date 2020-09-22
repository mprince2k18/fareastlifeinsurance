@extends('dashboard.app')

@section('css_cdn')



@endsection

@section('content')


    <div class="br-mainpanel">

      {{-- breadcrumb --}}
      		<div class="br-pageheader pd-y-30 pd-l-20">
      			 <nav class="breadcrumb pd-0 mg-0 tx-13">
      					<a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
      		<!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
      					<span class="breadcrumb-item active">Dashboard</span>
      			 </nav>
      		</div>

      {{-- breadcrumb END--}}

      
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">


        <!-- Large modal -->
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">ADD ACTIVATION</button>

                       <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg" style="width: 100% !important;" >
                           <div class="modal-content">


                           <form action="{{ route('activation_create') }}" method="post" style="padding: 6.5rem;">
                             @csrf

       <!--                    Add New Menu-->
                       						<div class="row no-gutters">

                       							<!-- col-4 -->
                       							<div class="col-12">
                       							<label for="">Add New Activation:</label>
                       								<input class="form-control" type="text" name="activation_name" placeholder="Add New Activation">
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




      </div>

      <!-- br-pageheader -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">

  <h4 class="tx-gray-800 mg-b-5">Activation</h4>

          {{-- inner_content --}}
          <div class="table-wrapper">
          						<table id="datatable1" class="table display responsive nowrap">
          							<thead>
          								<tr>
          									<th class="wd-15p">ID</th>
          									<th class="wd-20p">Activation</th>
          									<th class="wd-10p">Action</th>
          								</tr>
          							</thead>
          							<tbody>


@foreach ($activations as $activation)

  <tr>
    <td>{{ $activation->id }}</td>
    <td>{{ $activation->activation_name }}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Basic example">
          <a type="button" href="{{ url('/activation/edit') }}/{{ $activation->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
          <a type="button" href="{{ url('/activation/delete') }}/{{ $activation->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
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










      <!-- br-pageheader -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <h4 class="tx-gray-800 mg-b-5">TRASHED ACTIVATION</h4>

          {{-- inner_content --}}
          <div class="table-wrapper">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-20p">ACTIVATION</th>
                            <th class="wd-10p">Action</th>
                          </tr>
                        </thead>
                        <tbody>


@forelse ($trashed_activations as $trashed_activation)

  <tr>
    <td>{{ $trashed_activation->id }}</td>
    <td>{{ $trashed_activation->activation_name }}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Basic example">
                            <a type="button" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>
                            <a type="button" href="{{ url('/activation/force/delete') }}/{{ $trashed_activation->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>
                            <a type="button" href="{{ url('/activation/restore') }}/{{ $trashed_activation->id }}" class="btn btn-success pd-x-25"><i class="icon ion-loop"></i></a>
                          </div>
    </td>
  </tr>

@empty

  <tr class="bg-dark text-white">
    <td  colspan="3">
      NO DATA
    </td>
  </tr>

@endforelse




                        </tbody>
                      </table>
                    </div>

          {{-- inner_content END --}}

        </div>
      </div>


@endsection

@section('js_cdn')


@endsection
