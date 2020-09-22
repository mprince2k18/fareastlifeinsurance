
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Meta -->
      <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
      <meta name="author" content="BootstrapBazaar">
      <title> @yield('title') </title>
      <!-- vendor css -->
      {{-- {{ asset('dashboard/') }} --}}
      <link href="{{ asset('dashboard/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('dashboard/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/mdb/mdb.min.css') }}" rel="stylesheet">
  		<link href="{{ asset('dashboard/lib/hover-master/hover-min.css') }}" rel="stylesheet">
      <link href="{{ asset('dashboard/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
      <link href="{{ asset('dashboard/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
      <link href="{{ asset('dashboard/lib/rickshaw/rickshaw.min.css" rel="stylesheet') }}">
      <link href="{{ asset('dashboard/lib/chartist/chartist.css') }}" rel="stylesheet">



      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

      @yield('css_cdn')
      <!-- MiniAdmin CSS -->

      {{-- <link rel="stylesheet" href="{{ asset('dashboard/css/style.css'}}"> --}}
      <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">

      {{-- css_cdn --}}

      <!-- Favicon -->
      <link rel="icon" href="http://www.sondhan.com/custom/domain_1/image_files/15_photo_48883.jpg" type="image/x-icon">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <style media="screen">
     @import url('https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap');

  /* custom scroll bar */

    body::-webkit-scrollbar {
      width: .8em;

    }

    body::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    body::-webkit-scrollbar-thumb {
      background-color: #353b48;
      outline: 1px solid slategrey;
      border-radius: 10px;
    }

  /* custom scroll bar END */




     .logo{
       font-family: 'Patrick Hand', cursive;
       letter-spacing: 15px;
     }
    /* custome_css */

    #global-loader {
        position:fixed;
        z-index:50000;
        background: url('https://i.pinimg.com/originals/24/2e/12/242e12c5180073807fc7ff2d5f244d1c.gif') no-repeat 50% 50% rgba(255, 255, 255);
        background-repeat: no-repeat;
        left:0;
        top:0;
        right:0;
        bottom:0;
        margin:0 auto;
    }

    .error_message{
      position: fixed;
      z-index: 9999;
      top: 0%;
      left: 32%;
      width: 50%;
    }

     @yield('custome_css')

   </style>
   <body>

<div id="global-loader" ></div>

     <div class="preloader-wrapper big active">
     <div class="spinner-layer spinner-blue">
       <div class="circle-clipper left">
         <div class="circle"></div>
       </div><div class="gap-patch">
         <div class="circle"></div>
       </div><div class="circle-clipper right">
         <div class="circle"></div>
       </div>
     </div>

      <!--  START: LEFT PANEL  -->
      <div class="br-logo">
        <a href="{{ route('homepage') }}">
        <!-- <img src="../img/logo.png" alt="..." /> -->
        <span class="logo">FAREAST</span>
      </a>
      </div>
      <div class="br-sideleft overflow-y-auto">
<!--         <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>-->
         <div class="br-sideleft-menu">




        @auth

          <a href="{{ route('dashboard') }}" class="br-menu-link show-sub {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
             <div class="br-menu-item ">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
  <!--                  <i class="menu-item-arrow fa fa-angle-down"></i>-->
             </div>
             <!-- menu-item -->
          </a>

        @endauth


{{-- SUPERADMIN --}}
@if (Auth::user()->role_id == 1)

          {{-- App Settings --}}


              <a href="#" class="br-menu-link">
                 <div class="br-menu-item ">
                    <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                    <span class="menu-item-label">App Settings</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                 </div>
                 <!-- menu-item -->
              </a>

              <ul class="br-menu-sub nav flex-column">
               <li class="nav-item hvr-forward"><a href="{{ route('logo_index') }}" class="nav-link">Logo</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('menu_index') }}" class="nav-link">Menus</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('slider_index') }}" class="nav-link">Slider</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('top_header_index') }}" class="nav-link">Top Header</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('footer_index') }}" class="nav-link">Footer</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('corporate_index') }}" class="nav-link">Corporate</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('address_index') }}" class="nav-link">Address</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('map_index') }}" class="nav-link">Map</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('quick_service') }}" class="nav-link">Quick Service</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('social_index') }}" class="nav-link">Social</a></li>
               <li class="nav-item hvr-forward"><a href="{{ route('popup_index') }}" class="nav-link">Pop Up</a></li>
                <li class="nav-item hvr-forward"><a href="{{ route('nhospitality_index') }}" class="nav-link">Network Hospitality</a></li>
                <li class="nav-item hvr-forward"><a href="{{ route('oin_index') }}" class="nav-link">Office Information</a></li>
            </ul>




            {{-- PAGES --}}


                <a href="#" class="br-menu-link">
                   <div class="br-menu-item ">
                      <i class="menu-item-icon icon ion-ios-albums tx-24"></i>
