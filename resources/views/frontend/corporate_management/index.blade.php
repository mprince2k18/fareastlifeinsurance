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
          position:relative;
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
        main{
          margin-top:85px;
        }
        .modal-content{
            border: 2px solid #1A8023 !important;
        }

@endsection

@section('content')


<section class="m-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
        <h1 class="text-uppercase">Corporate management</h1>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- <div id="board-mem" style="margin: 50px 0 0 0;">
  <div class="container">

      <div class="row">
        @foreach ($management_commitees as $management_commitee)

          <div class="col-md-3 aunModalFrom">
            <a href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
              <div class="icon-box icon-box-15 text-center far_board aunModalFromDiv">
                  <img src="{{ asset('/uploads/management') }}/{{ $management_commitee->photo }}" class="img-fluid" style="width: 100%" alt="">
                  <h6>{!! html_entity_decode($management_commitee->name) !!}</h6>
                  <p class="text-dark">{!! html_entity_decode(Str::limit($management_commitee->speaks,10)) !!}</p>
              </div>
            </a>

          </div>




        @endforeach


        <!-- Extra large modal START-->


                              <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                  <div class="modal-content">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                          <div class="far_modal p-5">
                                            <div class="far_img text-center">
                                              <img id="aunModalToImg" src="" class="img-fluid" alt="">
                                            </div>
                                            <div id="aunModalTo" class="far_para pt-2">
                                              <h2 id="aunModalToh" class="text-center text-dark"></h2>
                                              <p id="aunModalTod" class="text-justify text-dark"></p>
                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <!-- Extra large modal END-->






      </div>

  </div>
</div> --}}



      <div id="board-mem">
          <div class="container">
              <div class="row">

                @foreach ($corporate_managements as $board_of_directors)

                  <div class="col-md-3 aunModalFrom">
                      <div class="aunModalFromDiv icon-box icon-box-15 text-center far_board">
                        <a class="" href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
                          <img src="{{ asset('/uploads/management') }}/{{ $board_of_directors->photo }}" class="img-fluid imgaunfrom" style="width: 100%" alt="">
                        </a>
                          <h6 class="font-weight-bold"><?=str_replace('<p>', ' ', html_entity_decode($board_of_directors->name))?> {!! $board_of_directors->designation !!}</h6>
                          <div style="display: none;">{!! html_entity_decode($board_of_directors->speaks) !!}</div>
                          {{-- <p class="text-dark">{!! html_entity_decode(Str::limit($board_of_directors->speaks,10)) !!}</p> --}}
                      </div>

                  </div>

                @endforeach

                <!-- Extra large modal START-->


                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content" style="border: 5px solid #000;">
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
                </div>

                <!-- Extra large modal END-->








              </div>

          </div>
      </div>


@endsection


@section('js')

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

@endsection
