@extends('frontend.homepage.app')

@section('css_cdn')

@endsection

@section('css')

  #topbar{
    background: #2d3436;
    z-index: 1;
    padding: 1px 0;
  }


@endsection

@section('content')


  <section class="breadcrumb_area breadcrumb2 bgimage biz_overlay" style="z-index: 1;">
          <div class="bg_image_holder" style="background-image: url(&quot;img/breadbg.jpg&quot;); opacity: 1;">
              <img src="https://picfiles.alphacoders.com/191/191008.jpg" alt="img/breadbg.jpg">
          </div>
          <div class="container content_above">
              <div class="row">
                  <div class="col-md-12">
                      <div class="breadcrumb_wrapper d-flex flex-column align-items-center">
                          <h4 class="page_title">All Employees</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>



<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">

    <br> <br> <br>

      <div class="table-responsive">
        <table class="table table-one">
           <thead class="table-success">
                <tr>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Office</th>
                     <th scope="col">Mobile</th>
                     <th scope="col">Email</th>
                </tr>
            </thead><!-- ends: thead -->
            <tbody>

             @foreach ($results['hrt_emp_info'] as $data) 
              {{--}}@foreach ($data['poldata'] as $res)--}}
                <tr>
                    <th scope="row">{{$data['EMP_NAME']}}</th>
                    <td>{{$data['EMP_DESIG_NAME']}}</td>
                    <td>{{$data['OFF_NAME']}}</td>
                    <td>{{$data['EMP_MOBILE']}}</td>
                    <td>{{$data['EMAIL']}}</td>
                    
                </tr>
           {{--@endforeach--}}
             @endforeach

            </tbody><!-- ends: tbody -->
        </table>
    </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-7 offset-md-3">
      <div id="piechart"></div>
    </div>
  </div>
</div>





@endsection

@section('js')


</script

@endsection
