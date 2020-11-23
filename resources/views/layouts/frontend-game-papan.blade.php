<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Papan Pita Perkalian</title>

        <link href="{{ asset('css/games.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('frontend/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('frontend/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>
        
        @yield('js')
</body>