<span class="menu-item-label">BIMA MELA</span>
                      <i class="menu-item-arrow fa fa-angle-down"></i>
                   </div>
                   <!-- menu-item -->
                </a>

                <ul class="br-menu-sub nav flex-column">
                 <li class="nav-item hvr-forward"><a href="{{ route('page_index') }}" class="nav-link">Add BIMA MELA</a></li>
                 <li class="nav-item hvr-forward"><a href="{{ route('all_pages') }}" class="nav-link">All BIMA MELA</a></li>
              </ul>


  <!-- Product -->
  <a href="{{ route('product_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-briefcase-outline tx-24"></i>
        <span class="menu-item-label">Product</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('product_index') }}" class="nav-link">Add Product</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('all_products') }}" class="nav-link">All Product</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('trashed_product') }}" class="nav-link">Trashed Product</a></li>

  </ul>

  <!-- Product end -->




  <!-- Management -->
  <a href="{{ route('management_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-wrench tx-24"></i>
        <span class="menu-item-label">Management</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('management_index') }}" class="nav-link">Add Management</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('chairman') }}" class="nav-link">Chairman</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('ceo') }}" class="nav-link">Ceo</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('boardofmanagement') }}" class="nav-link">Board Of Directors</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('managementcommitee') }}" class="nav-link">Management Committee</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('corporatemanagement') }}" class="nav-link">Corporate Management</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('cronicle_index') }}" class="nav-link">Corporate Chronicle</a></li>
  </ul>

  <!-- Management End-->


  <!-- Management -->
  <a href="{{ route('corp_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-wrench tx-24"></i>
        <span class="menu-item-label">Corporate Information</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('corp_index') }}" class="nav-link">Add Corp Info</a></li>
  </ul>

  <!-- Management End-->


  <!-- Fareast Star -->
  <a href="{{ route('fareast_star_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-star-outline tx-24"></i>
        <span class="menu-item-label">Fareast Star</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('fareast_star_index') }}" class="nav-link">Add Fareast Star</a></li>
  </ul>

  <!-- Fareast Star End-->


  <!-- FAQ Star -->
  <a href="{{ route('faq_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-help-circled tx-24"></i>
        <span class="menu-item-label">FAQ</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('faq_index') }}" class="nav-link">Add FAQ</a></li>

  </ul>

  <!-- FAQ End-->


  <!-- Videos -->
  <a href="{{ route('video_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-image tx-24"></i>
        <span class="menu-item-label">Videos</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('video_index') }}" class="nav-link">Add Video</a></li>
  </ul>

  <!-- Videos End-->




  <!-- Videos -->
  <a href="{{ route('event_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-calendar tx-24"></i>
        <span class="menu-item-label">Events</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('event_index') }}" class="nav-link">Add Events</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('all_events') }}" class="nav-link">All Events</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('event_trashed') }}" class="nav-link">Trashed Events</a></li>
  </ul>

  <!-- Videos End-->




  <!-- Notices -->
  <a href="{{ route('notice_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-bookmark tx-24"></i>
        <span class="menu-item-label">Notices</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('notice_index') }}" class="nav-link">Add Notices</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('all_notices') }}" class="nav-link">All Notices</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('notice_trashed') }}" class="nav-link">Trashed Notices</a></li>
  </ul>

  <!-- Notices End-->



 <!-- Claims -->
  <a href="{{ route('claim_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-document-text tx-24"></i>
        <span class="menu-item-label">Claims</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('claim_index') }}" class="nav-link">Add Claims</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('all_claims') }}" class="nav-link">All Claims</a></li>
  </ul>

  <!-- Claims End-->



  <!-- News -->
  <a href="{{ route('news_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-quote tx-24"></i>
        <span class="menu-item-label">News</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('news_index') }}" class="nav-link">Add News</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('all_news') }}" class="nav-link">All News</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('news_trashed') }}" class="nav-link">Trashed News</a></li>
  </ul>

  <!-- News End-->






  <!-- Awards -->
  <a href="{{ route('award_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ionic tx-24"></i>
        <span class="menu-item-label">Awards</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('award_index') }}" class="nav-link">Add Awards</a></li>
  </ul>

  <!-- Awards End-->



  <!-- Financial Statement -->
  <a href="#" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-edit tx-24"></i>
        <span class="menu-item-label">Financial Information</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('shareholding.index') }}" class="nav-link">Shareholding Structure</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('value.index') }}" class="nav-link">Value Statement</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('financial.index') }}" class="nav-link">Financial Statement</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('annual_report') }}" class="nav-link">Annual Reports</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('dash_complaince_certificate') }}" class="nav-link">Complaince Certificate</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('dash_complaince_report') }}" class="nav-link">Complaince Report</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('director.index') }}" class="nav-link">Director Report</a></li>
  </ul>

  <!-- Financial Statement End-->





  <!-- Offices -->
  <a href="#" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-flag tx-24"></i>
        <span class="menu-item-label">Offices</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Office</a></li>
     <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Office</a></li>
     <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Office</a></li>
     <li class="nav-item hvr-forward"><a href="#" class="nav-link">Blocked Office</a></li>
  </ul>

  <!-- Offices End-->



 <!-- Users -->
  <a href="{{ route('add_new_users') }}" class="br-menu-link {{ Route::currentRouteNamed('add_new_users') ? 'active' : '' }}">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-person tx-24"></i>
        <span class="menu-item-label">Users</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('add_new_users') }}" class="nav-link {{ Route::currentRouteNamed('add_new_users') ? 'active' : '' }}">Add Users</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('users') }}" class="nav-link">All Users</a></li>
     {{-- <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Users</a></li> --}}
  </ul>

  <!-- Users End-->



  <!-- Gallery -->
   <a href="{{ route('gallery') }}" class="br-menu-link {{ Route::currentRouteNamed('gallery') ? 'active' : '' }}">
      <div class="br-menu-item ">
         <i class="menu-item-icon icon ion-person tx-24"></i>
         <span class="menu-item-label">Gallery</span>
         <i class="menu-item-arrow fa fa-angle-down"></i>
      </div>
      <!-- menu-item -->
   </a>
   <!-- br-menu-link -->
   <ul class="br-menu-sub nav flex-column">
      <li class="nav-item hvr-forward"><a href="{{ route('gallery_index') }}" class="nav-link {{ Route::currentRouteNamed('gallery_index') ? 'active' : '' }}">Add Gallery</a></li>
   </ul>

   <!-- Gallery End-->






     <!-- Gallery -->
      <a href="{{ route('create_page_index') }}" class="br-menu-link {{ Route::currentRouteNamed('promotion_index') ? 'active' : '' }}">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-person tx-24"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
          
         <li class="nav-item hvr-forward"><a href="{{ route('create_page_index') }}" class="nav-link">Create Page</a></li>
         
        <li class="nav-item hvr-forward"><a href="{{ route('create_all_pages') }}" class="nav-link">All Page</a></li>
        
      </ul>

      <!-- Gallery End-->


   <!-- Message -->
    <a href="{{ route('message_index') }}" class="br-menu-link {{ Route::currentRouteNamed('message_index') ? 'active' : '' }}">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-person tx-24"></i>
          <span class="menu-item-label">Messages</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="{{ route('message_index') }}" class="nav-link {{ Route::currentRouteNamed('message_index') ? 'active' : '' }}">Add Message</a></li>
       <li class="nav-item hvr-forward"><a href="{{ route('all_message') }}" class="nav-link">All Message</a></li>
    </ul>

    <!-- Message End-->


    <!-- Newsletter -->
     <a href="{{ route('newsletter_index') }}" class="br-menu-link {{ Route::currentRouteNamed('newsletter_index') ? 'active' : '' }}">
        <div class="br-menu-item ">
           <i class="menu-item-icon icon ion-person tx-24"></i>
           <span class="menu-item-label">Newsletter</span>
           <i class="menu-item-arrow fa fa-angle-down"></i>
        </div>
        <!-- menu-item -->
     </a>
     <!-- br-menu-link -->
     <ul class="br-menu-sub nav flex-column">
        {{-- <li class="nav-item hvr-forward"><a href="{{ route('add_new_users') }}" class="nav-link {{ Route::currentRouteNamed('add_new_users') ? 'active' : '' }}">Add Subscription</a></li> --}}
        <li class="nav-item hvr-forward"><a href="{{ route('subscription') }}" class="nav-link">All Subscriptions</a></li>
        {{-- <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Users</a></li> --}}
     </ul>

     <!-- Newsletter End-->





  <!-- Mailbox -->

  <a href="mailbox.html" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
        <span class="menu-item-label">Mailbox</span>
        <span class="badge badge-pill badge-info">5+</span>
     </div>
     <!-- menu-item -->
  </a>

  <!--Mailbox END -->




  <!-- Conmplain Box -->

  <a href="mailbox.html" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
        <span class="menu-item-label">Complain Box</span>
        <span class="badge badge-pill badge-info">10+</span>
     </div>
     <!-- menu-item -->
  </a>

  <!--Conmplain Box END -->


  <!-- Privacy-->
  <a href="{{ route('privacy_index') }}" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-hammer tx-24"></i>
        <span class="menu-item-label">Privacy & Policies</span>
     </div>
     <!-- menu-item -->
  </a>
  <!-- Privacy END-->



  <!-- Privacy-->
  <a href="mailbox.html" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-document tx-24"></i>
        <span class="menu-item-label">Reports</span>
     </div>
     <!-- menu-item -->
  </a>
  <!-- Privacy END-->


  <!-- Sitemap-->

  <a href="sitemap.html" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
        <span class="menu-item-label">Sitemap</span>
     </div>
     <!-- menu-item -->
  </a>

  <!-- Sitemap End-->


  <!-- Product -->
  <a href="#" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-briefcase-outline tx-24"></i>
        <span class="menu-item-label">Status</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="{{ route('role') }}" class="nav-link">Role</a></li>
     <li class="nav-item hvr-forward"><a href="{{ route('activation') }}" class="nav-link">Activation</a></li>
  </ul>

  <!-- Product end -->





