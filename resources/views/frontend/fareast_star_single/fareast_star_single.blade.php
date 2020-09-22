@extends('frontend.homepage.app')

@section('css')





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
                    <h4 class="page_title">FAREAST STAR</h4>
                </div>
            </div>
        </div><!-- ends: .row -->
    </div>
</section>







    <section class="section-bg p-top-60 p-bottom-60">

    <div class="tab tab--1 section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="tab_nav cardify">
                        <div class="nav flex-column" id="tab_nav1" role="tablist" aria-orientation="vertical">
                         @foreach($fvalues as $fvalue)
                            <a class="nav-link  @if($loop->first) active @endif" id="v-pills-tab1" data-toggle="pill" href="#tab{{$fvalue->id}}_content" role="tab" aria-controls="tab{{$fvalue->id}}_content" aria-selected="true">{{ $fvalue->year }}</a>
                            
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="tab-content" id="tabContent1">
                    
                         @foreach($fvalues as $fvalue)
                        <div class="tab-pane animated fadeIn  @if($loop->first) show active  @endif" id="tab{{$fvalue->id}}_content" role="tabpanel" aria-labelledby="tab{{$fvalue->id}}_content">
                            


                        <table class="table table-one">
                        <thead class="table-success">
                            <tr>
                                <th scope="col">Name of Star</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead><!-- ends: thead -->
                        <tbody>

                        
                            <tr>
                                <th scope="row">{{$fareast_star_single->name}}- {{ $fvalue->year }}</th>
                                <td>
                                <i class="fa fa-download" style="color: #B22A08; margin-right:5px;"></i>
                                <a href="{{URL::asset('uploads/fareast_star_values/'.$fvalue->file)}}" target="_blank">View</a></td>

                            </tr>
                        
                        </tbody><!-- ends: tbody -->
                    </table>
                            
                        </div>
                         @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </div><!-- ends .tab -->

    </section>


@endsection

@section('js')



@endsection
