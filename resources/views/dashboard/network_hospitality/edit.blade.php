@extends('dashboard.app')

@section('title')
Network Hospitality
@endsection

@section('css_cdn')



@endsection

@section('content')






    <div class="br-mainpanel">


      <div class="br-pageheader pd-y-30 pd-l-20">
              <nav class="breadcrumb pd-0 mg-0 tx-13">
                 <a class="breadcrumb-item" href="{{ route('dashboard') }}"><i class="icon ion-ios-home-outline"></i> Home</a>
      <!--               <a class="breadcrumb-item" href="#">Dashboard</a>-->
                 <span class="breadcrumb-item active">Update Network Hospitality</span>
              </nav>
           </div>



             <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
               <h4 class="tx-gray-800 mg-b-5">Update Network Hospitality</h4>
             </div>


             <!-- br-pageheader -->
             <div class="br-pagebody">
               <div class="br-section-wrapper">

                 {{-- inner_content --}}
                 <!-- form-layout -->

                           <div class="form-layout form-layout-7">
                           <form action="{{route('editpage.hospitality',$nh->id)}}" method="post">
                             {{method_field('PUT')}}
       						            {{csrf_field()}}

                                

                                       
                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Title:
                               </div>

                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="title" value="{{$nh->title}}">
                               </div>
                               <!-- col-8 -->
                             </div>

                               <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Short Description:
                               </div>
                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
                                 <input class="form-control" type="text" name="sdes" value="{{$nh->sdes}}">
                               </div>
                               <!-- col-8 -->
                             </div>


                             <div class="row no-gutters">
                               <div class="col-5 col-sm-4">
                                 Add Desc:
                               </div>

                               <!-- col-4 -->
                               <div class="col-7 col-sm-8">
         													<textarea id="editor1" name="desc" class="form-control" cols="30" rows="10">{{$nh->desc}}</textarea>
                               </div>
                               <!-- col-8 -->
                             </div>







                                        <div class="row no-gutters">

                                        <div class="col-md-12">
                                             <button type="submit" class="btn btn-info waves-effect waves-light">Update Data</button>
                                        </div>


                               <!-- col-8 -->
                             </div>

                           </form>

                           </div>
                           <!-- form-layout -->
                 {{-- inner_content END --}}

               </div>
             </div>



@endsection

@section('js_cdn')

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

@endsection
