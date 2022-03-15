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
      margin: 0
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
<nav class="navbar navbar-expand-lg navbar-dark bg-hue-dark cwhite navbar-style-4 font-title py-2 sm:py-4 fixed-top">
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
            @foreach($services as $s)
            <a class="dropdown-item" href="{!! route('guest.services', $s->path) !!}">{{ $s->name }}</a>
            @endforeach

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
          <a class="nav-link  btn-warning btn" href="{{ route('products') }}">Try Now</a>
        </li>
        @endauth


      </ul>
    </div>
  </div>
</nav>

<header class="bg-hue-dark" style="width: 100%; height: 100%; margin-top: 0; ">
  <div class="container  p-6">
    <div class="content p-relative z-1 mt-5 splash-content" >

      <div class="basis-1/2" style="flex:50%;">
        <h2 class="font-title p-3 text-center my-1 cwhite font-jumbo antialiased"><span><img class="splashcon"
              src="{{ url('../images/logo.png') }}" style="position:relative; top: -.5rem;"><b
              class="font-weight-bold">wab</b>Credit & Trust</span></h2>
        <p class="paragraph font-title cwhite text-center col-12 col-sm-6 mx-auto " style="font-size: 1.5rem;">Tax Paper
          Services </p>
      </div>
      <div class="text-center mt-5 basis-1/3">
        <a href="{{ route('products') }}" class="btn btn-warning  m-2">Get a Quote<i
            class="fa fa-chevron-right ml-3"></i></a>
      </div>
    </div>
  </div>
  </div>




  <svg class="svg2 h-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <defs>
      <linearGradient id="myGradient" gradientTransform="rotate(90)">
        <stop offset="5%" stop-color="#3D0C01" />
        <stop offset="95%" stop-color="#7C0A01" />
      </linearGradient>
      <linearGradient id="myGradient2" gradientTransform="rotate(90)">
        <stop offset="5%" stop-color="#CC9901" />
        <stop offset="95%" stop-color="#DAA520" />
      </linearGradient>
    </defs>
    <g>
      <path fill="url('#myGradient')" fill-opacity="1"
        d="M0,256L120,213.3C240,171,480,85,720,42.7C960,0,1200,0,1320,0L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
      </path>
      <foreignobject class="node" x="1000" y="42" width="350" height="600">
      <div class="show mobile-text contact-table no-show" >
        <div class="d-flex flex-column">
        <img src="{{ url('../images/phone.png') }}" style="height:1.5em; margin:10px; float:left;">
        <img src="{{ url('../images/mailcon.png') }}" style="height:1.3em; margin:10px; float:left;">
        <img src="{{ url('../images/address.png') }}" style="height:1.6em; margin:10px; float:left;">
        </div>
          <ul class="" style="text-align:center;">
            <li style="margin:10px;">
              (404)-941-5509
            </li>
            <li style="margin:10px;">
              HQ.SWABCREDIT@GMAIL.COM
            </li>
            <li style="margin:10px;">
              1049 Powers
              Ferry Rd.<br>Marietta, GA 30067
            </li>
          </ul>
        </div>
      </foreignobject>
    </g>
    <path fill="url('#myGradient2')" fill-opacity="1"
      d="M0,64L80,74.7C160,85,320,107,480,144C640,181,800,235,960,261.3C1120,288,1280,288,1360,288L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
    </path>
  </svg>
