<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ url('../images/favicon.ico') }}">

        <title>SwabCredit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/plugins/animatecss/css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/underexpress/css/test.css') }}">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style-4 font-title py-3">
              <div class="container">
                <a class="navbar-brand-custom" href="#"><img src="{{ url('../images/logo.png') }}" width="30px" class="mr-2" style="vertical-align: bottom;">
                    <span class="navbar-logo-text" style="vertical-align: bottom;"><b>wab</b>Credit</a></span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent4">
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach($services as $s)
                        <a class="dropdown-item" href="{!! route('guest.services', $s->path) !!}">{{ $s->name }}</a>
                        @endforeach

                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Make a Payment</a>
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

                    <header class="header-style-1 py-5" style="width: 100%; margin-top: 0; ">

                        <div class="overlay op-3"></div>
                        <div class="container">
                          <div class="content p-relative z-1">
                            <h1 class="font-title p-3 text-center my-4 cwhite font-jumbo"><b><span><img src="{{ url('../images/logo.png') }}" style="position:relative; width: 60px; top: -.5rem;"></span>wabCredit</b></h1>
                            <p class="paragraph cwhite p-2 text-center col-12 col-sm-6 mx-auto" style="font-size: 1.5rem;">Trust Where You're Going Trust <span> <img src="{{ url('../images/logo.png') }}" style="width: 30px; position: relative; top: -.5rem;"></span>wab</p>
                            <div class="col-12 text-center mt-5">
                                <a href="{{ route('register') }}" class="btn btn-warning  m-2">Get Started<i class="fa fa-chevron-right ml-3"></i></a>
                                <a href="" class="btn btn-outline-warning  m-2">Know More<i class="fa fa-chevron-down ml-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </header>

                        <section class="feature-style-4 bg-dark cwhite" style="padding: 5em 0 5em 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-12 p-4">
                    <div class="text-center">
                        <i class="font-jumbo fa fa-code"></i>
                        <h4 class="font-title py-3">Credit Restoration</h4>
                        <p class="py-2">UnderExpress uses modular css classes, which helps you ship quickly with cleaner code.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-4">
                    <div class="text-center">
                        <i class="font-jumbo fa fa-cubes"></i>
                        <h4 class="font-title py-3">Modular</h4>
                        <p class="py-2">UnderExpress uses modular css classes, which helps you ship quickly with cleaner code.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-4">
                    <div class="text-center">
                        <i class="font-jumbo fa fa-money"></i>
                        <h4 class="font-title py-3">Affordable</h4>
                        <p class="py-2">UnderExpress comes absolutely free, which makes it most the affodable website framework.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="pricing-style-2 bg-white p-3" id="pricing">
      <div class="container">
      <div class="row">
      <div class="col-10 col-md-8 col-lg-4 py-2 mx-auto">
        <div class="card font-title text-center">
          <div class="card-header bg-light">
          <h5>Basic</h5>

        </div>
        <div class="card-body text-center">
          <h1 class="p-2">Free</h1>
          <p class="p-2">forever</p>
          <ul class="p-0">
            <li class="p-2">Responsive </li>
            <li class="p-2">Complete documentation </li>
            <li class="p-2">Email Notifications </li>
            <li class="p-2 text-muted"><del>SMS Notifications</del> </li>
            <li class="p-2 text-muted"><del>Unlimited Storage</del>  </li>
            <li class="p-2 text-muted"><del>Access to Library</del> </li>
            <li class="p-2 text-muted"><del>Priority Support</del> </li>

          </ul>
        </div>
        <div class="card-footer bg-dark p-3 text-center "><a href="#"><i class="fa fa-shopping-cart cwhite"></i></a></div>
        </div>
      </div>
      <div class="col-10 col-md-8 col-lg-4 py-2 mx-auto">
        <div class="card font-title text-center">
          <div class="card-header bg-light">
          <h5>Premium</h5>

        </div>
        <div class="card-body text-center">
          <h1 class="p-2">$ 50</h1>
          <p class="p-2">Per Month</p>
          <ul class="p-0">
            <li class="p-2">Responsive </li>
            <li class="p-2">Complete documentation </li>
            <li class="p-2">Email Notifications </li>
            <li class="p-2">SMS Notifications </li>
            <li class="p-2">Unlimited Storage  </li>
            <li class="p-2 text-muted"><del> Access to Library</del> </li>
            <li class="p-2 text-muted"><del>Priority Support</del> </li>

          </ul>
        </div>
        <div class="card-footer bg-dark p-3 text-center "><a href="#"><i class="fa fa-shopping-cart cwhite"></i></a></div>
        </div>
      </div>
      <div class="col-10 col-md-8 col-lg-4 py-2 mx-auto">
        <div class="card font-title text-center">
          <div class="card-header bg-light">
          <h5>Pro</h5>

        </div>
        <div class="card-body text-center">
          <h1 class="p-2">$ 100</h1>
          <p class="p-2">Per Month</p>
          <ul class="p-0">
            <li class="p-2">Responsive </li>
            <li class="p-2">Complete documentation </li>
            <li class="p-2">Email Notifications </li>
            <li class="p-2">SMS Notifications </li>
            <li class="p-2">Unlimited Storage  </li>
            <li class="p-2">Access to Library </li>
            <li class="p-2">Priority Support </li>
          </ul>
        </div>
        <div class="card-footer bg-dark p-3 text-center "><a href="#" ><i class="fa fa-shopping-cart cwhite"></i></a></div>
        </div>

      </div>
    </div>
    </div>
  </section>

    <section class="background-cover p-5 form-style-3 p-relative" style="background-image: '';">

    <div class="overlay bg-dark op-4"></div>
    <div class="container">
    <div class="content p-relative">
      <h2 class="font-title mb-4 cwhite text-center">Subscribe Here!</h2>
      <div class="row">

        <div class="col-12 col-md-3">
          <label>Name</label>
          <input type="text" class="form-control form-control-lg bg-transparent mb-3" >
        </div>
        <div class="col-12 col-md-4">
          <label>Email</label>
          <input type="email" class="form-control form-control-lg  bg-transparent mb-3"  >
        </div>
        <div class="col-12 col-md-4">
          <label>Contact Number</label>
          <input type="text" class="form-control form-control-lg  bg-transparent mb-3"  >
        </div>

      </div>
      <div class="row">
        <div class="col-10 col-md-4 mx-auto text-center">
          <button type="submit" class="btn btn-rounded btn-primary btn-lg mx-auto px-5 material-shadow mt-3">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
