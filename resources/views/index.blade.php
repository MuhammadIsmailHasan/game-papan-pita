@extends('layouts.frontend')

@section('content')

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{ asset('frontend/img/profile.png') }}" alt="">
                    <div class="intro-text">
                        <span class="name">Media Pembelajaran </span>
                        <hr class="star-light">
                        <span class="skills">
                            <h1><b>Papan Pita Perkalian (PaPi "x")</b></h1>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>MATERI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('materi.index') }}" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>Perkalian</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/cabin.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="#" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>Papan Pita Perkalian</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/safe.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>QUIZ</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('permainan.index', 1) }}" class="portfolio-link"  id="ronde_pertama">
                        <div class="caption portfolio-link">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>LEVEL 1</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/game.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('permainan.index', 2) }}" class="portfolio-link" id="ronde_kedua">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>LEVEL 2</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/cake.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#ronde_pertama').click(function (e) { 
                e.preventDefault();
                const href = $(this).attr('href');

                if ("{{ Auth()->user()->status_materi }}" == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GAGAL MEMULAI RONDE 1',
                        text: 'Silahkan Membaca dan Selesaikan Materi Terlebih Dahulu',
                        });
                } else {
                    document.location.href = href;
                }
            });

            $('#ronde_kedua').click(function (e) { 
                e.preventDefault();
                const href = $(this).attr('href');

                if ("{{ Auth()->user()->status_ronde_1 }}" == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GAGAL MEMULAI RONDE 2',
                        text: 'Silahkan Selesaikan Ronde 1 Terlebih Dahulu',
                        });
                } else {
                    document.location.href = href;
                }
            });

            $('#menu_angket').click(function (e) { 
                e.preventDefault();
                const href = $(this).attr('href');

                if ("{{ Auth()->user()->status_ronde_2 }}" == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GAGAL MEMULAI ANGKET RESPON',
                        text: 'Silahkan Selesaikan Ronde 2 Terlebih Dahulu',
                        });
                } else {
                    document.location.href = href;
                }
            });

        });
    </script>
@endsection