</header>
<div class="w-100 min-h-full" style="background-color:#DAA520;">
  <h2 class="font-jumbo text-center font-title font-weight-bold" style="width:100%;">
    Services
  </h2>
  <div class="container h-75 min-h-fit">
    <div id="carouselExampleIndicators" class="carousel slide h-100 min-h-fit car-indicators-padding carbox" data-ride="carousel">
      <ol class="carousel-indicators p-5">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner shadow" style="height:100%;">
        <div class="carousel-item h-100 border shadow rounded active"
          style="background: linear-gradient(#3D0C01, #7C0A01);">
          <div class="container d-block w-100  text-center cwhite" alt="First slide">
            <h1>Service 1</h1>
            <h2 class="text-base mobile-text-big">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut perspiciatis ipsa soluta autem hic, minus
              consequatur vero quia nulla sunt earum illo eos accusantium dignissimos! Dolore ad vitae optio deserunt.
        </h2>
          </div>
        </div>

        <div class="carousel-item h-100 border shadow rounded bg-hue-dark">
          <div class="container d-block w-100 text-center cwhite" alt="Second slide">
            <h1>Service 2 </h1>
            <h2 class="text-base mobile-text-big"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut perspiciatis ipsa soluta autem hic, minus
              consequatur vero quia nulla sunt earum illo eos accusantium dignissimos! Dolore ad vitae optio deserunt.
        </h2>
          </div>
        </div>
        <div class="carousel-item h-100 border shadow rounded" style="background: linear-gradient(#3D0C01, #7C0A01);">
          <div class="container d-block w-100 text-center cwhite" alt="Third slide">
            <h1>Service 3</h1>
            <h2 class="text-base mobile-text-big">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut perspiciatis ipsa soluta autem hic, minus
              consequatur vero quia nulla sunt earum illo eos accusantium dignissimos! Dolore ad vitae optio deserunt.
        </h2>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<section class="pb-3" id="pricing" style="background:linear-gradient(to bottom, #3D0C01 5%, #7C0A01 50% 100% ); width:100%; height:100%;">
  <svg class="svg3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <defs>
      <linearGradient id="picGradient" gradientTransform="rotate(90)">
        <stop offset="5%" stop-color="#DAA520" />
        <stop offset="95%" stop-color="#CC9901" />
      </linearGradient>
    </defs>

    <path fill="url('#picGradient')" fill-opacity="1"
      d="M0,96L120,90.7C240,85,480,75,720,112C960,149,1200,235,1320,277.3L1440,320L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
    </path>
  </svg>
  <div class="container d-flex flex-column  h-75 p-20">
    <div class="align-self-start">
      <h1 class="w-100 cwhite font-jumbo text-center font-title font-weight-bold">Why Swab?</h1>
      <h2 class=" py-5 w-100 text-center text-base cwhite ">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel natus aliquid repudiandae dolorum, obcaecati iste
        aliquam. Non nam, rem id architecto commodi harum reiciendis, qui repellendus optio, ipsa ab alias.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officia doloremque optio veniam. Nihil
        fuga eveniet alias laborum illo quia, nostrum doloremque dolorum rem deleniti dolorem qui ea voluptas incidunt?
        <br>
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nesciunt maxime ullam, veniam dignissimos quas
        voluptatum temporibus accusamus quisquam, eius amet laborum modi reprehenderit sed.
        Quo alias ipsam minima eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores cum blanditiis
        ipsum, dolorum quod ducimus consequatur doloribus sunt necessitatibus at perferendis! Totam a ex exercitationem
        nesciunt dolorem, cum minima impedit.
        </h2>
    </div> 

  </div>

  </div>

</section>

<div class="bg-hue-dark" style="height:100%;">
  <svg class="svg3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <defs>
        <linearGradient id="picGradient4" gradientTransform="rotate(90)">
          <stop offset="5%" stop-color="#7C0A01" />
          <stop offset="95%" stop-color="#3D0C01" />
        </linearGradient>
    </defs>
    <path fill="url('#picGradient4')" fill-opacity="1"
      d="M0,160L60,154.7C120,149,240,139,360,133.3C480,128,600,128,720,144C840,160,960,192,1080,176C1200,160,1320,96,1380,64L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
    </path>
  </svg>
  <div class="container h-50 d-flex flex-column">
  <h2 class="font-jumbo text-center font-title font-weight-bold cwhite align-self-start" style="width:100%;">
    Contact Us
  </h2>
  <div class="show mobile-text contact-table" >
        <div class="d-flex flex-column">
        <img src="{{ url('../images/phone.png') }}" style="height:1.5em; margin:10px; float:left;">
        <img src="{{ url('../images/mailcon.png') }}" style="height:1.3em; margin:10px; float:left;">
        <img src="{{ url('../images/address.png') }}" style="height:1.6em; margin:10px; float:left;">
        </div>
          <ul class="" style="text-align:center;">
            <li style="margin:10px;">
              (404)-941-5509
            </li>
            <li style="margin:10px;">
              HQ.SWABCREDIT@GMAIL.COM
            </li>
            <li style="margin:10px;">
              1049 Powers
              Ferry Rd.<br>Marietta, GA 30067
            </li>
          </ul>
        </div>
  <style>

    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
      font-size: 16px;
    }


    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }

    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

    .contactrow:after {
      content: "";
      display: table;
      clear: both;
    }
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0 !important;
      }
    }
    @media screen and (max-width: 600px) {
      input[type=submit] {
        font-size:16px;
      }
    }
    </style>
  <form class="p-5 cwhite" action="">
  <div class="contactrow">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="First Name">
    </div>
  </div>
  <div class="contactrow">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Last Name">
    </div>
  </div>
  <div class="contactrow">
    <div class="col-25">
      <label for="serviceType">Select a Service</label>
    </div>
    <div class="col-75">
          <select id="serviceType" name="serviceType">
            <option value="credit_restoration">Credit Restoration</option>
            <option value="rental_repair">Rental Repair</option>
            <option value="cpn_rofile">CPN Profile</option>
            <option value="other">Other</option>
          </select>
    </div>
  </div>
  <div class="contactrow">
    <div class="col-25">
      <label for="message">Message</label>
    </div>
    <div class="col-75">
      <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="contactrow d-flex justify-content-center">
    <input class="btn-warning btn" type="submit" value="Submit">
  </div>
  </form>

    </div>
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