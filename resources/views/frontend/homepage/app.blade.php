<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fareast Islami life insurance co. ltd.</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- popup -->



    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">


        <!--========================================================================================-->
        	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/popup/vendor/css-hamburgers/hamburgers.min.css') }}">
        <!--========================================================================================-->
        	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/popup/vendor/select2/select2.min.css') }}">
        <!--========================================================================================-->
        	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/popup/css/util.css') }}">
        	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/popup/css/main.css') }}">


          <link rel="stylesheet" type="text/css" href="{{ asset('frontend/footer/style.css') }}">
           <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">

    <!--css file link-->
    <link rel="stylesheet" href="https://res.cloudinary.com/code-error/raw/upload/v1580302600/fareast/css/plugin.min_muo9rg.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/code-error/raw/upload/v1580302743/fareast/css/style_h2hso6.css">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sticky.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    @yield('css_cdn')


    <link rel="icon" href="{{ asset('frontend/img/Logo.png') }}" type="image/gif" sizes="16x16">


    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


<script async src="//static.zotabox.com/8/9/898d2e2e555e471f51546bd82a743456/widgets.js"></script>


</head>

<style media="screen">


  @import url('https://fonts.googleapis.com/css?family=Lora&display=swap');
  @import url('https://fonts.googleapis.com/css?family=Ubuntu&display=swap');

  /*PRELOADING------------ */

#global-loader {
    position:fixed;
    z-index:50000;
    background: url('{{ asset('frontend/preloader.gif') }}') no-repeat 50% 50% rgba(255, 255, 255);
    background-repeat: no-repeat;
    left:0;
    top:0;
    right:0;
    bottom:0;
    margin:0 auto;
    z-index: 999999;

}




#topbar{
    z-index:2;
    /* background: #000; */
    background: transparent;
}
.bg-success, .sticky-head{
    transition: 0.5s !important;
}



  a:hover{
    text-decoration: none;
  }

  span,h1,h2,h3,h4,h5,h6,p,a,li{
    font-family: 'Lora', serif !important;
  }


  .news-item li{
    font-size: 16px !important;
  }

  #popup p{
    font-size: 16px !important;
    text-align: justify;
    padding: 20px;
  }

  #star{
    background-color: #f5f6fa !important;
  }

  #corporate{
    background-color: #ffffff !important;
  }

  .section_title{
    padding: 40px !important;
    text-transform: uppercase;
  }


  .search_overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 9999999;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 30%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.search_overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.search_overlay a:hover, .search_overlay a:focus {
  color: #f1f1f1;
}

.search_overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

.search_input{
  padding: 50px !important;
}
.search_button{
  padding: 27px !important;
}

@media screen and (max-height: 450px) {
  .search_overlay a {font-size: 20px}
  .search_overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}


/*Style added by Md Sabbir ahmed*/

.navbar-nav li:hover{
    background-image: linear-gradient(to right, transparent, transparent 50%, #2d3436 50%, #2d3436) !important;
    background-position: 100% 100% !important;
    background-size: 200% 100% !important;
    transition: all .40s ease-in !important;
  border-bottom: none !important;
}

/*Style added by Md Sabbir ahmed*/

.navbar-dark .navbar-nav .nav-link{
  font-size: 12px !important;
  text-transform: uppercase;
}
/*
.footer-menu ul li a{
  color: #000 !important;
}

.footer-menu h4{
  color: #fff !important;
}

.footer-menu ul li a{
  color: #fff !important;
}

.copyright-social i{
  font-size: 24px !important;
}

.copyright-social a{
  color: #fff !important;
}

.mini-footer{
  background: #2f3542;
} */



.footer-wrap {
    padding-top: 43px;
    background-size: cover;
}

.footer-wrap h3 {
    color: #fff;
    font-size: 17px;
    text-transform: uppercase;
    margin-bottom: 25px;
}

.footer-wrap p {
    font-size: 13px;
    line-height: 24px;
    color: #b3b3b3;
    margin-top: 15px;
}

.footer-wrap p a {
    color: #fff;
    text-decoration: underline;
    font-style: italic;
}

.footer-wrap p a:hover {
    text-decoration: none;
    color: #ff7800;
}

.footer-links li a {
    font-size: 13px;
    line-height: 30px;
    color: #ccc;
    text-decoration: none;
}


.footer-links li:before {
    content: "\f105";
    font-family: 'FontAwesome';
    padding-right: 10px;
    color: #ccc;
}

.footer-category li a {
    font-size: 13px;
    line-height: 30px;
    color: #ccc;
    text-decoration: none;
}

.footer-category li:before {
    content: "\f105";
    font-family: 'FontAwesome';
    padding-right: 10px;
    color: #b3b3b3;
}

.address {

    color: #b3b3b3;
    font-size: 14px;
    position: relative;
    padding-left: 30px;
    line-height: 30px;
}

.address:before {
    content: "\f277";
    font-family: 'FontAwesome';
    position: absolute;
    top: 0;
    left: 0;
}

.info a {

    color: #b3b3b3;
    font-size: 14px;
    line-height: 30px;
    font-weight: normal;
}

.fa-phone:before {
    content: "\f095";
}

.info a {

    color: #b3b3b3;
    font-size: 14px;
    /* line-height: 30px; */
    font-weight: normal;
    /* border: 1px solid #000; */
}

.fa-fax:before {
    content: "\f1ac";
}

.copyright {
    border-top: 1px solid #111;
    font-size: 14px;
    color: #ccc;
    padding-top: 15px;
    text-align: center;
    padding-bottom: 15px;
    background: #222;
}
footer .second_class{
    border-bottom: 1px solid #444;
    padding-bottom: 25px;
}
footer .first_class {
    padding-bottom: 21px;
    border-bottom: 1px solid #444;
}
footer .first_class p, footer .first_class h3{
    margin: 0 0;

}
footer{
    background: #333;
}

footer .newsletter input[type="text"] {
    width: 100%;
    background: #fff;
    color: #333;
    border: 1px solid #222;
    padding: 14px 20px;
    border-radius: 50px;
    margin-top: 12px;
    padding-bottom: 10px;
}

.newsletter .newsletter_submit_btn {
    background: #fff;
    position: absolute;
    right: 30px;
    border: 0;
    top: 26px;
    font-size: 17px;
    color: #333;
}


footer .second_class_bdr{
    padding-top: 25px;
    border-top:1px solid #222;
}

footer .btn-facebook a {
    padding: 6px 14px !important;
}

footer .btn-envelop a {
    color: #D6403A;
    font-size: 15px;
    padding: 12px 12px;
}

footer .round-btn a {
    padding: 6px 12px;
}

footer .round-btn {
    box-shadow: 2px 2px 5px 0px #222 !important;}

footer .round-btn {
    margin: 15px 4px;}

footer dl, ol, ul {
    padding-left: 5px;
}
	footer li{
		list-style: none;
	}

@media(max-width:768px){
    .footer-wrap h3 {
    margin-top: 27px;}

    footer .round-btn {
    margin: 15px 4px;}
}
@media(max-width:320px){
.copyright {
    font-size: 13px;}
}


body::-webkit-scrollbar {
  width: 0.7em;
}

body::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

body::-webkit-scrollbar-thumb {
  background-color: #46A745;
  outline: 1px solid slategrey;
  border-radius: 5px;
}


#accordion_one::-webkit-scrollbar {
  width: 0.4em;
}

#accordion_one::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

#accordion_one::-webkit-scrollbar-thumb {
  background-color: #46A745;
  outline: 1px solid slategrey;
  border-radius: 5px;
}


