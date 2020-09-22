@extends('dashboard.app')

@section('title')
MAP
@endsection

@section('css_cdn')

<style media="screen">

.map-modal{
  width: 100% !important;
}

</style>


@endsection

@section('content')




      <div class="br-mainpanel">


        <div class="br-pageheader pd-y-30 pd-l-20">
                <nav class="breadcrumb pd-0 mg-0 tx-13">
                   <a class="breadcrumb-item" href="index.html"><i class="icon ion-ios-home-outline"></i> Home</a>
        <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                   <span class="breadcrumb-item active">MAP</span>
                </nav>
             </div>



        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">MAP</h4>
        </div>














        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            @if ($map_count == 0)

              <!-- form-layout -->

              					<div class="form-layout form-layout-7">
              					<form action="{{ route('map_create') }}" method="post">
                          @csrf

                                  <!--Add Address-->
              						<div class="row no-gutters">
              							<div class="col-5 col-sm-4">
              								Add Google Map Iframe:
              							</div>
              							<!-- col-4 -->
              							<div class="col-7 col-sm-8">
              								<textarea name="map" class="form-control" id="" cols="30" rows="10">Paste The iframe SRC Link Here...</textarea>
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
              					<!-- form-layout -->

                        @else

                          <h5 class="text-uppercase text-center">You cannot add more than One data in this field</h5>
                          <h6 class="text-uppercase text-center"> Edit Or Delete The Existing Data</h6>

            @endif


            {{-- inner_content END --}}

          </div>
        </div>






        <!-- br-pageheader -->
        <div class="br-pagebody">
          <div class="br-section-wrapper">

            {{-- inner_content --}}

            <!-- All Address -->

                      <div class="container">
                          <div class="row">
                              <div class="col-md-12">


                                  <div class="bd bd-gray-300 rounded table-responsive">
                        <table class="table mg-b-0">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Map</th>
                              <th>Actoin</th>
                            </tr>
                          </thead>
                          <tbody>

                              @foreach ($maps as $map)

                                <tr>
                                          <th scope="row">{{ $map->id }}</th>
                                          <td class="inner">
                                            {{ $map->map }}
                                          </td>

                                          <td>

                                    <div class="btn-group" role="group" aria-label="Basic example">

                                      <a type="button" data-toggle="modal" data-target="#exampleModalCenter{{$map->id}}" href="{{ url('/appsettings/map') }}/{{ $map->id }}" class="btn btn-secondary pd-x-25 active"><i class="icon ion-edit"></i></a>

                                      <a type="button" href="{{ url('/appsettings/map/trash') }}/{{ $map->id }}" class="btn btn-danger pd-x-25"><i class="icon ion-trash-a"></i></a>

                                    </div>

                                  </td>







                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalCenter{{$map->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered map-modal" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Google Map iframe SRC Link</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>



                                          <form action="{{ route('map_update') }}" method="post">
                                            @csrf
                                            <div class="modal-body">



                                                    <!--Add Address-->
                                            <div class="row no-gutters">

                                              <!-- col-4 -->

                                                {{-- @foreach ($maps as $map) --}}



                                                <div class="col-12 col-sm-12 {{ $map->id == $map->id ? "" : "d-none" }} ">
                                                  <input type="hidden" name="map_id" value="{{ $map->id }}">

                                                  <textarea name="map" class="form-control" id="" cols="30" rows="10">{{ $map->map }}</textarea>
                                                </div>
                                                {{-- @endforeach --}}




                                              <!-- col-8 -->
                                            </div>




                                          </div>


                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>

                                          </form>




                                      </div>
                                    </div>
                                  </div>








                                </tr>

                              @endforeach



                          </tbody>
                        </table>
                      </div>


                              </div>
                          </div>
                      </div>



                      <!-- Large modal -->



            {{-- inner_content END --}}

          </div>
        </div>




@endsection

@section('js_cdn')

<script type="text/javascript">
$(function () {
    $(".inner").dblclick(function (e) {
        e.stopPropagation();
        var currentEle = $(this);
        var value = $(this).html();
        updateVal(currentEle, value);
    });
});

function updateVal(currentEle, value) {
    $(currentEle).html('<form action="{{ route('map_update') }}" method="post"> @csrf <input type="hidden" name="map_id" value="1"/> <input onclick="DoSubmit()" id="myform" name="map" class="thVal form-control" type="text" value="' + value + '" /></form>');
    $(".thVal").focus();
    $(".thVal").keyup(function (event) {
        if (event.keyCode == 13) {
            $(currentEle).html($(".thVal").val().trim());
        }
    });

    $(document).click(function () {
            $(currentEle).html($(".thVal").val().trim());
    });
}

function DoSubmit(){
  document.myform.myinput.value = '1';
  document.getElementById("myform").submit();
}
</script>

@endsection
