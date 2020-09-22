@extends('frontend.homepage.app')

@section('css')

  @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

  body{
            background: url("https://res.cloudinary.com/onexa/image/upload/v1581408048/shape1_rwwqcx.png") 0% 0% / cover no-repeat;
        }
        #cr-banner{
            border: 1px solid #aaa;
            padding-bottom: 20px;
        }
        head-text{
            position: relative;

        }
        h1{
            position: absolute;
            {{-- bottom: 80px; --}}
            font-size: 42px;
            color: #28A745;
        }
        .chairman-img img{
            margin-top: 50px;
            width: 100%;
        }
      .detail{
            text-align: center;
        }
        .detail h2{
            font-weight: 600;
            margin-bottom: 10px;
        }
        .detail p{
            font-size: 18px;
        }
        .mem-item{
            width: 23%;
            display: inline-block;
            padding: 10px;
            margin: 10px;
        }
        .mem-img img{
            width: 100%;
            box-shadow:  0px 0px 10px grey;
        }
        .mem-detail{
            text-align: center;
        }
        .mem-detail h2{
            font-size: 25px;
        }
        .mem-detail p{
            font-size: 18px;
        }

        #topbar{
          background: #2d3436;
          z-index: 1;
          padding: 1px 0;
        }

        .detail p:nth-child(1){
          font-weight: 600 !important;
          font-size: 30px;
          color: #212529;
          font-family: 'Roboto', sans-serif;
          margin: 0;
        }

        .detail p:nth-child(2){
          font-weight: 600 !important;
          font-size: 18px;
          color: #212529;
        }

        .icon-box-15{
          padding:0px;
        }

        .icon-box-15 img{
          margin-bottom: 15px;
        }

        .icon-box-15 h6{
          margin-bottom: 0;
        }


        .popupCloseButton {
    background-color: #000;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}

@endsection

@section('content')



  <section class="">

      <div class="content-block content-block--12">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-5 margin-md-60">
                      <h1>BOARD OF DIRECTORS</h1>
                  </div>
                  <div class="col-lg-6 offset-lg-1">


                    {{-- ---------------------------------------------- --}}



                    {{-- ---------------------------------------------- --}}

@forelse ($chairmans as $chairman)
      <div class="video-single">
          <div style="width: 70%;margin-left: 30%;">
              <a href="https://newfareast.xubisoft.com/chairman/message">
              <div class="v_img">
                  <img src="{{ asset('uploads/chairman') }}/{{ $chairman->long_photo }}" style="margin-top: 90px; height: 400px; width: 350px; margin-left:15px;" alt="" class="rounded border">
              </div>
                </a>
              <div class="text-center pt-3">
                <h3><strong>Mr Md Nazrul Islam</strong></h3>
                <h4><strong>Chairman</strong></h4>
              </div>

          </div>
      </div><!-- ends: .video-single -->

    @empty

    @endforelse

                  </div>
              </div>
          </div>
      </div><!-- ends: .content-block -->

      </section>




      <div id="board-mem">
          <div class="container">
              <div class="row">

                @foreach ($board_of_directors as $board_of_directors)

                  <div class="col-md-3 aunModalFrom">
                      <div class="aunModalFromDiv icon-box icon-box-15 text-center far_board">
                        <a class="" href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
                          <img src="{{ asset('/uploads/management') }}/{{ $board_of_directors->photo }}" class="img-fluid imgaunfrom" style="width: 100%" alt="">
                        </a>
                          <h6 class="font-weight-bold"><?=str_replace('<p>', ' ', html_entity_decode($board_of_directors->name))?> {!! $board_of_directors->designation !!}</h6>
                          <div style="display: none;">{!! html_entity_decode($board_of_directors->speaks) !!}</div>
                          <!-- <p class="text-dark">{!! html_entity_decode(Str::limit($board_of_directors->speaks,10)) !!}</p> -->
                      </div>

                  </div>

                @endforeach

                <!-- Extra large modal START-->


                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content" style="border: 2px solid #1A8023;">
                      <div class="container">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="margin-right: 15px; margin-top: 25px; color: red;">&times;</span>
                      </button>
                        <div class="row">
                          <div class="col-md-10 offset-md-1">
                            <div class="far_modal p-5">
                              <div class="far_img text-right">
                                <img id="aunModalToImg" src="" class="img-fluid" alt="" style="border-radius: 50%;">
                              </div>
                              <div id="aunModalTo" class="far_para pt-2">
                                <h4 id="aunModalToh" class="text-right text-dark font-weight-bold"></h4>
                                <p id="aunModalTod" class="text-justify text-dark"></p>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="popupCloseButton">&times;</div>

                </div>

                <!-- Extra large modal END-->








              </div>

          </div>
      </div>



@endsection


@section('js')

{{-- <script>

$('.committee').click(function(e){
  // alert(e.target.dataset.id);
  console.log();
  if(e.target.dataset.id != undefined){
    var makeUrl=window.location.origin+"/management-committee/"+e.target.dataset.id;
    window.location.href=makeUrl;
  }
});

</script> --}}

<script>

  $('.aunModalFrom').click((e)=>{
    let target = e.target;
    if (target.classList.contains('imgaunfrom')) {
        let imageSrc = e.target.src;
        let ph = target.parentElement.parentElement.childNodes[3].innerHTML;
        let pd = target.parentElement.parentElement.childNodes[5].innerHTML;

        document.getElementById('aunModalToImg').src = imageSrc;
        document.getElementById('aunModalToh').innerHTML = ph;
        document.getElementById('aunModalTod').innerHTML = pd;
    }

  });

</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>

<script type="text/javascript">
  $(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)})});
</script>


<script type="text/javascript">
$(document).ready(function(){
  $(".popupCloseButton ").on("click",function(){
  $(".modal").hide("display","none");
  });
});
</script>

@endsection