/*05-02-2020 start*/
header .brand img{
    transition: 0.3s !important;
}
header .navbar{
    padding: 0px !important;
}
header .navbar ul li a{
    padding: 15px;
}

/* header .navbar ul li{
    border-left:1px solid #fff;
    border-right-width: thin;
} */


header .navbar ul li:first-child{
    border:none;
}


header .navbar ul li.col1>a:hover{
  background: red;
}
header .navbar ul li.col2>a:hover{
  background: #6D19EB;
}
header .navbar ul li.col3>a:hover{
  background: #AD078A;
}
header .navbar ul li.col4>a:hover{
  background: #3C05FF;
}
header .navbar ul li.col5>a:hover{
  background: #2F14B8;
}
header .navbar ul li.col6>a:hover{
  background: #1D8C1D;
}
header .navbar ul li.col7>a:hover{
  background: #4D16AD;
}

header .navbar ul li.hov-nav{
    position:relative;
}
header .navbar ul li:hover ul{
    display:block;
}
header .navbar ul li ul{
    position:absolute;
    left:0px;
    top:100%;
    padding:0px;
    display:none;
    width:180px;
}
#hov-nav li a{
    padding:5px 5px;
    font-size:16px;
    color: #000 !important;

}
#hov-nav li{
    line-height: 2px;
    background: #fff !important;
    border-bottom: 1px solid #000;
}
#hov-nav li:hover{

    background: #f59120 !important;
}
#hov-nav li:hover a{
    color:#fff !important;
}

/*05-02-2020 end*/


/* Floating Social Media Bar Style Starts Here */

#sidebar {
  height: 250px;
  width: 10px;
  position: fixed;
  text-align: center;
  padding: 10px;
  margin-left: 10px;
  z-index: 4;
  top: 35%;
}

.social p i {
  left: 30px;
  position: relative;
  vertical-align: middle;
  text-align: center;
  font-size: 15px;
  color:#fff;

}
.social p {
  color:#fff;
}

.social {
  margin-left: -210px;
  width: 215px;
  padding: 0;
  display: inline-table;
  height: 0px;
  background-color: rgba(128, 128, 128, 0.73);
  -moz-transition-property: margin-left;
  -moz-transition-duration: 0.2s;
  -moz-transition-delay: 0.2s;
  -ms-transition-property: margin-left;
  -ms-transition-duration: 0.2s;
  -ms-transition-delay: 0.2s;
  -o-transition-property: margin-left;
  -o-transition-duration: 0.2s;
  -o-transition-delay: 0.2s;
  -webkit-transition-property: margin-left;
  -webkit-transition-duration: 0.2s;
  -webkit-transition-delay: 0.2s;
  box-shadow: 0px 0px 6px 0px #3E3D3D;
  cursor: pointer;
}

.social:hover {
  margin-left: -30px;
  width: 230px;
  background-color: #3b5998;
}

.facebook:hover {
  background-color: #3b5998;
}
.facebook {
  background-color: #3b5998;
}

.twitter:hover {
  background-color: #4099FF;
}
.twitter {
  background-color: #4099FF;
}

.google:hover {
  background-color: #DD4B39;
}
.google {
  background-color: #DD4B39;
}

.linkedin p i {
  left: 15px;
  color:#fff;
  top: 4px;

}
.facebook p i {
  left: 27px;
  color:#fff;
  top: 4px;
}
.twitter p i {
  left: 27px;
  color:#fff;
  top: 4px;
}

.google p i {
  left: 30px;
  color:#fff;
  top: 4px;
}

.youtube p i {
  left: 12px;
  color:#fff;
  top: 4px;

}

.youtube:hover {
  background-color: #E52D27;
}

.youtube {
  background-color: #E52D27;
}

.linkedin:hover {
  background-color: #0976B4;
}

.linkedin {
  background-color: #0976B4;
}


/* Floating Social Media Bar Style Ends Here */
/* Floating Right Here Here */



/* Floating Right Ends Here */
.carousel-indicators{
  z-index: 1;
}


/* nav hover effect */


.open > .dropdown-menu {
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);
  opacity:1;
}

.dropdown-menu {
  opacity:.3;
  -webkit-transform-origin: top;
  transform-origin: top;
  -webkit-transform: scale(1, 0);
  transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
}

.dropdown-toggle::after{
  display:none !important;
}

/* nav hover effect */


/* premium_calculator */
.premium_cal{
  margin-top : 100px !important;
}

.calculator_left_side {
width: 100%;
height: 100%;
}

.calculator_right_side:after{
content: '';
background: #747d8c;
width: 2px;
height: 62%;
top: 20%;
left: 8%;
position: absolute;
}

.calculator_left_side img{
margin-top: 115px;
}

