@extends('frontend.homepage.app')

@section('css')

.page{
  padding:100px 0;
}

#topbar{
  background: #2d3436;
  z-index: 1;
  padding: 1px 0;
}

.info{
  margin-top : 40px !important;
}

.head-text h1 {
            font-size: 3em;
            color: #00a651;
            margin-left: 50px;
        }

        .info-1 {
            background-color: #e2f1e5;
            margin-bottom: 10px;
        }

        .info-2 {
            background-color: #ffefdd;
            margin-bottom: 10px;
        }
        table{
            font-size: 1.5em;
        }
        td.title{
            width: 35%;
            margin-left: 5%;
        }
        ul{
            display: inline-block;
        }
        ul li{
            list-style: none;
        }
@endsection

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

<div class="page">

  <div class="head-text">
      <h1>{{ $page->page_title }}</h1>
  </div>


  <div class="info">
      
    <img src="{{ asset('uploads/pages') }}/{{ $page->photo }}" alt="" class="img-fluid" width="200px">
      
    {!! html_entity_decode($page->page_details) !!}
  </div>

</div>


    </div>
  </div>
</div>




@endsection