@endif


{{-- ADMIN --}}
@if (Auth::user()->role_id == 2)


  {{-- App Settings --}}


      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">App Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>

      <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="logo.html" class="nav-link">Logo</a></li>
       <li class="nav-item hvr-forward"><a href="menus.html" class="nav-link">Menus</a></li>
       <li class="nav-item hvr-forward"><a href="header.html" class="nav-link">Header</a></li>
       <li class="nav-item hvr-forward"><a href="top_header.html" class="nav-link">Top Header</a></li>
       <li class="nav-item hvr-forward"><a href="footer.html" class="nav-link">Footer</a></li>
       <li class="nav-item hvr-forward"><a href="corporate.html" class="nav-link">Corporate</a></li>
       <li class="nav-item hvr-forward"><a href="address.html" class="nav-link">Address</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Map</a></li>
       <li class="nav-item hvr-forward"><a href="social.html" class="nav-link">Social</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Typography</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Calculator</a></li>
    </ul>



  <!-- Product -->
  <a href="#" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-briefcase-outline tx-24"></i>
        <span class="menu-item-label">Product</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="product_add.html" class="nav-link">Add Product</a></li>
     <li class="nav-item hvr-forward"><a href="product%20_all.html" class="nav-link">All Product</a></li>
     <li class="nav-item hvr-forward"><a href="product%20_trashed.html" class="nav-link">Trashed Product</a></li>

  </ul>

  <!-- Product end -->





    <!-- Fareast Star -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-ios-star-outline tx-24"></i>
          <span class="menu-item-label">Fareast Star</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="fareast_star_add.html" class="nav-link">Add Fareast Star</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Fareast Star</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Fareast Star</a></li>
    </ul>

    <!-- Fareast Star End-->


    <!-- FAQ Star -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-help-circled tx-24"></i>
          <span class="menu-item-label">FAQ</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add FAQ</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All FAQ</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed FAQ</a></li>
    </ul>

    <!-- FAQ End-->


    <!-- Videos -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-image tx-24"></i>
          <span class="menu-item-label">Videos</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Video</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Video</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Video</a></li>
    </ul>

    <!-- Videos End-->




    <!-- Videos -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-calendar tx-24"></i>
          <span class="menu-item-label">Events</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Events</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Events</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Events</a></li>
    </ul>

    <!-- Videos End-->




    <!-- Notices -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-bookmark tx-24"></i>
          <span class="menu-item-label">Notices</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Notices</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Notices</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Notices</a></li>
    </ul>

    <!-- Notices End-->



   <!-- Claims -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-document-text tx-24"></i>
          <span class="menu-item-label">Claims</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Claims</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Claims</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Claims</a></li>
    </ul>

    <!-- Claims End-->



    <!-- News -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-quote tx-24"></i>
          <span class="menu-item-label">News</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add News</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All News</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed News</a></li>
    </ul>

    <!-- News End-->


      <!-- Awards -->
      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-ionic tx-24"></i>
            <span class="menu-item-label">Awards</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Awards</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Awards</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Awards</a></li>
      </ul>

      <!-- Awards End-->



      <!-- Statement & Info -->
      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-edit tx-24"></i>
            <span class="menu-item-label">Statement & Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Statement & Info</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Statement & Info</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Statement & Info</a></li>
      </ul>

      <!-- Statement End-->



      <!-- Offices -->
      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-flag tx-24"></i>
            <span class="menu-item-label">Offices</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Office</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Office</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Office</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Blocked Office</a></li>
      </ul>

      <!-- Offices End-->




        <!-- Mailbox -->

        <a href="mailbox.html" class="br-menu-link">
           <div class="br-menu-item ">
              <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
              <span class="menu-item-label">Mailbox</span>
              <span class="badge badge-pill badge-info">5+</span>
           </div>
           <!-- menu-item -->
        </a>

        <!--Mailbox END -->




        <!-- Conmplain Box -->

        <a href="mailbox.html" class="br-menu-link">
           <div class="br-menu-item ">
              <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
              <span class="menu-item-label">Complain Box</span>
              <span class="badge badge-pill badge-info">10+</span>
           </div>
           <!-- menu-item -->
        </a>

        <!--Conmplain Box END -->




