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
                          <h4 class="page_title">SHAREHOLDING STRUCTURE</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>



<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">

      <div class="far_share_p">
          <p class="text-dark p-3">The Present Authorized Capital of the Company is taka 1000 million and Paidup Capital is taka 747.42 million. At the end of the year 2018 total number of shareholders stood at 8,066 and the shareholdings percentage as per category is shown in the following table:</p>
      </div>

      <div class="table-responsive">
        <table class="table table-one">
            <thead class="table-success">
                <tr>
                    <th scope="col">Category of shareholders</th>
                    <th scope="col">Number of shareholders</th>
                    <th scope="col">Percentage</th>
                </tr>
            </thead><!-- ends: thead -->
            <tbody>

              @foreach ($shares as $share)


                <tr>
                    <th scope="row">{{ $share->cat_shareholders }}</th>
                    <td>{{ $share->number_shareholders }}</td>
                    <td>{{ $share->percentage }}%</td>
                </tr>

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

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Shareholding', 'Percentage'],
  @foreach ($shares as $share)
  ['{{ $share->cat_shareholders }}', {{ $share->percentage }}],
  @endforeach

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Shareholding Structure', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script

@endsection
