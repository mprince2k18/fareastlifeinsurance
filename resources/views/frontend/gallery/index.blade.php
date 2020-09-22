@extends('frontend.homepage.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

a,p{
  color:#000;
}

.modal-dialog{
  width: 100% !important;
  max-width: 100% !important;
  max-width: 100vh !important;
}

.modal-content{
  background: transparent;
      box-shadow: none;
      border: none;
}

.ekko-lightbox-nav-overlay{
  position: absolute;
  top: 75%;
  width: 100%;
    text-align: center;
    width: 92%;
}

.ekko-lightbox-item {
    text-align: center;

}

.ekko-lightbox-nav-overlay a:nth-child(1){
  float: left;
  color: #fff;
  font-size: 35px;
}

.ekko-lightbox-nav-overlay a:nth-child(2){
  float: right;
  color: #fff;
  font-size: 35px;
}



#gallery {
  grid-template: repeat(6, 1fr)/repeat(6, 1fr);
  grid-gap: 0.5em;
}
@media (max-width: 800px) {
  #gallery {
    display: flex;
    align-items: flex-start;
    flex-wrap: wrap;
  }
  #gallery > div {
    width: 48%;
    margin: 1%;
  }
}
@media (max-width: 800px) and (max-width: 350px) {
  #gallery > div {
    width: 98%;
  }
}

#gallery > div:nth-child(6n + 1) {
  grid-column: span 2;
  grid-row: span 2;
}
#gallery > div:nth-child(2) {
  grid-column: span 3;
  grid-row: span 3;
}
#gallery > div:nth-child(4) {
  grid-column: span 1;
  grid-row: span 2;
}
#gallery > div > a {
  opacity: 0;
  position: absolute;
  color: #000;
  {{-- background-color: #000; --}}
  font: bold 4em "Helvetica";
  {{-- text-shadow: 0 -1px 5px #fff, -1px 0px 5px #fff, 0 1px 5px #fff, 1px 0px 5px #fff; --}}
  padding: 2rem;
  {{-- mix-blend-mode: difference; --}}
  width: 100%;
  height: 100%;
  transition: all ease 1s;
}
#gallery > div > img {
  width: 100%;
  height: 135px;
  min-height: 100%;
  transition: all ease 1s;
}
#gallery > div:hover img {
  filter: blur(15px);
}
#gallery > div:hover a {
  opacity: 1;
}
#gallery > div {
  overflow: hidden;
  position: relative;
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2), 0 3px 20px 0 rgba(0, 0, 0, 0.19);
}
#gallery div,
#gallery a {
  display: flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
}

.lightbox{
  z-index: 9;
}

[id^="lightbox-"] {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  opacity: 0;
  transition: opacity 450ms ease-in-out;
  align-items: center;
  justify-content: center;
  pointer-events: none;
}
[id^="lightbox-"]:target {
  opacity: 1;
  pointer-events: inherit;
}
[id^="lightbox-"]:target img {
  filter: blur(0);
}
[id^="lightbox-"] .content {
  max-width: 90%;
  position: relative;
  color: #fff;
}
[id^="lightbox-"] .content:hover > a.close {
  opacity: 1;
  transform: scale(1, 1);
}
[id^="lightbox-"] .content:hover > .title {
  opacity: 1;
  transform: translateY(-3px);
}
[id^="lightbox-"] .content:hover > .title::after {
  opacity: 1;
}
[id^="lightbox-"] .content > * {
  transition: all 450ms ease-in-out;
}
[id^="lightbox-"] .title {
  display: block;
  margin: 0;
  padding: 1em;
  position: absolute;
  bottom: 0;
  width: 100%;
  transform: translateY(50%);
  font-size: 1.5em;
  opacity: 0;
}
[id^="lightbox-"] .title::after {
  content: ' ';
  background-color: rgba(0, 0, 0, 0.4);
  bottom: 0;
  left: 0;
  height: 100%;
  width: 100%;
  position: absolute;
  transition: all 350ms ease-in-out 250ms;
  opacity: 0;
  transform-origin: bottom;
  mix-blend-mode: soft-light;
}
[id^="lightbox-"] img {
  max-height: 90vh;
  max-width: 100%;
  margin: 0;
  padding: 0;
  filter: blur(50px);
}
[id^="lightbox-"] a.close {
  width: 2em;
  height: 2em;
  position: absolute;
  right: 0;
  top: 0;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  transform: scale(0, 0);
  opacity: 0;
  transform-origin: right top;
  text-decoration: none;
  color: #fff;
}
[id^="lightbox-"] a.close::after {
  content: "X";
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
                          <h4 class="page_title">GALLERY</h4>
                      </div>
                  </div>
              </div><!-- ends: .row -->
          </div>
      </section>




      <div class="container mt-4">
        <div class="row">

          @foreach ($galleries as $gallery)
            <div class="col-lg-3 col-md-4 col-xs-6" style="margin-bottom:30px;">
              {{-- <a href="{{ asset('uploads/gallery') }}/{{ $gallery->gallery }}" class="fancybox" rel="ligthbox">
                  <img  src="{{ asset('uploads/gallery') }}/{{ $gallery->gallery }}" class="zoom img-fluid"  alt="">
                  open image
              </a> --}}


              <div id="gallery">
                <div><img src="{{ asset('uploads/gallery') }}/{{ $gallery->gallery }}"/>
                  <a href="#lightbox-{{ $gallery->id }}" style="font-size: 14px;">{{ $gallery->title }}</a></div>
              </div>

              <div class="lightbox" id="lightbox-{{ $gallery->id }}">
                <div class="content"><img src="{{ asset('uploads/gallery') }}/{{ $gallery->gallery }}"/>
                  <div class="title">{{ $gallery->title }}</div><a class="close" href="#gallery"></a>
                </div>
              </div>
            </div>



          @endforeach

        </div>
      </div>





@endsection

@section('js')

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js">

  </script>

<script type="text/javascript">
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>


@endsection
