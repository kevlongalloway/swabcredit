<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

        <title>SwabCreditt</title>

        <link rel="icon" type="image/x-icon" href="{{ url('../images/favicon.ico') }}">
        @stack('styles') 

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class=" font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @stack('scripts')
        @livewireScripts
    </body>
</html>
