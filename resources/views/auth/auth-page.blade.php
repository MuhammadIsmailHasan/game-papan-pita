<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Papan Pita Perkalian</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="{{ asset('auth/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
    </head>
    <body>

        <div class="main">
            @yield('content')
        </div>

        <!-- JS -->
        <script src="{{ asset('auth/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('auth/js/main.js') }}"></script>
        <!-- Sweet Alert -->
        <script src="{{ asset('frontend/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>
        
        @if (Session::has('success'))
            <script type="text/javascript">
                Swal.fire(
                    'Berhasil',
                    '{{ Session::get('success') }}',
                    'success'
                    )
            </script>
        @endif
        @if (Session::has('error'))
            <script type="text/javascript">
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: '{{ Html::ul($errors->all()) }}',
                    })
            </script>
        @endif
    </body>
</html>