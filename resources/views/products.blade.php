<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ url('../images/favicon.ico') }}">

  <title>SwabCredit</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/plugins/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/plugins/animatecss/css/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/css/styles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/css/test.css') }}">


  <!-- Styles -->
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    body {
        background: linear-gradient(to right, #414345, #232526);
    }

    a {
      background-color: transparent
    }

    [hidden] {
      display: none
    }

    html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.5
    }

    *,
    :after,
    :before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    svg,
    video {
      display: block;
      vertical-align: middle
    }

    video {
      max-width: 100%;
      height: auto
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
      --bg-opacity: 1;
      background-color: #f7fafc;
      background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
      border-top-width: 1px
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .font-semibold {
      font-weight: 600
    }

    .h-5 {
      height: 1.25rem
    }

    .h-8 {
      height: 2rem
    }

    .h-16 {
      height: 4rem
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-7 {
      line-height: 1.75rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .ml-1 {
      margin-left: .25rem
    }

    .mt-2 {
      margin-top: .5rem
    }

    .mr-2 {
      margin-right: .5rem
    }

    .ml-2 {
      margin-left: .5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-8 {
      margin-top: 2rem
    }

    .ml-12 {
      margin-left: 3rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .max-w-6xl {
      max-width: 72rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .overflow-hidden {
      overflow: hidden
    }

    .p-6 {
      padding: 1.5rem
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .pt-8 {
      padding-top: 2rem
    }

    .fixed {
      position: fixed
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
      text-align: center
    }

    .text-gray-200 {
      --text-opacity: 1;
      color: #edf2f7;
      color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
      --text-opacity: 1;
      color: #e2e8f0;
      color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
      --text-opacity: 1;
      color: #cbd5e0;
      color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
      --text-opacity: 1;
      color: #718096;
      color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
      --text-opacity: 1;
      color: #4a5568;
      color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
      width: 1.25rem
    }

    .w-8 {
      width: 2rem
    }

    .w-auto {
      width: auto
    }
    .min-h-fit {
      min-height:fit-content;
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
      .sm\:rounded-lg {
        border-radius: .5rem
      }

      .sm\:block {
        display: block
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-start {
        justify-content: flex-start
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:h-20 {
        height: 5rem
      }

      .sm\:ml-0 {
        margin-left: 0
      }

      .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .sm\:pt-0 {
        padding-top: 0
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width:768px) {
      .md\:border-t-0 {
        border-top-width: 0
      }

      .md\:border-l {
        border-left-width: 1px
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width:1024px) {
      .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem
      }
    }

    @media (prefers-color-scheme:dark) {
      .dark\:bg-gray-800 {
        --bg-opacity: 1;
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--bg-opacity))
      }

      .dark\:bg-gray-900 {
        --bg-opacity: 1;
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--bg-opacity))
      }

      .dark\:border-gray-700 {
        --border-opacity: 1;
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--border-opacity))
      }

      .dark\:text-white {
        --text-opacity: 1;
        color: #fff;
        color: rgba(255, 255, 255, var(--text-opacity))
      }

      .dark\:text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
      }

      .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: #6b7280;
        color: rgba(107, 114, 128, var(--tw-text-opacity))
      }

    }
  </style>

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
    ul{
      padding-inline-start: 0px !important;
    }
    .splashcon{
      width:60px;
    }

    .svg {
      position: absolute;
    }

    .svg2 {
      position: relative;
      height: 50%;
      width: 100%;
    }

    .svg3 {
      position: relative;
    }
    .no-show{
        display: block;
    }
    .navcon{
      width:30px
    }
    .splash-content{
      display:flex;
      flex-direction:row;
    }
    .contact-table{
      color:white;
      text-align:left;
      font-size:16px;
      width: 100%; 
      display: flex;
      justify-content:center;
    }
    .contact-table ul li{
      text-align: left;
    }
    .carbox{
      height: 100%;
    }
    .car-indicators-padding{
      padding:3rem
    }

    @media (max-width:768px) {
      .no-show{
        display:none;
      }
      .splashcon{
      width:36px;
    }
    .navcon{
      width:20px
    }    
    .splash-content{
      display:flex;
      flex-direction:column;
    }
    .mobile-text{
      font-size:12px;
    }
    .mobile-text-big{
      font-size:13px;
    }
    .mobile-text-bigger{
      font-size:16px;
    }
    .mobile-text-title{
      font-size:24px;
    }
    .mobile-text-sm{
      font-size:10px
    }
    .contact-table{
      color:white;
      font-size:12x;
      width:100%;
    }
    .contact-table ul{
      text-align: left;
      padding-inline-start: 0px !important;
    }
    .contact-table ul li{
      text-align: left;
    }
    .car-indicators-padding{
      padding:1.5rem
    }
      
  
    }
  </style>
</head>
<!-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Make a Payment</a>
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">PPP Loan</a>
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Business Block</a>
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Credit Restoration</a>
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">CPN / SCN Profile</a>
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Terms of Use</a>

                    @isAdmin
                        <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Admin</a>
                    @endisAdmin

                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>


                    @else
                        <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                        


                </div>
            @endif -->
<nav class="navbar navbar-expand-lg navbar-dark bg-hue-dark cwhite navbar-style-4 font-title py-2 sm:py-4 mb-2 fixed-top">
  <div class="container">
    <a class="navbar-brand-custom" href="#"><img src="{{ url('../images/logo.png') }}" class="navcon mr-2"
        style="vertical-align: bottom;">
      <span class="navbar-logo-text" style="vertical-align: bottom;"><b>wab</b>Credit & Trust</a></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent4"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mobile-text" id="navbarSupportedContent4">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu mobile-text" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#"></a>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pricing">Pricing</a>
        </li>


      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active mx-2">
          <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#">Contact</a>
        </li>
        @auth
        @isAdmin
        <li class="nav-item mx-2 active">
          <a class="nav-link  btn-warning btn" href="{{ route('register') }}">Admin Dashboard</a>
        </li>
        @endisAdmin
        <li class="nav-item mx-2 active">
          <a class="nav-link  btn-warning btn" href="{{ url('/dashboard') }}">Dashboard</a>
        </li>

        @else
        <li class="nav-item mx-2">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item mx-2 active">
          <a class="nav-link  btn-warning btn" href="{{ route('register') }}">Try Now</a>
        </li>
        @endauth


      </ul>
    </div>
  </div>
</nav>
<div class="w-100">
    <!-- Component Call To Action 1 Start -->
    <section class="py-5 mt-5" style="background:#DAA520; margin-top:4rem !important; min-height:400px;">
    	<div class="container">
    		<div class="row shadow" style="min-height:400px;">
    			<div class="col-md-8 mx-auto text-center align-middle shadow-lg" style="background:url('{{ url('../images/splash1.jpg') }}'); background-size:cover;">
    				<h1 class="my-3 font-title font-weight-bold mobile-text-title cwhite">Do Service 1 Now!</h1>
    				<p class="paragraph font-title p-3 mobile-text-bigger cwhite">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore amet facilis consectetur tempore, perspiciatis quisquam quibusdam nesciunt minima autem nihil ad atque dicta? Consectetur quae voluptates, reprehenderit tenetur minus iure!</p>

    			</div>
          <div class="col-md-4 mx-auto text-center d-flex justify-content-center align-center" style="background:#3D0C01;">
          <a class="my-4 btn btn-warning d-flex mobile-text-big">Get Started Today</a>
    		</div>
    	</div>
    </section>

</div>
<div style="background:linear-gradient(0deg, #7C0A01, #DAA520);">

<div class="container">
 <section class="feature-style-7 p-relative font-title mx-2" style="padding:1.5rem; border-radius:10px;">
        <div class="container">
        <div class="row py-4 cwhite p-relative">
            <div class="col-12 col-md-4">
                <div class="content-feature text-center  py-3 px-2 my-3 border-light rounded shadow" style="background:url('{{ url('../images/taxprep.jpg') }}'); background-size:cover;">
                    <i class="fa fa-code title-icon my-3"></i>
                    <h4 class="title">Tax Prep</h4>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, hic illum. Molestias corporis quo esse optio ducimus repellendus ullam aspernatur laboriosam architecto debitis? Illum deserunt ipsa laudantium sit, nostrum sint.</p>
                    <a href="#" class="uppercase p-2 csuccess bolder">Learn More</a>
                </div>

            </div>
            <div class="col-12 col-md-4">
                <div class="content-feature text-center py-3 px-2 my-3 border-light rounded shadow" style="background: linear-gradient(to right, #414345, #232526);">
                <div class="overlay op-4"></div>
                    <i class="fa fa-cubes title-icon my-3"></i>
                    <h4 class="title">Accounting</h4>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quasi tempora voluptates fugiat ad ducimus quibusdam corporis culpa quam, modi reiciendis id eveniet, harum aperiam laboriosam tenetur nam quas? Deserunt?</p>
                    <a href="#" class="uppercase p-2 csuccess bolder">Learn More</a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="content-feature text-center py-3 px-2 my-3 border-light rounded shadow" style="background: linear-gradient(to right, #414345, #232526);">
                    <i class="fa fa-money title-icon my-3"></i>
                    <h4 class="title">Notary</h4>
                    <p class="py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero perferendis aut enim quidem, illo in, praesentium dolorem libero esse eveniet, odio ducimus fugit inventore dolorum magnam pariatur sequi. Eius, corrupti!</p>
                    <a href="#" class="uppercase p-2 csuccess bolder">Learn More</a>
                </div>
                

            </div>



        </div>
        </div>
  </section> 
</div>
</div>
<div>
<svg class="p-relative"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
<defs>
    <linearGradient id="ycurve">
      <stop offset="5%" stop-color="#414345" />
      <stop offset="95%" stop-color="#232526" />
    </linearGradient>
    <linearGradient id="rcurve" gradientTransform="rotate(90)">
        <stop offset="5%" stop-color="#7C0A01" />
        <stop offset="95%" stop-color="#3D0C01" />
      </linearGradient>
  </defs> 
  <path fill="url('#rcurve')" fill-opacity="1" d="M0,160L120,176C240,192,480,224,720,218.7C960,213,1200,171,1320,149.3L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
</svg>
</div>
    <br>
    <br>
    <section class="py-5 bg-dark cwhite">
    	<div class="container">
    		<div class="row">
    			 <div class="col-12 col-md-8 text-center align-center justify-center">
    			 	<h4 class="font-title">100+ customizable and easy to use components</h4>
    			 </div>
    			 <div class="col-12 col-md-4 text-center align-center justify-center">
    			 	<a class="btn btn-danger flat"><span class="cwhite"><i class="m-2 fa fa-download"></i>Download Now</span></a>
    			 </div>
    		</div>
    	</div>
    </section>
    
</div>




  



<footer class="footer-style-5 p-5 bg-hue-dark cwhite">
  <div class="row">
    <div class="col-12 col-lg-3 my-1 d-flex flex-column justify-content-center align-items-center">
    <span class="font-title h5"
        style="position: relative; left: -.3em; top:.25em;">
      <img src="{{ url('../images/logo.png') }}" width="30px" class="navcon mr-2"><b>wab</b>Credit</span><br>
      <small class="lighter mb-3 op-7 mobile-text-sm">&copy 2017 SwabCredit</small>

    </div>
    <div class="col-12 col-lg-6 py-2 text-center">
      <ul class="p-0 font-title mobile-text">
        <li class="inline"><a href="#" class="uppercase m-2 inline">About</a></li>
        <li class="inline"><a href="#" class="uppercase m-2 inline">Contact</a></li>
        <li class="inline"><a href="#" class="uppercase m-2 inline">Support</a></li>
        <li class="inline"><a href="{{ route('terms.show') }}" class="uppercase m-2 inline">Terms of Service</a></li>
      </ul>
    </div>
    <div class="col-12 col-lg-3 my-1 text-center">
      <ul class="px-0">
        <li class="inline"><a href="#" class=" p-2 m-1 inline h5"><i class="fa fa-facebook"></i></a></li>
        <li class="inline"><a href="#" class="p-2 m-1 inline h5"><i class="fa fa-twitter"></i></a></li>
        <li class="inline"><a href="#" class="p-2  m-1 inline h5"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>


  </div>
</footer>

</div>
</div>
</div>
<script>
  
</script>
<script src="{{ url('/underexpress/plugins/jquery/jquery-3.2.0.min.js') }}"></script>
<script src="{{ url('/underexpress/plugins/popper/popper.js') }}"></script>
<script src="{{ url('/underexpress/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/underexpress/js/script.js') }}"></script>
</body>

</html>