</section>


  <footer class="footer-style-5 p-3 bg-hue-dark cwhite">
    <div class="row">
      <div class="col-12 col-lg-3 my-1 text-left py-2">
        <img src="{{ url('../images/logo.png') }}" width="30px" class="mr-2"><span class="font-title h5" style="position: relative; left: -.3em; top:.25em;"><b>wab</b>Credit</span><br>
        <small class="lighter mb-3 op-7">&copy 2017 SwabCredit</small>

      </div>
      <div class="col-12 col-lg-6 py-2 text-center">
        <ul class="p-0 font-title">
          <li class="inline"><a href="#" class="uppercase m-2 inline">About</a></li>
          <li class="inline"><a href="#" class="uppercase m-2 inline">Contact</a></li>
          <li class="inline"><a href="#" class="uppercase m-2 inline">Support</a></li>
          <li class="inline"><a href="{{ route('terms.show') }}" class="uppercase m-2 inline">Terms of Service</a></li>
        </ul>
      </div>
      <div class="col-12 col-lg-3 my-1 text-right">
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


        <script src="{{ url('/underexpress/plugins/jquery/jquery-3.2.0.min.js') }}"></script>
        <script src="{{ url('/underexpress/plugins/popper/popper.js') }}"></script>
        <script src="{{ url('/underexpress/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/underexpress/js/script.js') }}"></script>
    </body>
</html>