.premium_calculator{
border: 1px solid #2F3640;
border-radius: 20px;
box-shadow: 0px 0px 5px 8px rgba(0,0,0,0.17);
padding: 0 0 50px 0;
}

.premium_calculator_title{
padding-top: 100px;
padding-bottom: 25px;
}
/* premium_calculator */

@yield('css')

{{-- --------------------------- --}}

/* Floating Right Here Here */

.sticky-container {
/*background-color: #333;*/
z-index: 2;
padding: 0px;
margin: 0px;
position: fixed;
right: -168px;
top: 37%;
width: 200px;
}
.sticky-container .sticky li {
list-style-type: none;

color: #efefef;
height: 43px;
padding: 0px;
margin: 0px 0px 1px 0px;
-webkit-transition: all 0.25s ease-in-out;
-moz-transition: all 0.25s ease-in-out;
-o-transition: all 0.25s ease-in-out;
transition: all 0.25s ease-in-out;
cursor: pointer;
/* filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); */
/* filter: gray; */
/* -webkit-filter: grayscale(100%); */
}
.sticky-container .sticky li:hover {
margin-left: -150px;
/*-webkit-transform: translateX(-115px);
		-moz-transform: translateX(-115px);
		-o-transform: translateX(-115px);
		-ms-transform: translateX(-115px);
		transform:translateX(-115px);*/
		/*background-color: #8e44ad;*/
filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
-webkit-filter: grayscale(0%);
}
.sticky-container .sticky li img {
float: left;
margin: 10px 4px;
margin-right: 10px;
}
.sticky-container .sticky li p {
padding: 0px;
margin: 0px;
text-transform: uppercase;
line-height: 43px;
}
/** content **/
.sticky-container .content {
margin-top: 150px;
margin-left: 100px;
width: 700px;
}


.sticky-container p {
color: #ecf0f1;
font-family: "Lato";
line-height: 28px;
font-size: 12px;
padding-top: 50px;
}


{{-- ------------------- --}}

/* .menu {
  height: 4rem;
  width: 100%;
}
.menu ol {
  list-style-type: none;
  margin: 0 auto;
  padding: 0;
}
.menu > ol {
  max-width: 1000px;
  padding: 0 2rem;
  display: flex;
}
.menu > ol > .menu-item {
  flex: 1;
  padding: 20px;
}
.menu > ol > .menu-item:after {
  content: "";
  position: absolute;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  bottom: 5px;
  left: calc(50% - 2px);
  background: #FECEAB;
  will-change: transform;
  transform: scale(0);
  transition: transform 0.2s ease;
}
.menu > ol > .menu-item:hover:after {
  transform: scale(1);
}
.menu-item {
  position: relative;
  line-height: 2.5rem;
  text-align: center;
}
.menu-item a {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  display: block;
  color: #FFF;
}
.sub-menu .menu-item {
  padding: 0.75rem 0;
  background: #28A745;
  opacity: 0;
  transform-origin: bottom;
  animation: enter 0.2s ease forwards;
}
.sub-menu .menu-item:nth-child(1) {
  animation-duration: 0.2s;
  animation-delay: 0s;
}
.sub-menu .menu-item:nth-child(2) {
  animation-duration: 0.3s;
  animation-delay: 0.1s;
}
.sub-menu .menu-item:nth-child(3) {
  animation-duration: 0.4s;
  animation-delay: 0.2s;
}
.sub-menu .menu-item:hover {
  background: #F8B195;
}
.sub-menu .menu-item a {
  padding: 0 0.75rem;
}
@media screen and (max-width: 600px) {
  .sub-menu .menu-item {
    background: #C06C84;
  }
}
@media screen and (max-width: 600px) {
  .menu {
    position: relative;
  }
  .menu:after {
    content: "";
    position: absolute;
    top: calc(50% - 2px);
    right: 1rem;
    width: 30px;
    height: 4px;
    background: #FFF;
    box-shadow: 0 10px #FFF, 0 -10px #FFF;
  }
  .menu > ol {
    display: none;
    background: #F67280;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
    animation: fade 0.2s ease-out;
  }
  .menu > ol > .menu-item {
    flex: 0;
    opacity: 0;
    animation: enter 0.3s ease-out forwards;
  }
  .menu > ol > .menu-item:nth-child(1) {
    animation-delay: 0s;
  }
  .menu > ol > .menu-item:nth-child(2) {
    animation-delay: 0.1s;
  }
  .menu > ol > .menu-item:nth-child(3) {
    animation-delay: 0.2s;
  }
  .menu > ol > .menu-item:nth-child(4) {
    animation-delay: 0.3s;
  }
  .menu > ol > .menu-item:nth-child(5) {
    animation-delay: 0.4s;
  }
  .menu > ol > .menu-item + .menu-item {
    margin-top: 0.75rem;
  }
  .menu > ol > .menu-item:after {
    left: auto;
    right: 1rem;
    bottom: calc(50% - 2px);
  }
  .menu > ol > .menu-item:hover {
    z-index: 1;
  }
  .menu:hover > ol {
    display: flex;
  }
  .menu:hover:after {
    box-shadow: none;
  }
}

.sub-menu {
  position: absolute;
  width: 100%;
  top: 100%;
  left: 0;
  display: none;
  z-index: 1;
}
.menu-item:hover > .sub-menu {
  display: block;
}
@media screen and (max-width: 600px) {
  .sub-menu {
    width: 100vw;
    left: -2rem;
    top: 50%;
    transform: translateY(-50%);
  }
}

html, body {
  font-size: 16px;
  font-family: "Fira Mono", monospace;
  margin: 0;
  background: #2A363B;
}

* {
  box-sizing: border-box;
}
*:before, *:after {
  box-sizing: inherit;
}

a {
  text-decoration: none;
}

@keyframes enter {
  from {
    opacity: 0;
    transform: scaleY(0.98) translateY(10px);
  }
  to {
    opacity: 1;
    transform: none;
  }
}
@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
} */


