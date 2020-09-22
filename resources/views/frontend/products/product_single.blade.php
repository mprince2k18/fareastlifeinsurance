@extends('frontend.homepage.app')

@section('css')


.table-striped tbody tr:nth-of-type(odd){
  background: #FFDDA3;
}
.table-striped tbody tr:nth-of-type(even){
  background: #FFF0C9;
}
.table-bordered td, .table-bordered th{
  border: 1px solid #fff;
}

p{
  color:#000;
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
                          <h4 class="page_title">{!! strip_tags($productInfo->product_title) !!}</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>







<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">English</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bangla</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">

  


<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <section class="blog-wrapper section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                      <div class="blog-posts">
                          <div class="blog-single">


      <div class="card post--card post--card2 " id="printMe">

        <div class="row">
          <div class="col-md-12" style="text-align: end;">
            <a href="#" style="margin: 15px;" class="btn btn-danger" onclick="printDiv2();">PRINT</a>
          </div>
        </div>


          <div class="card-body" id="DivIdToPrint2">
             


              <table class="table table-bordered table-striped" >

                <tbody>
                  @foreach($BenifitProduct as $item)
                  <tr>
                    <th scope="row">{!! html_entity_decode($item->title) !!}</th>
                    <td>{!! html_entity_decode($item->dis) !!}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>


              <h5 style="color: #00FF00">Benifits:</h5>
              <table class="table table-bordered table-striped">
                <tbody>
                  @foreach($IntroductionProduct as $item)
                  <tr>
                    <th scope="row">{!! html_entity_decode($item->title) !!}</th>
                    <td>{!! html_entity_decode($item->dis) !!}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

          </div>
      </div><!-- End: .card -->

                          </div><!-- ends: .blog-single -->

                      </div>


                  </div><!-- ends: .col-lg-8 -->
              </div>
          </div>
        </section>
</div>

<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <section class="blog-wrapper section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                      <div class="blog-posts">
                          <div class="blog-single">


      <div class="card post--card post--card2 ">

        <div class="row">
          <div class="col-md-12" style="text-align: end;">
            <a href="#" style="margin: 15px;" class="btn btn-danger" onclick="printDiv();">PRINT</a>
          </div>
        </div>


          <div class="card-body" id="DivIdToPrint">
            {!! html_entity_decode($productInfo->product_details_ban) !!}


            <table class="table table-bordered table-striped">

              <tbody>
                @foreach($BenifitProduct as $item)
                <tr>
                  <th scope="row">{!! html_entity_decode($item->titleBan) !!}</th>
                  <td>{!! html_entity_decode($item->disBan) !!}</td>
                </tr>
                @endforeach
              </tbody>
            </table>


            <h5 style="color: #00FF00">উপকারিতা:</h5>
            <table class="table table-bordered table-striped">
              <tbody>
                @foreach($IntroductionProduct as $item)
                <tr>
                  <th scope="row">{!! html_entity_decode($item->titleBan) !!}</th>
                  <td>{!! html_entity_decode($item->disBan) !!}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div><!-- End: .card -->

                          </div><!-- ends: .blog-single -->

                      </div>


                  </div><!-- ends: .col-lg-8 -->
              </div>
          </div>
        </section>
</div>


</div>











@endsection

@section('js')

<script type="text/javascript">
function printDiv()
{

  var divToPrint=document.getElementById('DivIdToPrint');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body style="background:url(https://i.ibb.co/LhxzjGS/comapny-pad.jpg) no-repeat center; background-size: cover; padding:250px 10px 0 50px; text-align:left;" onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
function printDiv2()
{

  var divToPrint=document.getElementById('DivIdToPrint2');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
</script>

@endsection
