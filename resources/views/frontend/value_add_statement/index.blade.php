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
                          <h4 class="page_title" style="margin-top: 35px;">VALUE ADD STATEMENT</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>



<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">

      {{-- <div class="far_share_p">
          <p class="text-dark p-3">
            Market value added statement reflects the company's performance evaluated by the market through the share price. This amount is derived from the difference between the total market value and total book value of shares of a company. A high market value added indicates that the company has created substantail wealth for the equityholders.
            <br>
            <br>
            The equity market value of the company stood at taka 4723.74 million where the book value of the equity stood at taka 747.42 million, resulting in market value added of taka 3,976.32 million as on 31 December 2018 against taka 4,595.69 million 2017.
          </p>
      </div> --}}

    <div class="table-responsive">
       
                <br><br><br>
                <table class="table table-one">
                    <thead class="table-success">
                        <tr>
                          <th scope="col">Particulars</th>
                          <th scope="col">{{$year->year}}</th>
                          <th scope="col">{{$year->year2}}</th>
                        </tr>
                    </thead><!-- ends: thead -->
                    <tbody>
                @php $am1=0.0 ; $am2 = 0.0; @endphp
               @foreach ($values as $value) 
                  <tr>
                      <th scope="row">{{ $value->title }}</th>
                      <th scope="row">{{ $value->amount }}</th>
                      <th scope="row">{{ $value->amount2 }}</th>
                  </tr>
                  @php $am1 += $value->amount; $am2 += $value->amount2; @endphp
                 @endforeach

                    </tbody><!-- ends: tbody -->
                  </table>

       
    </div>
    </div>
  </div>
</div>
<br><br>

<div class="container">
  <div class="row">
    <div class="col-md-7 offset-md-3">
      <div id="piechart"></div>
    </div>
  </div>
</div>





@endsection

@section('js')
 
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([

  ['Year 1', 'Amount1'], 
  ['{{ $year->year  }}', {{ $am1 }}], ['{{ $year->year2  }}', {{ $am2 }}],   

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Value Statement', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script
@endsection