/* ------------------------------- */
.bg-footer-dark, footer.footer--dark{
  background: linear-gradient(to right, #4B545D, #3C4349);
}

.menu {
  /* background-image: linear-gradient(to right, #ed6ea0 0%, #ec8c69 100%); */
  border-radius: 0.5rem;
  text-transform: uppercase;
  width: 100%;
  padding: 10px 0;
}
.menu a {
  color: #fff;
  text-decoration: none;
  font-weight: 300;
}
.menu a:focus, .menu a:focus-within {
  outline: none;
}
.menu > ol {
  display: flex;
}
.menu > ol > li {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

@media (min-width: 45rem) {
  .menu > ol {
    justify-content: space-around;
  }
  .menu > ol:hover > li:first-child > a, .menu > ol:focus-within > li:first-child > a {
    opacity: 0.6;
  }
  .menu > ol > li {
    flex: 1 1 0;
  }
  .menu > ol > li:last-child:after {
    content: '';
    position: absolute;
    top: 0;
    width: 100%;
    bottom: 0;
    margin-right: -50%;
    background: rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
    z-index: 0;
    transition: 350ms cubic-bezier(1, 0.49, 0.09, 1.29) all;
    pointer-events: none;
  }
  .menu > ol > li:first-child:nth-last-child(1) ~ li:last-child:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(2) ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(3) ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:after {
    right: 550%;
  }
  .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:after {
    right: 650%;
  }
  .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:after {
    right: 750%;
  }
  .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:after {
    right: 850%;
  }
  .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:after {
    right: 950%;
  }
  .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:after {
    right: 1050%;
  }
  .menu > ol > li:first-child:nth-last-child(2):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(2):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(2):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(2):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(2) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(2):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(2):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(2):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(2) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(2) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(2) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(3):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(3):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.6666666667);
  }
  .menu > ol > li:first-child:nth-last-child(3):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(3):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.6666666667);
  }
  .menu > ol > li:first-child:nth-last-child(3):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(3):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(3):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(3):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(3):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.3333333333);
  }
  .menu > ol > li:first-child:nth-last-child(3):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(3):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(3) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.3333333333);
  }
  .menu > ol > li:first-child:nth-last-child(3):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(3):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(3):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(3) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.75);
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.75);
  }
  .menu > ol > li:first-child:nth-last-child(4):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(4):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(4):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(4):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(4):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(4):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.25);
  }
  .menu > ol > li:first-child:nth-last-child(4):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(4):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(4) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.25);
  }
  .menu > ol > li:first-child:nth-last-child(4):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(4):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(4):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(4) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.8);
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.8);
  }
  .menu > ol > li:first-child:nth-last-child(5):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.6);
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.6);
  }
  .menu > ol > li:first-child:nth-last-child(5):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.4);
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.4);
  }
  .menu > ol > li:first-child:nth-last-child(5):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.2);
  }
  .menu > ol > li:first-child:nth-last-child(5):nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5):nth-child(4):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(5) ~ li:nth-child(4):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.2);
  }
  .menu > ol > li:first-child:nth-last-child(5):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(5) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 550%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.8333333333);
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.8333333333);
  }
  .menu > ol > li:first-child:nth-last-child(6):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.6666666667);
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.6666666667);
  }
  .menu > ol > li:first-child:nth-last-child(6):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(6):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.3333333333);
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(4):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(4):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.3333333333);
  }
  .menu > ol > li:first-child:nth-last-child(6):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.1666666667);
  }
  .menu > ol > li:first-child:nth-last-child(6):nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6):nth-child(5):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(6) ~ li:nth-child(5):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.1666666667);
  }
  .menu > ol > li:first-child:nth-last-child(6):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(6) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 650%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.8571428571);
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.8571428571);
  }
  .menu > ol > li:first-child:nth-last-child(7):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 550%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.7142857143);
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.7142857143);
  }
  .menu > ol > li:first-child:nth-last-child(7):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5714285714);
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5714285714);
  }
  .menu > ol > li:first-child:nth-last-child(7):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.4285714286);
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(4):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(4):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.4285714286);
  }
  .menu > ol > li:first-child:nth-last-child(7):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.2857142857);
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(5):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(5):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.2857142857);
  }
  .menu > ol > li:first-child:nth-last-child(7):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.1428571429);
  }
  .menu > ol > li:first-child:nth-last-child(7):nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7):nth-child(6):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(7) ~ li:nth-child(6):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.1428571429);
  }
  .menu > ol > li:first-child:nth-last-child(7):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(7) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 750%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.875);
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.875);
  }
  .menu > ol > li:first-child:nth-last-child(8):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 650%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.75);
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.75);
  }
  .menu > ol > li:first-child:nth-last-child(8):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 550%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.625);
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.625);
  }
  .menu > ol > li:first-child:nth-last-child(8):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus-within ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(4):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(4):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(8):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.375);
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(5):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(5):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.375);
  }
  .menu > ol > li:first-child:nth-last-child(8):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.25);
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(6):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(6):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.25);
  }
  .menu > ol > li:first-child:nth-last-child(8):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.125);
  }
  .menu > ol > li:first-child:nth-last-child(8):nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8):nth-child(7):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(8) ~ li:nth-child(7):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.125);
  }
  .menu > ol > li:first-child:nth-last-child(8):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(8) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 850%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.8888888889);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.8888888889);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 750%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.7777777778);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.7777777778);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 650%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.6666666667);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.6666666667);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus-within ~ li:last-child:after {
    right: 550%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5555555556);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(4):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(4):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5555555556);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus-within ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.4444444444);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(5):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(5):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.4444444444);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.3333333333);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(6):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(6):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.3333333333);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.2222222222);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(7):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(7):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.2222222222);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(8):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(8):hover > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus > ol a, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):hover > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus > ol a, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.1111111111);
  }
  .menu > ol > li:first-child:nth-last-child(9):nth-child(8):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9):nth-child(8):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(9) ~ li:nth-child(8):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.1111111111);
  }
  .menu > ol > li:first-child:nth-last-child(9):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(9) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 950%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.9);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.9);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 850%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.8);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.8);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 750%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.7);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.7);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus-within ~ li:last-child:after {
    right: 650%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.6);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(4):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(4):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.6);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus-within ~ li:last-child:after {
    right: 550%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(5):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(5):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus-within ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.4);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(6):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(6):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.4);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.3);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(7):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(7):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.3);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(8):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(8):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.2);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(8):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(8):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(8):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.2);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(9):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(9):hover > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus > ol a, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):hover > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus > ol a, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.1);
  }
  .menu > ol > li:first-child:nth-last-child(10):nth-child(9):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10):nth-child(9):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(10) ~ li:nth-child(9):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.1);
  }
  .menu > ol > li:first-child:nth-last-child(10):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(10) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus-within ~ li:last-child:after {
    right: 1050%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.9090909091);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(1):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(1):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.9090909091);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus-within ~ li:last-child:after {
    right: 950%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.8181818182);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(2):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(2):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.8181818182);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus-within ~ li:last-child:after {
    right: 850%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.7272727273);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(3):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(3):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.7272727273);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus-within ~ li:last-child:after {
    right: 750%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.6363636364);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(4):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(4):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.6363636364);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus-within ~ li:last-child:after {
    right: 650%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.5454545455);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(5):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(5):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.5454545455);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus-within ~ li:last-child:after {
    right: 550%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.4545454545);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(6):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(6):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.4545454545);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus-within ~ li:last-child:after {
    right: 450%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.3636363636);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(7):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(7):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.3636363636);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(8):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus-within ~ li:last-child:after {
    right: 350%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(8):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.2727272727);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(8):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(8):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(8):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.2727272727);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(9):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus-within ~ li:last-child:after {
    right: 250%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(9):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.1818181818);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(9):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(9):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(9):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.1818181818);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(10):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus-within ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):hover ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus ~ li:last-child:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus-within ~ li:last-child:after {
    right: 150%;
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(10):hover > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus > ol a, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus-within > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):hover > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus > ol a, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus-within > ol a {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0), inset 0 0 0 3rem rgba(237, 110, 160, 0.0909090909);
  }
  .menu > ol > li:first-child:nth-last-child(11):nth-child(10):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11):nth-child(10):focus-within > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):hover > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):hover > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):hover > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus > ol a:focus-within, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus-within > ol a:hover, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus-within > ol a:focus, .menu > ol > li:first-child:nth-last-child(11) ~ li:nth-child(10):focus-within > ol a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1), inset 0 0 0 3rem rgba(237, 110, 160, 0.0909090909);
  }
  .menu > ol > li:first-child:nth-last-child(11):last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11):last-child:focus-within:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:hover:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus:after, .menu > ol > li:first-child:nth-last-child(11) ~ li:last-child:focus-within:after {
    right: 50%;
  }
  .menu > ol > li:first-child > a {
    opacity: 1;
  }
  .menu > ol > li > a {
    padding: 4px 0;
    font-size: 11px;
    position: relative;
    width: 100%;
    color: white;
    font-weight: 300;
    text-align: center;
    z-index: 1;
    transition: 250ms ease all;
  }
  .menu > ol > li > ol {
    position: absolute;
    top: 100%;
    left: 0;
    width: 200px;
    visibility: hidden;
  }
  .menu > ol > li > ol > li {
    
    transition: 250ms cubic-bezier(0.42, 0.83, 0.49, 1.35) transform;
    transform: scale(0);
  }
  .menu > ol > li > ol > li > a {
    display: block;
    text-align: center;
    padding: 10px 4px;
    font-size: 11px;
    background: #28A745;
    color: white;
    transition: 250ms ease all;
  }
  .menu > ol > li > ol > li > a:hover, .menu > ol > li > ol > li > a:focus, .menu > ol > li > ol > li > a:focus-within {
    box-shadow: inset 0 0 0 3rem rgba(0, 0, 0, 0.1);
    color: white;
  }
  .menu > ol > li:hover > a, .menu > ol > li:focus > a, .menu > ol > li:focus-within > a {
    opacity: 1 !important;
  }
  .menu > ol > li:hover > ol, .menu > ol > li:focus > ol, .menu > ol > li:focus-within > ol {
    visibility: visible;
  }
  .menu > ol > li:hover > ol > li, .menu > ol > li:focus > ol > li, .menu > ol > li:focus-within > ol > li {
    transform: scale(1);
  }
  .menu > ol > li:hover > ol > li:first-child, .menu > ol > li:focus > ol > li:first-child, .menu > ol > li:focus-within > ol > li:first-child {
    transition-delay: 150ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(1), .menu > ol > li:focus > ol > li:nth-child(1), .menu > ol > li:focus-within > ol > li:nth-child(1) {
    transition-delay: 150ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(2), .menu > ol > li:focus > ol > li:nth-child(2), .menu > ol > li:focus-within > ol > li:nth-child(2) {
    transition-delay: 300ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(3), .menu > ol > li:focus > ol > li:nth-child(3), .menu > ol > li:focus-within > ol > li:nth-child(3) {
    transition-delay: 450ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(4), .menu > ol > li:focus > ol > li:nth-child(4), .menu > ol > li:focus-within > ol > li:nth-child(4) {
    transition-delay: 600ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(5), .menu > ol > li:focus > ol > li:nth-child(5), .menu > ol > li:focus-within > ol > li:nth-child(5) {
    transition-delay: 750ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(6), .menu > ol > li:focus > ol > li:nth-child(6), .menu > ol > li:focus-within > ol > li:nth-child(6) {
    transition-delay: 900ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(7), .menu > ol > li:focus > ol > li:nth-child(7), .menu > ol > li:focus-within > ol > li:nth-child(7) {
    transition-delay: 1050ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(8), .menu > ol > li:focus > ol > li:nth-child(8), .menu > ol > li:focus-within > ol > li:nth-child(8) {
    transition-delay: 1200ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(9), .menu > ol > li:focus > ol > li:nth-child(9), .menu > ol > li:focus-within > ol > li:nth-child(9) {
    transition-delay: 1350ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(10), .menu > ol > li:focus > ol > li:nth-child(10), .menu > ol > li:focus-within > ol > li:nth-child(10) {
    transition-delay: 1500ms;
  }
  .menu > ol > li:hover > ol > li:nth-child(11), .menu > ol > li:focus > ol > li:nth-child(11), .menu > ol > li:focus-within > ol > li:nth-child(11) {
    transition-delay: 1650ms;
  }
}
@media (max-width: 45rem) {
  .menu {
    background-image: linear-gradient(to bottom, #ed6ea0 0%, #ec8c69 100%);
  }
  .menu a {
    font-size: 1.4rem;
    padding: 1rem 0.5rem;
  }
  .menu > ol {
    flex-direction: column;
  }
  .menu > ol > li {
    flex-direction: column;
    align-items: stretch;
    text-align: center;
  }
  .menu > ol > li > a:nth-last-child(2) {
    position: relative;
  }
  .menu > ol > li > a:nth-last-child(2):after {
    content: '';
    position: absolute;
    top: 50%;
    margin-top: -0.25rem;
    right: 1.5rem;
    border-top: 0.5rem solid #fff;
    border-left: 0.3rem solid transparent;
    border-right: 0.3rem solid transparent;
    transition: 250ms ease all;
  }
  .menu > ol > li:focus-within:nth-last-child(2):after, .menu > ol > li:focus:nth-last-child(2):after,
  .menu > ol > li > a:hover:nth-last-child(2):after,
  .menu > ol > li > a:focus-within:nth-last-child(2):after,
  .menu > ol > li > a:focus:nth-last-child(2):after {
    transform: rotate(180deg);
  }
  .menu > ol > li:focus-within + ol, .menu > ol > li:focus + ol,
  .menu > ol > li > a:hover + ol,
  .menu > ol > li > a:focus-within + ol,
  .menu > ol > li > a:focus + ol {
    max-height: 12rem;
  }
  .menu > ol > li > ol {
    background: rgba(0, 0, 0, 0.1);
    box-shadow: inset 0.1rem 0.1rem 0.5rem rgba(0, 0, 0, 0.15);
    overflow: hidden;
    max-height: 0;
    transition: 250ms ease all;
  }
  .menu > ol > li > ol > li a {
    display: block;
    font-size: 1.2rem;
  }
}






nav.primary-navigation {
  margin: 0 auto;
  display: block;
  text-align: center;
  font-size: 16px;
}
nav.primary-navigation ul li {
  list-style: none;
  margin: 0 auto;
  border-left: 1px solid #2d3436;


  display: inline-block;
  position: relative;
  text-decoration: none;
  text-align: center;
  font-family: arvo;
}
nav.primary-navigation li a {
  color: #fff;
}

.primary-navigation .dropdown li a{
  color: #000;
  padding: 0 0 0 10px;
}

nav.primary-navigation li a:hover {
  color: #000;
}
nav.primary-navigation li:hover {
  cursor: pointer;
}
nav.primary-navigation ul li ul {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding-left: 0;
  left: 0;
  display: none;
  background: white;
  border-radius: 5px;
}
nav.primary-navigation ul li:hover > ul,
nav.primary-navigation ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: block;
  min-width: 250px;
  text-align: left;
  padding-top: 20px;
  box-shadow: 0px 3px 5px -1px #ccc;
}
nav.primary-navigation ul li ul li {
  clear: both;
  width: 100%;
  text-align: left;
  margin-bottom: 10px;
  border-style: none;
}
nav.primary-navigation ul li ul li a:hover {
  padding-left: 10px;
  border-left: 2px solid #000;
  transition: all 0.3s ease;
}

a {
  text-decoration: none;
}
a:hover {
  color: #000;
}

ul li ul li a {
  transition: all 0.5s ease;
}


.fareast-menu{
  margin-bottom: 0 !important;
  padding: 3px !important;
}

</style>


<body>

<!-- Loader Start-->
<div id="global-loader" ></div>
<!-- Loader End-->

{{-- click to top --}}

{{-- click to top --}}

{{-- floating bar --}}
<!-- Floating Social Media bar Starts -->
  @php
    $sicon   = App\Social::first();
  @endphp
<div id="sidebar">

  <div class="social facebook">
    @if(isset($sicon->facebook))
    <a href="{{$sicon->facebook}}" target="_blank">
      <p>Like on Facebook <i class="fab fa-facebook-f"></i> </p>
    </a>
    @else
     <a href="#">
      <p>Like on Facebook <i class="fab fa-facebook-f"></i> </p>
    </a>
    @endif
  </div>

  <div class="social twitter">
    @if(isset($sicon->whatsapp))
    <a href="{{$sicon->whatsapp}}" target="_blank">
      <p>Follow on Twitter <i class="fab fa-twitter"></i> </p>
    </a>
    @else
     <a href="#">
      <p>Follow on Twitter <i class="fab fa-twitter"></i> </p>
    </a>
    @endif
  </div>

  <div class="social google">
   @if(isset($sicon->google))
    <a href="{{$sicon->google}}" target="_blank">
      <p>&nbspAdd on Google+ <i class="fab fa-google"></i> </p>
    </a>
    @else
     <a href="#">
      <p>&nbspAdd on Google+ <i class="fab fa-google"></i> </p>
    </a>
    @endif
  </div>

  <div class="social youtube">
     @if(isset($sicon->youtube))
     <a href="{{$sicon->youtube}}" target="_blank">
      <p>Subscribe on Youtube <i class="fab fa-youtube"></i> </p>
     </a>
     @else
       <a href="#">
      <p>Subscribe on Youtube <i class="fab fa-youtube"></i> </p>
     </a>
     @endif
  </div>
  {{--<div class="social whatsapp">
    <a href=" https://www.linkedin.com " target="_blank">
      <p>Connect on LinkedIn <i class="fab fa-whatsapp"></i> </p>
    </a>
  </div>--}}
</div>
<!-- Floating Social Media bar Ends -->
{{-- floating bar --}}

@if (Route::currentRouteNamed('homepage'))



  {{-- floating bar --}}
  <!-- Right Side -->
  <div class="sticky-container" id="sticky_right" style="display:none;">
  <ul class="sticky">
   <a href="{{route('policy_statement')}}" ><li style="background-color: #2980b9;"> <img width="20" height="22" title="" alt="" src="https://res.cloudinary.com/onexa/image/upload/v1581421163/Credit_Crd_aopyjx.png" />
  <p>Policy Statement</p>
  </li></a>

   <a href="{{route('premium_calculator')}}" ><li style="background-color: #c0392b;"> <img width="18" height="20" title="" alt="" src="https://res.cloudinary.com/onexa/image/upload/v1581421181/calcu_rghuou.png" />
  <p>Premium Calculator</p>
  </li></a>

   <a href="{{route('office_information')}}" ><li style="background-color: #8e44ad;"> <img width="18" height="20" title="" alt="" src="https://res.cloudinary.com/onexa/image/upload/v1581421148/Credit1_b2ibrr.png" />
  <p>Office Infotmation</p>
  </li></a>
  
  </ul>
  </div>
  <!-- Right Side -->
  {{-- floating bar --}}

  @else

    {{-- floating bar --}}
    <!-- Right Side -->
    <div class="sticky-container" id="sticky_right">
    <ul class="sticky">
   <a href="{{route('policy_statement')}}" ><li style="background-color: #2980b9;"> <img width="20" height="22" title="" alt="" src="https://res.cloudinary.com/onexa/image/upload/v1581421163/Credit_Crd_aopyjx.png" />
  <p>Policy Statement</p>
  </li></a>

   <a href="{{route('premium_calculator')}}" ><li style="background-color: #c0392b;"> <img width="18" height="20" title="" alt="" src="https://res.cloudinary.com/onexa/image/upload/v1581421181/calcu_rghuou.png" />
  <p>Premium Calculator</p>
  </li></a>

   <a href="{{route('office_information')}}" ><li style="background-color: #8e44ad;"> <img width="18" height="20" title="" alt="" src="https://res.cloudinary.com/onexa/image/upload/v1581421148/Credit1_b2ibrr.png" />
  <p>Office Infotmation</p>
  </li></a>
    </ul>
    </div>
    <!-- Right Side -->
    {{-- floating bar --}}

  @endif





    <div id="banner">

        <div id="topbar">

          {{-- @forelse ($top_headers = App\Topheader::latest()->paginate(1) as $top_header)
            <div class="contant" style="margin: 5px;">


                @if (isset($top_header->phone_number))
                  <div class="phone">
                      <i class="fas fa-phone-alt"></i>
                      <span>
                        <a href="tel:{{ $top_header->phone_number }}" style="color: #fff;">{{ $top_header->phone_number }}</a>
                      </span>
                  </div>
                @endif

                @if (isset($top_header->email))
                  <div class="mail">
                      <i class="fas fa-envelope" aria-hidden="true"></i>
                      <span>{{$top_header->email}}</span>
                  </div>
                @endif

                @if (isset($top_header->gplay))
                  <div class="app">
                    <a href="{{$top_header->gplay}}">
                      <img src="{{ asset('frontend/img/playstore.png') }}" alt="Playstore">
                      <span class="text-white">Get our app</span>
                    </a>

                  </div>
                @endif

            </div>
          @empty

          @endforelse --}}

          <div class="row bg-white p-2">
            <div class="col-8 text-center">
              <img src="{{ asset('frontend/logo.png') }}" style="width: 35%;" alt="#fareast">
            </div>
            <div class="col-4 text-center">
              <ul class="list-group list-group-flush text-left">
                <li> <h6 class="f-s-14"> <i class="fas fa-phone-square"></i> 16681 or 09612666999</h6> </li>
                <li> <h6 class="f-s-14"> <i class="fab fa-google-play"></i> Get Out App</h6> </li>
            </ul>
            </div>
          </div>





        </div>

 @php
                          $all_menu = App\MainMenu::all();
                          $all_sub_menu = App\SubMenu::all();
                        @endphp

                <header class="bg-success">
                    <div class="no-class" style="margin: 0 70px;">



                        {{-- <div class="brand">
                          <a href="{{ route('homepage') }}">
                            @foreach ($logos  = App\Logo::where('status',1)->get() as $logo)
                                <img class="logo" src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="Logo">
                            @endforeach
                        </a>
                        </div> --}}

                    {{-- <img class="img-fluid hidden" src="https://res.cloudinary.com/onexa/image/upload/v1582544620/Final_1_oulatn.png" width="180px" height="150px" style="display:inline; margin: 12px 0px 0px 107px;"> --}}

                        <div class="navbar navbar-expand-lg navbar-dark far_nav pull-right" style="width: 95%;">
                            <a href="#" class="navbar-brand"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                         

{{-- <nav class="menu">
  <ol style="margin: 2px 0 0 75px;">
    <li class="menu-item"><a href="{{ route('homepage') }}">Home</a></li>

@foreach ($all_menu as $menu)

    <li class="menu-item">
      <a href="{{ $menu->link }}">{{ $menu->perent_menu_name }}</a>
      @if(App\SubMenu::where('parent_menu_id',$menu->id)->exists())
      <ol class="sub-menu">
        @foreach ($all_sub_menu as $sub_menu)
          @if($sub_menu->parent_menu_id == $menu->id)
            <li class="menu-item"><a href="{{ $sub_menu->sub_menu_link }}">{{ $sub_menu->sub_menu_name }}</a></li>
          @endif
        @endforeach
      </ol>
      @endif
    </li>
    @endforeach

    <li class="menu-item"><a href="{{ route('contacts') }}">Contact</a></li>
  </ol>
</nav> --}}



<nav role="navigation" class="primary-navigation">
  <ul class="fareast-menu">

    <li><a href="{{ route('homepage') }}"><i class="fa fa-home text-white"></i></a></li>

    @foreach ($all_menu as $menu)
    <li><a href="{{ $menu->link }}">{{ $menu->perent_menu_name }}</a>
      @if(App\SubMenu::where('parent_menu_id',$menu->id)->exists())
        <ul class="dropdown">
          @foreach ($all_sub_menu as $sub_menu)
            @if($sub_menu->parent_menu_id == $menu->id)
                <li><a href="{{ $sub_menu->sub_menu_link }}">{{ $sub_menu->sub_menu_name }}</a></li>
            @endif
          @endforeach
        </ul>
      @endif
    </li>
    @endforeach

    <li><a href="#">Contact</a></li>
  </ul>
</nav>


{{-- 
                                <div id="myNav" class="search_overlay">
                                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                  <div class="overlay-content">

                                    <div class="container">

                                      <div class="input-group">
                                         <input type="text" class="form-control search_input" placeholder="Search">
                                         <div class="input-group-append">
                                           <button class="btn btn-success" type="button">
                                             <i class="fa fa-search search_button"></i>
                                           </button>
                                         </div>
                                       </div>

                                    </div>



                                  </div>
                                </div> --}}

{{-- 
                                <div class="search">
                                    <a href="#" onclick="openNav()"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div> --}}



                            </div>
                        </div>

                    </div>
                </header>


      <main>
        @yield('content')
      </main>






{{-- New footer --}}


<!--footer start-->
<footer class="footer6 footer--dark">
        <div class="footer__big" style="padding-bottom: 0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="widget widget--links">
                        <h4 class="widget__title2">Company</h4>
                        <ul class="links">

                          @php

                          $footer_widget_ones   = App\FooterMenu::where('footer_widget_id','=',1)->get();
                          $footer_widget_twos   = App\FooterMenu::where('footer_widget_id',2)->get();
                          $footer_widget_threes = App\FooterMenu::where('footer_widget_id',3)->get();
                          $footer_widget_fours = App\FooterMenu::where('footer_widget_id',4)->get();

                          @endphp

                          @foreach ($footer_widget_ones as $footer_widget_one)
                            <li>{{ $footer_widget_one->footer_menu_name }}</li>
                          @endforeach

                        </ul>
                    </div>
                    </div><!-- ends: .col-lg-3 -->

                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-lg-center">
                        <div class="widget widget--links mb-0">
                            <h4 class="widget__title2">Others</h4>
                            <ul class="links">

                          

                              @foreach ($footer_widget_twos as $footer_widget_one)
                                <li><a href="{{ $footer_widget_one->link }}">{{ $footer_widget_one->footer_menu_name }}</a></li>
                              @endforeach

                            </ul>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->

                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-lg-center">
                        <div class="widget widget--links mb-0">
                            <h4 class="widget__title2">Services</h4>
                            <ul class="links">
                              @foreach ($footer_widget_threes as $footer_widget_two)
                                <li><a href="{{ $footer_widget_two->link }}">{{ $footer_widget_two->footer_menu_name }}</a></li>
                              @endforeach
                            </ul>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget--links mb-0">
                            <h4 class="widget__title2">Useful Links</h4>
                            <ul class="links">
                              @foreach ($footer_widget_fours as $footer_widget_three)
                                <li><a href="{{ $footer_widget_three->link }}">{{ $footer_widget_three->footer_menu_name }}</a></li>
                              @endforeach
                            </ul>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->
                </div>
            </div>
        </div><!-- ends: footer__big -->

        <div class="footer__bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="far_moto text-center">
                  <img src="{{asset('frontend/img/Final.png')}}" alt="" style="height:50%; width:40%; margin-bottom: 50px">
                </div>
              </div>

            </div>

          </div>

        </div>

        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__bottom-content">
                            <p style="font-weight: bold;">© 2020 Fareast Islami Life Insurance Ltd. All rights reserved.</p>



    <div class="social-basic ">
        <ul class="d-flex justify-content-end ">

            <li><a href="#"><i data-feather="facebook"></i></a></li>
            <li><a href="#"><i data-feather="youtube"></i></a></li>
            <li><a href="#"><i data-feather="instagram"></i></a></li>
            <li><a href="#"><i data-feather="twitter"></i></a></li>
        </ul>
    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: footer__small -->
    </footer>
{{-- <footer>



<!--footer end-->


{{-- New footer --}}





        <!--script code here-->

        <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.parallax-1.1.3.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://res.cloudinary.com/code-error/raw/upload/v1580302645/fareast/js/plugins.min_s8gcgd.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="https://res.cloudinary.com/code-error/raw/upload/v1580302643/fareast/js/script.min_bxmmd0.js"></script>



        <script>
            $(document).ready(function() {
              'use strict'

                $(".product-slider").owlCarousel({
                    items: 4,
                    margin: 20,
                    loop: true,
                    autoplay: true,
                    nav: true,
                    dotsEach: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true,
                            loop: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true
                        },
                        1000: {
                            items: 4,
                            nav: true,
                            loop: true
                        }
                    }
                });

                $(".star-slider").owlCarousel({
                    items: 5,
                    margin: 20,
                    loop: true,
                    autoplay: true,
                    nav: false,
                    dotsEach: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 5,
                            nav: true,
                            loop: false
                        }
                    }
                });
                $(".event-slide").owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    nav: false,
                    dots: true,

                });
                $(".award-slide").owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    nav: true,
                    responsiveClass: true,
                    responsive: {
                        768: {
                            items: 1,
                        },
                        414: {
                            items: 1,
                        },
                        375: {
                            items: 1,
                        },
                        360: {
                            items: 1,
                        }
                    }
                });
                $(".corporate-slide").owlCarousel({
                    items: 9,
                    margin: 10,
                    loop: true,
                    autoplay: true,
                    responsiveClass: true,
                    responsive: {
                        768: {
                            items: 6,
                        },
                        414: {
                            items: 3,
                        },
                        375: {
                            items: 2,
                        },
                        360: {
                            items: 2,
                        }
                    }
                });
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 0) {
                        $('.logo').addClass("sticky-img");
                    } else {
                        $('.logo').removeClass("sticky-img");
                    }
                });
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 0) {
                        $('header').addClass("sticky-head");
                    } else {
                        $('header').removeClass("sticky-head");
                    }
                });

                new WOW().init();
                $('.info').mouseenter(function() {
                    $('#popup').addClass('popup-view');
                });
                $('.info').mouseleave(function() {
                    $('#popup').removeClass('popup-view');
                });
            });

        </script>

        <script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

<script>
      feather.replace()
    </script>

    <script>

   $(window).on("load", function(e) {
     $("#global-loader").fadeOut("fast");
   });
    </script>



@yield('js')


<script>

$(window).on("load", function() {
  var screensize = screen.width;
  // alert(screensize);

  if (screensize <= 1200) {
    $(".event_award_section").css("display","none");
    $(".event_award_section_mini").css("display","block");
  }

  if (screensize >= 1200) {
    $(".event_award_section_mini").css("display","none");
  }

  if (screensize < 992) {
    $("header").css("display","none");
  }



});
</script>

<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow13.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();
</script>

<script type="text/javascript">

$(function(){
$(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        });
});

</script>

</body>
</html>