@endif



{{-- SUPPORT --}}
@if (Auth::user()->role_id == 3)


  {{-- App Settings --}}


      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">App Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>

      <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="logo.html" class="nav-link">Logo</a></li>
       <li class="nav-item hvr-forward"><a href="menus.html" class="nav-link">Menus</a></li>
       <li class="nav-item hvr-forward"><a href="header.html" class="nav-link">Header</a></li>
       <li class="nav-item hvr-forward"><a href="top_header.html" class="nav-link">Top Header</a></li>
       <li class="nav-item hvr-forward"><a href="footer.html" class="nav-link">Footer</a></li>
       <li class="nav-item hvr-forward"><a href="corporate.html" class="nav-link">Corporate</a></li>
       <li class="nav-item hvr-forward"><a href="address.html" class="nav-link">Address</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Map</a></li>
       <li class="nav-item hvr-forward"><a href="social.html" class="nav-link">Social</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Typography</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Calculator</a></li>
    </ul>



  <!-- Product -->
  <a href="#" class="br-menu-link">
     <div class="br-menu-item ">
        <i class="menu-item-icon icon ion-ios-briefcase-outline tx-24"></i>
        <span class="menu-item-label">Product</span>
        <i class="menu-item-arrow fa fa-angle-down"></i>
     </div>
     <!-- menu-item -->
  </a>
  <!-- br-menu-link -->
  <ul class="br-menu-sub nav flex-column">
     <li class="nav-item hvr-forward"><a href="product_add.html" class="nav-link">Add Product</a></li>
     <li class="nav-item hvr-forward"><a href="product%20_all.html" class="nav-link">All Product</a></li>
     <li class="nav-item hvr-forward"><a href="product%20_trashed.html" class="nav-link">Trashed Product</a></li>

  </ul>

  <!-- Product end -->





    <!-- Fareast Star -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-ios-star-outline tx-24"></i>
          <span class="menu-item-label">Fareast Star</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="fareast_star_add.html" class="nav-link">Add Fareast Star</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Fareast Star</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Fareast Star</a></li>
    </ul>

    <!-- Fareast Star End-->


    <!-- FAQ Star -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-help-circled tx-24"></i>
          <span class="menu-item-label">FAQ</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add FAQ</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All FAQ</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed FAQ</a></li>
    </ul>

    <!-- FAQ End-->


    <!-- Videos -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-image tx-24"></i>
          <span class="menu-item-label">Videos</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Video</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Video</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Video</a></li>
    </ul>

    <!-- Videos End-->




    <!-- Videos -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-calendar tx-24"></i>
          <span class="menu-item-label">Events</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Events</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Events</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Events</a></li>
    </ul>

    <!-- Videos End-->




    <!-- Notices -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-bookmark tx-24"></i>
          <span class="menu-item-label">Notices</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Notices</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Notices</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Notices</a></li>
    </ul>

    <!-- Notices End-->



   <!-- Claims -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-document-text tx-24"></i>
          <span class="menu-item-label">Claims</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Claims</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Claims</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Claims</a></li>
    </ul>

    <!-- Claims End-->



    <!-- News -->
    <a href="#" class="br-menu-link">
       <div class="br-menu-item ">
          <i class="menu-item-icon icon ion-quote tx-24"></i>
          <span class="menu-item-label">News</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
       </div>
       <!-- menu-item -->
    </a>
    <!-- br-menu-link -->
    <ul class="br-menu-sub nav flex-column">
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add News</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">All News</a></li>
       <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed News</a></li>
    </ul>

    <!-- News End-->


      <!-- Awards -->
      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-ionic tx-24"></i>
            <span class="menu-item-label">Awards</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Awards</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Awards</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Awards</a></li>
      </ul>

      <!-- Awards End-->



      <!-- Statement & Info -->
      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-edit tx-24"></i>
            <span class="menu-item-label">Statement & Info</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Statement & Info</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Statement & Info</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Statement & Info</a></li>
      </ul>

      <!-- Statement End-->



      <!-- Offices -->
      <a href="#" class="br-menu-link">
         <div class="br-menu-item ">
            <i class="menu-item-icon icon ion-flag tx-24"></i>
            <span class="menu-item-label">Offices</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
         </div>
         <!-- menu-item -->
      </a>
      <!-- br-menu-link -->
      <ul class="br-menu-sub nav flex-column">
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Add Office</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">All Office</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Trashed Office</a></li>
         <li class="nav-item hvr-forward"><a href="#" class="nav-link">Blocked Office</a></li>
      </ul>

      <!-- Offices End-->




        <!-- Mailbox -->

        <a href="mailbox.html" class="br-menu-link">
           <div class="br-menu-item ">
              <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
              <span class="menu-item-label">Mailbox</span>
              <span class="badge badge-pill badge-info">5+</span>
           </div>
           <!-- menu-item -->
        </a>

        <!--Mailbox END -->




        <!-- Conmplain Box -->

        <a href="mailbox.html" class="br-menu-link">
           <div class="br-menu-item ">
              <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
              <span class="menu-item-label">Complain Box</span>
              <span class="badge badge-pill badge-info">10+</span>
           </div>
           <!-- menu-item -->
        </a>

        <!--Conmplain Box END -->




