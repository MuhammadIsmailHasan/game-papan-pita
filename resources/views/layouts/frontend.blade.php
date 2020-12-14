<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Papan Pita Perkalian</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('frontend/css/freelancer.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('frontend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    {{-- <link href="frontend/https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"> --}}
    
    <!-- DataTables -->
    <link href="{{ asset('frontend/vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/vendor/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/vendor/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Tour css -->
    <link href="{{ asset('plugins/hopscotch/css/hopscotch.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/app-modal.css') }}" rel="stylesheet">

    @yield('css')

</head>

<body id="page-top" class="index">

    @include('layouts.format-tgl')

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">PAPAN PITA PERKALIAN</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="{{ route('home') }}">HALAMAN UTAMA</a>
                    </li>

                    <li class="page-scroll">
                        <a href={{ route('tujuan.index') }}>KD, IPK DAN TUJUAN</a>
                    </li>
                        
                    @can('daftar_nilai_read')
                        <li class="page-scroll">
                            <a href="{{ route('nilai.index') }}">DAFTAR NILAI</a>
                        </li>
                    @endcan

                    @can('daftar_siswa_read')
                        <li class="page-scroll">
                            <a href="{{ route('siswa.index') }}">DAFTAR SISWA</a>
                        </li>
                    @endcan

                    @can('nilai_tertinggi_read')
                        <li class="page-scroll">
                            <a href={{ route('nilai-tertinggi.index') }}>NILAI TERTINGGI</a>
                        </li>
                    @endcan

                    @can('profil_read')
                        <li class="page-scroll">
                            <a href={{ route('profil.index') }}>PROFIL {{ Auth::user()->name }}</a>
                        </li>
                    @endcan

                    <li class="page-scroll">
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            KELUAR
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <h3>Contact Person</h3>
                        <p><b>WhatsApp</b><br>085868778571</p>
                    </div>
                    <div class="footer-col col-md-6">
                        <h3>Tentang Papan Pita Perkalian</h3>
                        <p>
                            Media pembelajaran untuk mata pelajaran matematika kelas 3 sekolah dasar khususnya 
                            materi perkalian dua bilangan cacah dengan hasil kali hingga 6 digit bilangan atau 
                            perkalian bilangan 1 hingga 999. <br>
                            Berhitung perkalian pada media papan pita perkalian
                            ini menggunakan teknik persekutuan yang berfokus pada titik pertemuan garis vertikal 
                            dan horizontal dengan menjumlahkan banyak titik pertemuan tersebut 
                            untuk mendapatkan hasil kali dari perkalian dua bilangan cacah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy;  <a href="http://www.fortinity.net" target="_blank">Fortinity</a> 2020
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
	<script src="{{ asset('frontend/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
	
	<!-- Sweet Alert -->
	<script src="{{ asset('frontend/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('frontend/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('frontend/js/contact_me.js') }}"></script>

    <!-- Datatables-->
    <script src="{{ asset('frontend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/vendor/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/datatables/responsive.bootstrap.min.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('frontend/js/freelancer.min.js') }}"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/custom-app.js') }}"></script>

    <script src="{{ asset('plugins/hopscotch/js/hopscotch.min.js') }}"></script>

    <script>
        $('#logout').click(function (e) { 
            e.preventDefault();
            const href = $(this).attr('href');
            document.location.href = href;
        });
    </script>

    @yield('js')
   
</body>

</html>