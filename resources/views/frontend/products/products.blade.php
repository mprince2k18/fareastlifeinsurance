@extends('frontend.homepage.app')

@section('css')

.flip-card .back-contents p{
  color: #fff;
font-size: 20px;
}

.flip-boxes{
  background: transparent;
}
.flip-card .flip-overlay{
  background: transparent;
}

.flip-card .flip-wrapper{
  width: 75%;
}

.flip-card .flip-back, .flip-card .flip-front{
  height: 75%;
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
                          <h4 class="page_title">PRODUCTS</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>



      <div class="container mt-2">
        <div class="row">
          <div class="col-md-12">
            <input type="search" id="myInput" class="form-control" name="search" placeholder="Search Here" style="margin-top: 25px; width: 1035px; margin-left: 5px;">
          </div>
        </div>
      </div>

  <div class="p-top-80 p-bottom-50"  style="background: url(https://res.cloudinary.com/onexa/image/upload/v1581408048/shape1_rwwqcx.png) no-repeat; background-size: cover;">

      <div class="flip-boxes icon-box--seven">
          <div class="container" id="myTable">
              <div class="row">

@foreach ($products as $product)
  <div class="col-lg-3 col-md-6" style="text-align: -webkit-center;">


<a href="{{ url('/products/product-single') }}/{{ $product->id }}">
  <div class="flip-card far_product">
  <div class="flip-wrapper">
  <div class="flip-front">
  <div class="front-contents" style="padding: 0;">
      <span class="color-primary" style="width:100%">
        <img src="{{ asset('uploads/products') }}/{{ $product->product_photo }}" alt="{!! html_entity_decode($product->product_title) !!}" class="img-fluid" style="width:100%;padding: 10px;">
      </span>
      {{-- <h4>{!! html_entity_decode($product->product_title) !!}</h4> --}}
  </div>
  <div class="flip-overlay"></div>
  </div><!-- ends: .flip-front -->
  <div class="flip-back" style="height:65%;">
  <div class="back-contents">
      <h3 class="color-light">{!! html_entity_decode($product->product_title) !!}</h3>
      <a href="{{ url('/products/product-single') }}/{{ $product->id }}" class="btn btn-light btn-sm">Read Details</a>
  </div>
  <div class="flip-overlay2" style="background: #46A745;"></div>
  </div><!-- ends: .flip-back -->
  </div><!-- ends: .flip-wrapper -->
  </div><!-- ends: .flip-card -->
  </a>

  </div>
@endforeach







              </div><!-- ends: .row -->
          </div>
      </div><!-- ends: .flip-boxes -->

      </div>



@endsection

@section('js')



<script type="text/javascript">

  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable .col-lg-3").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

</script>

@endsection
