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
  <link rel="stylesheet" type="text/css" href="{{ url('/css/landing/styles.css') }}">
  @stack('styles') 
  @livewireStyles
</head>

<div>
  {{ $slot }}  
</div>



<x-footer />

</div>
</div>
</div>
@stack('scripts')
@livewireScripts
<script src="{{ url('/underexpress/plugins/jquery/jquery-3.2.0.min.js') }}"></script>
<script src="{{ url('/underexpress/plugins/popper/popper.js') }}"></script>
<script src="{{ url('/underexpress/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/underexpress/js/script.js') }}"></script>
</body>

</html>