@endif





         </div>

         <br>
      </div>
      <!-- br-sideleft -->
      <!--  END: LEFT PANEL  -->
      <!--  START: HEAD PANEL  -->
      <div class="br-header">
         <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
            <div class="input-group hidden-xs-down wd-100p transition">
               <input id="searchbox" type="text" class="form-control" placeholder="Search">
               <span class="input-group-btn">
               <button class="btn btn-primary bg-primary " type="button"><i class="fa fa-search"></i></button>
               </span>
            </div>
            <!-- input-group -->
         </div>
         <!-- br-header-left -->
         <div class="br-header-right">
            <nav class="nav">
               <div class="dropdown">
                  <a href="#" class="nav-link pd-x-10 r-5 pos-relative" data-toggle="dropdown">
                     <i class="icon ion-ios-email-outline tx-24"></i>
                     <!-- start: if statement -->
                     <span class="square-8 bg-danger pos-absolute t-5 r-0 rounded-circle message-badge">4</span>
                     <!-- end: if statement -->
                  </a>
                  <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                     <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-13 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                        <a href="#" class="tx-11">+ Add New Message</a>
                     </div>
                     <!-- d-flex -->
                     <div class="media-list">
                        <!-- loop starts here -->
                        <a href="#" class="media-list-link">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <div class="d-flex align-items-center justify-content-between mg-b-5">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                                    <span class="tx-11 tx-gray-500">2 minutes ago</span>
                                 </div>
                                 <!-- d-flex -->
                                 <p class="tx-13 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="#" class="media-list-link read">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <div class="d-flex align-items-center justify-content-between mg-b-5">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                                    <span class="tx-11 tx-gray-500">3 hours ago</span>
                                 </div>
                                 <!-- d-flex -->
                                 <p class="tx-13 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <div class="d-flex align-items-center justify-content-between mg-b-5">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                                    <span class="tx-11 tx-gray-500">5 hours ago</span>
                                 </div>
                                 <!-- d-flex -->
                                 <p class="tx-13 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <div class="d-flex align-items-center justify-content-between mg-b-5">
                                    <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                                    <span class="tx-11 tx-gray-500">Yesterday</span>
                                 </div>
                                 <!-- d-flex -->
                                 <p class="tx-13 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <div class="pd-y-10 tx-center bd-t">
                           <a href="#" class="tx-13"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                        </div>
                     </div>
                     <!-- media-list -->
                  </div>
                  <!-- dropdown-menu -->
               </div>
               <!-- dropdown -->
               <div class="dropdown">
                  <a href="#" class="nav-link pd-x-10 pos-relative" data-toggle="dropdown">
                     <i class="icon ion-ios-bell-outline tx-24"></i>
                     <!-- start: if statement -->
                     <span class="square-8 bg-danger pos-absolute t-5 r-5 rounded-circle notification-badge">4</span>
                     <!-- end: if statement -->
                  </a>
                  <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                     <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-13 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                        <a href="#" class="tx-11">Mark All as Read</a>
                     </div>
                     <!-- d-flex -->
                     <div class="media-list">
                        <!-- loop starts here -->
                        <a href="#" class="media-list-link read">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                 <span class="tx-13">October 03, 2017 8:45am</span>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="#" class="media-list-link read">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                                 <span class="tx-13">October 02, 2017 12:44am</span>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                                 <span class="tx-13">October 01, 2017 10:20pm</span>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                           <div class="media pd-x-20 pd-y-15">
                              <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                              <div class="media-body">
                                 <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                                 <span class="tx-13">October 01, 2017 6:08pm</span>
                              </div>
                           </div>
                           <!-- media -->
                        </a>
                        <div class="pd-y-10 tx-center bd-t">
                           <a href="#" class="tx-13"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                        </div>
                     </div>
                     <!-- media-list -->
                  </div>
                  <!-- dropdown-menu -->
               </div>
               <!-- dropdown -->
               <div class="dropdown">
                  <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                  <span class="logged-name hidden-md-down"></span>

                  <img src="https://cdn3.iconfinder.com/data/icons/education-248/128/4-512.png" class="wd-32 rounded-circle" alt="">
                  <span class="square-10 bg-success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-header wd-200">
                     <ul class="list-unstyled user-profile-nav">
                        <li><a href="{{ url('/change/password') }}/{{ Auth::user()->id }}"><i class="icon ion-ios-person-outline"></i> Change Password </a></li>
                        <li>
                          <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">

                            <i class="icon ion-power"></i>
                            {{ __('Sign Out') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>

                        </li>
                     </ul>
                  </div>
                  <!-- dropdown-menu -->
               </div>
               <!-- dropdown -->
            </nav>
            <div class="navicon-right">
               <a id="btnRightMenu" href="#" class="pos-relative">
                  <i class="icon ion-ios-gear-outline"></i>
                  <!-- start: if statement -->
                  <span class="square-8 bg-danger pos-absolute t-0 r--5 rounded-circle chat-badge">7+</span>
                  <!-- end: if statement -->
               </a>
            </div>
            <!-- navicon-right -->
         </div>
         <!-- br-header-right -->
      </div>
      <!-- br-header -->
      <!--  END: HEAD PANEL  -->
      <!--  START: RIGHT PANEL  -->
      <div class="br-sideright">
         <ul class="nav nav-tabs sidebar-tabs" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
            </li>
         </ul>
         <!-- sidebar-tabs -->
         <!-- Tab panes -->
         <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
               <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
               <div class="contact-list pd-x-10">
                  <a href="#" class="contact-list-link new">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img2.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Marilyn Tarter</p>
                           <span class="tx-13 op-5 d-inline-block">Clemson, CA</span>
                        </div>
                        <span class="tx-info tx-13"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0 ">Belinda Connor</p>
                           <span class="tx-13 op-5 d-inline-block">Fort Kent, ME</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link new">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Britanny Cevallos</p>
                           <span class="tx-13 op-5 d-inline-block">Shiboygan Falls, WI</span>
                        </div>
                        <span class="tx-info tx-13"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link new">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Brandon Lawrence</p>
                           <span class="tx-13 op-5 d-inline-block">Snohomish, WA</span>
                        </div>
                        <span class="tx-info tx-13"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Andrew Wiggins</p>
                           <span class="tx-13 op-5 d-inline-block">Springfield, MA</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Theodore Gristen</p>
                           <span class="tx-13 op-5 d-inline-block">Nashville, TN</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Deborah Miner</p>
                           <span class="tx-13 op-5 d-inline-block">North Shore, CA</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
               </div>
               <!-- contact-list -->
               <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
               <div class="contact-list pd-x-10">
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img2.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Marilyn Tarter</p>
                           <span class="tx-13 op-5 d-inline-block">Clemson, CA</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="mg-l-10">
                           <p class="mg-b-0">Belinda Connor</p>
                           <span class="tx-13 op-5 d-inline-block">Fort Kent, ME</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Britanny Cevallos</p>
                           <span class="tx-13 op-5 d-inline-block">Shiboygan Falls, WI</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Brandon Lawrence</p>
                           <span class="tx-13 op-5 d-inline-block">Snohomish, WA</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Andrew Wiggins</p>
                           <span class="tx-13 op-5 d-inline-block">Springfield, MA</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Theodore Gristen</p>
                           <span class="tx-13 op-5 d-inline-block">Nashville, TN</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
                  <a href="#" class="contact-list-link">
                     <div class="d-flex">
                        <div class="pos-relative">
                           <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                           <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                           <p class="mg-b-0">Deborah Miner</p>
                           <span class="tx-13 op-5 d-inline-block">North Shore, CA</span>
                        </div>
                     </div>
                     <!-- d-flex -->
                  </a>
                  <!-- contact-list-link -->
               </div>
               <!-- contact-list -->
            </div>
            <!-- #contacts -->
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
               <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
               <div class="media-file-list">
                  <div class="media">
                     <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-image-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43445</p>
                        <p class="mg-b-0 tx-13 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-13 op-5">1.2mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-video-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">VID_6543</p>
                        <p class="mg-b-0 tx-13 op-5">MP4 Video</p>
                        <p class="mg-b-0 tx-13 op-5">24.8mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-word-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">Tax_Form</p>
                        <p class="mg-b-0 tx-13 op-5">Word Document</p>
                        <p class="mg-b-0 tx-13 op-5">5.5mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">Getting_Started</p>
                        <p class="mg-b-0 tx-13 op-5">PDF Document</p>
                        <p class="mg-b-0 tx-13 op-5">12.7mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">Introduction</p>
                        <p class="mg-b-0 tx-13 op-5">PDF Document</p>
                        <p class="mg-b-0 tx-13 op-5">7.7mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-image-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43420</p>
                        <p class="mg-b-0 tx-13 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-13 op-5">2.2mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-image-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43447</p>
                        <p class="mg-b-0 tx-13 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-13 op-5">3.2mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-video-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">VID_6545</p>
                        <p class="mg-b-0 tx-13 op-5">AVI Video</p>
                        <p class="mg-b-0 tx-13 op-5">14.8mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
                  <div class="media mg-t-20">
                     <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-word-o tx-28 tx-white"></i>
                     </div>
                     <div class="media-body">
                        <p class="mg-b-0 tx-13">Secret_Document</p>
                        <p class="mg-b-0 tx-13 op-5">Word Document</p>
                        <p class="mg-b-0 tx-13 op-5">4.5mb</p>
                     </div>
                     <!-- media-body -->
                     <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                  </div>
                  <!-- media -->
               </div>
               <!-- media-list -->
            </div>
            <!-- #history -->
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
               <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
               <div class="pd-x-25">
                  <h2 id="brTime" class="tx-white tx-lato mg-b-5">.</h2>
                  <h6 id="brDate" class="tx-white tx-light op-3">.</h6>
               </div>
               <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
               <div class="datepicker sidebar-datepicker"></div>
               <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
               <div class="pd-x-25">
                  <div class="list-group sidebar-event-list mg-b-20">
                     <div class="list-group-item">
                        <div>
                           <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                           <p class="mg-b-0 tx-white tx-13 op-2">2:30PM</p>
                        </div>
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                     </div>
                     <!-- list-group-item -->
                     <div class="list-group-item">
                        <div>
                           <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                           <p class="mg-b-0 tx-white tx-13 op-2">7:30PM</p>
                        </div>
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                     </div>
                     <!-- list-group-item -->
                  </div>
                  <!-- list-group -->
                  <a href="#" class="btn btn-block bg-primary  tx-uppercase tx-11 tx-spacing-2">+ Add Event</a>
                  <br>
               </div>
            </div>
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
               <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>
               <div class="pd-y-20 pd-x-25 tx-white">
                  <h6 class="tx-13 tx-normal">Sound Notification</h6>
                  <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
                  <div class="pos-relative">
                     <input type="checkbox" name="checkbox" class="switch-button" checked>
                  </div>
               </div>
               <div class="pd-y-20 pd-x-25 tx-white">
                  <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                  <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
                  <div class="pos-relative">
                     <input type="checkbox" name="checkbox2" class="switch-button">
                  </div>
               </div>
               <div class="pd-y-20 pd-x-25 tx-white">
                  <h6 class="tx-13 tx-normal">Location Services</h6>
                  <p class="op-5 tx-13">Allowing us to access your location</p>
                  <div class="pos-relative">
                     <input type="checkbox" name="checkbox3" class="switch-button">
                  </div>
               </div>
               <div class="pd-y-20 pd-x-25 tx-white">
                  <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                  <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
                  <div class="pos-relative">
                     <input type="checkbox" name="checkbox4" class="switch-button" checked>
                  </div>
               </div>
               <div class="pd-y-20 pd-x-25 tx-white">
                  <h6 class="tx-13 tx-normal">Your email</h6>
                  <div class="pos-relative">
                     <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10" value="janedoe@domain.com">
                  </div>
               </div>
               <div class="pd-y-20 pd-x-25">
                  <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                  <a href="#" class="btn btn-block bg-primary  tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
                  <a href="#" class="btn btn-block bg-primary  tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
               </div>
            </div>
         </div>
         <!-- tab-content -->
      </div>
      <!-- br-sideright -->
      <!--  END: RIGHT PANEL  -->




      <!-- SESSION -->

      @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
      @endif

      @if (session('restore'))
      <div class="alert alert-success">
          {{ session('restore') }}
      </div>
      @endif

      @if (session('delete'))
      <div class="alert alert-danger">
          {{ session('delete') }}
      </div>
      @endif

      {{-- @if ($errors->any())
      <div class="alert alert-danger fixed-bottom">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif --}}

      <!-- SESSION END-->
@if ($errors->any())



    <div class="alert alert-warning alert-dismissible fade show error_message" role="alert">

      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

      @foreach ($errors->all() as $error)
            <strong class="d-block">{{ $error }}</strong>
      @endforeach


    </div>



@endif


                  @yield('content')





         <footer class="site-footer mg-t-30">
            <div class="row">
               <div class="col-md-4">
                  <ul class="nav nav-primary nav-dotted nav-square-separated justify-content-center justify-content-md-start">
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#">Documentation</a>
                     </li>
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#">FAQ</a>
                     </li>
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#">Contact Us</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-4">
                  <p class="text-center justify-content-center">Copyright &copy; {{ Carbon\Carbon::now()->year }} | All Rights Reserved</p>
               </div>
               <div class="col-md-4">
                  <ul class="nav nav-primary justify-content-center justify-content-md-end">
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#" style="color: #187de8"><i class="fa fa-facebook"></i></a>
                     </li>
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#" style="color: #48b0f7"><i class="fa fa-twitter"></i></a>
                     </li>
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#" style="color: #e44d42"><i class="fa fa-google-plus"></i></a>
                     </li>
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#" style="color: #bd081b"><i class="fa fa-pinterest"></i></a>
                     </li>
                     <li class="nav-item hvr-forward">
                        <a class="nav-link" href="#" style="color: #ff0000"><i class="fa fa-youtube"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
         </footer>
      </div>
      </div>
      <!-- br-mainpanel -->
      <!--  END: MAIN PANEL  -->
      <!-- Footer Script-->

      <script src="{{ asset('dashboard/lib/jquery/jquery.js') }}"></script>
      <script src="{{ asset('dashboard/lib/mdb/mdb.min.js') }}"></script>
      <script src="{{ asset('dashboard/lib/popper.js/popper.js') }}"></script>
      <script src="{{ asset('dashboard/lib/bootstrap/bootstrap.js') }}"></script>
      <script src="{{ asset('dashboard/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
      <script src="{{ asset('dashboard/lib/moment/moment.js') }}"></script>
      <script src="{{ asset('dashboard/lib/jquery-ui/jquery-ui.js') }}"></script>
      <script src="{{ asset('dashboard/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
      <script src="{{ asset('dashboard/lib/peity/jquery.peity.js') }}"></script>
      <script src="{{ asset('dashboard/lib/chartist/chartist.js') }}"></script>
      <script src="{{ asset('dashboard/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
      <script src="{{ asset('dashboard/lib/d3/d3.js') }}"></script>
      <script src="{{ asset('dashboard/lib/rickshaw/rickshaw.min.js') }}"></script>
        @yield('js_cdn')
      <script src="{{ asset('dashboard/js/main.js') }}"></script>
      <script src="{{ asset('dashboard/js/ResizeSensor.js') }}"></script>
      <script src="{{ asset('dashboard/js/dashboard.js') }}"></script>
      <script src="{{ asset('dashboard/js/sweetalert2.all.js') }}"></script>




      <script>
          @include('sweetalert::alert')
      </script>

      <script type="text/javascript">

          $(window).on("load", function(e) {
            $("#global-loader").fadeOut("fast");
          });

      </script>


      <script>
         $(function(){
           'use strict'

           // FOR DEMO ONLY
           // menu collapsed by default during first page load or refresh with screen
           // having a size between 992px and 1299px. This is intended on this page only
           // for better viewing of widgets demo.
           //
           //
           // ______________ PAGE LOADING
           //

            $('.alert').alert(close);

           $(window).resize(function(){
             minimizeMenu();
           });

           minimizeMenu();

           function minimizeMenu() {
             if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
               // show only the icons and hide left menu label by default
               $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
               $('body').addClass('collapsed-menu');
               $('.show-sub + .br-menu-sub').slideUp();
             } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
               $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
               $('body').removeClass('collapsed-menu');
               $('.show-sub + .br-menu-sub').slideDown();
             }
           }




         });
      </script>





  @yield('custom_js')


   </body>
</html>
