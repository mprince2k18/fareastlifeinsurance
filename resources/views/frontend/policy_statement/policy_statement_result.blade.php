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
                          <h4 class="page_title">Policy Statement</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>


      </br></br>
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
    <div class="row">
    @foreach ($results['polinfo'] as $data) 
    <div class="col-sm-6">
    <h4>{{$data['PROPOSER']}}</h4>
    <span><b>Policy Number:</b> </span> {{$data['POLICY_NO']}}</br>
    <span><b>Sum assured: </b></span> {{$data['SUM_INSURE']}}</br>
    <span><b>Ins prem: </b></span> {{$data['INSTPREM']}}</br>
    <span><b>Inst. mode: </b></span> {{$data['INSTMODE']}}</br>
    </div>
    <div class="col-sm-3 offset-sm-3">
    </br>
    <span><b>Risk date:</b> </span> {{$data['RISKDATE']}}</br>
    <span><b>Maturity: </b></span> {{$data['MATURITY']}}</br>
    <span><b>Next payment: </b></span> {{$data['NEXTPREM']}}</br>
    <span><b>Status: </b></span> {{$data['STATUS']}}</br>
    </div>
    @endforeach
    </div>
    <br> 

      <div class="table-responsive">
        <table class="table table-one">
           <thead class="table-success">
                <tr>
                    <th scope="col">Inst. No.</th>
                    <th scope="col">PR No.</th>
                    <th scope="col">PR Date</th>
                     <th scope="col">Prem. Amt.</th>
                </tr>
            </thead><!-- ends: thead -->
            <tbody>
            @php($amount = 0)

             @foreach ($results['polinfo'] as $data) 
              @foreach ($data['poldata'] as $res)
                <tr>
                    <th scope="row">{{$res['INSTALNO']}}</th>
                    <td>{{$res['PR_NO']}}</td>
                    <td>{{$res['PR_DATE']}}</td>
                    <td>{{$res['AMOUNT']}}</td>
                </tr>
                @php($amount += (int) $res['AMOUNT'])
           @endforeach
             @endforeach

            </tbody><!-- ends: tbody -->
            <tfoot class="table-success" colspan="3" >
              <tr>
                <td>Total</td>
                <td></td>
                <td></td>
                <td>{{ $amount }}</td>
              </tr>
            </tfoot>
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