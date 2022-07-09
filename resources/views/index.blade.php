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
                            <h1><b>Papan Pita Perkalian</b></h1>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="portfolio">
        <div class="container" id="petunjuk-container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Petunjuk Penggunaan <br>Media Pembelajaran Papan Pita Perkalian</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body" id="petunjuk-card">
                        <img src="{{ asset('img/materi/1.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="1"
                            style="width: 700px; margin: 0 auto;">
                        <img src="{{ asset('img/materi/2.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="2"
                            style="width: 700px; margin: 0 auto; margin-top: 5px;">
                        <img src="{{ asset('img/materi/3.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="3"
                            style="width: 700px; margin: 0 auto; margin-top: 5px;">
                        <img src="{{ asset('img/materi/4.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="4"
                            style="width: 700px; margin: 0 auto; margin-top: 5px;">
                        <img src="{{ asset('img/materi/5.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="5"
                            style="width: 700px; margin: 0 auto; margin-top: 5px;">
                        <img src="{{ asset('img/materi/6.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="6"
                            style="width: 700px; margin: 0 auto; margin-top: 5px;">
                        <img src="{{ asset('img/materi/7.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="7"
                            style="width: 700px; margin: 0 auto; margin-top: 5px;">
                        <img src="{{ asset('img/materi/8.png') }}" alt="petunjuk"
                            class="img-responsive img-bordered img-petunjuk" data-number="8"
                            style="width: 700px; margin: 0 auto; margin-top: 5px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>MATERI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item" id="portofolio-card">
                    <a href="{{ route('materi.index', 1) }}" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>Perkalian</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/perkalian.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('materi.index', 2) }}" id="materi_kedua" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>Papan Pita Perkalian</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/papan.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>QUIZ</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('permainan.index', 1) }}" class="portfolio-link" id="level_pertama">
                        <div class="caption portfolio-link">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                                <h3>LEVEL 1</h3>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/img/portfolio/quiz.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-6 portfolio-item">
                    <a href="{{ route('permainan.index', 2) }}" class="portfolio-link" id="level_kedua">
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

    <div>
        <div id="floating-scroll">
        </div>
        <div class="floating-siswa floating-left">
            <span id="siswa-close" class="close">&times;</span>
            <img src="{{ asset('img/siswa.png') }}" id="siswa-icon" alt="siswa" class="img-responsive img-icon"
                style="width: 100px">
        </div>
    </div>

    <!-- The Modal -->
    <div id="modal_petunjuk" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 style="margin: 10px;">Penjelasan Petunjuk</h2>
            <hr>
            <div class="modal-petunjuk">
                {{-- gambar dinamis --}}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            // MODAL //
            $('.img-petunjuk').click(function(e) {
                let dataNumber = $(this).data('number');
                $('.modal-petunjuk').html(`
                    <img src="{{ asset('img/petunjuk/${dataNumber}.png') }}" alt="Penjelasan petunjuk" 
                    class="img-responsive img-bordered"
                    style="width: 800px; margin: 0 auto;">
                `);
                $('#modal_petunjuk').css('display', 'block');
            });

            $('#siswa-close').click(function(e) {
                let siswaSection = $(this).parent();
                $(siswaSection).css('display', 'none');
            });

            $('.close').click(function(e) {
                $('#modal_petunjuk').css('display', 'none');
            });

            $('#materi_kedua').click(function(e) {
                e.preventDefault();
                const href = $(this).attr('href');

                if ("{{ Auth()->user()->status_materi_1 }}" == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GAGAL MEMULAI <br>MATERI PAPAN PITA',
                        text: 'Silahkan membaca dan selesaikan materi perkalian dahulu!',
                    });
                } else {
                    document.location.href = href;
                }
            });

            $('#level_pertama').click(function(e) {
                e.preventDefault();
                const href = $(this).attr('href');

                if ("{{ Auth()->user()->status_materi_2 }}" == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GAGAL MEMULAI <br>QUIZ LEVEL 1',
                        text: 'Silahkan membaca dan selesaikan materi papan pita perkalian dahulu!',
                    });
                } else {
                    document.location.href = href;
                }
            });

            $('#level_kedua').click(function(e) {
                e.preventDefault();
                const href = $(this).attr('href');

                if ("{{ Auth()->user()->status_level_1 }}" == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'GAGAL MEMULAI <br>QUIZ LEVEL 2',
                        text: 'Silahkan Selesaikan Quiz Level 1 Terlebih Dahulu',
                    });
                } else {
                    document.location.href = href;
                }
            });

            const nama = "{{ Auth::user()->name }}";
            var placementRight = 'right';
            var placementLeft = 'left';
            var placementButtom = 'bottom';
            var placementTop = 'top';

            // Define the tour!
            var tour = {
                id: "intro-tour",
                steps: [{
                        target: `siswa-icon`,
                        title: `Halo ${nama}, Selamat datang di Media Pembelajaran Papan Pita Perkalian.`,
                        placement: placementRight,
                    },
                    {
                        target: 'siswa-icon',
                        title: `Mari belajar perkalian bersama.`,
                        placement: placementRight,
                        yOffset: 80
                    },
                    {
                        target: `floating-scroll`,
                        content: `Tarik scroll ke bawah ya ...`,
                        placement: placementLeft,
                        yOffset: -20,
                        xOffset: 20
                    },
                    {
                        target: `petunjuk-container`,
                        content: `Sebelum menggunakan media, ${nama} membaca petunjuk penggunaan 
                                    media pembelajaran papan pita perkalian dulu ya...`,
                        placement: placementTop,
                        xOffset: 400
                    },
                    {
                        target: `petunjuk-container`,
                        content: `Mari membaca petunjuk penggunaan media di bawah ini agar kalian lebih mudah dalam menggunakannya!`,
                        placement: placementTop,
                        xOffset: 100
                    },
                    {
                        target: `petunjuk-card`,
                        content: `Klik gambar-gambar ini untuk mengetahui langkah secara jelas.`,
                        placement: placementTop,
                        xOffset: 800
                    },
                    {
                        target: `petunjuk-card`,
                        content: `Sekarang, ${nama} mulai lakukan langkah-langkah tersebut satu persatu.`,
                        placement: placementLeft,
                        xOffset: 250
                    },
                    {
                        target: `portofolio-card`,
                        content: `Ingat! pertama klik menu materi perkalian.`,
                        placement: placementTop,
                        xOffset: 100,
                    },
                ],
                showPrevButton: true
            };

            // Start the tour!
            hopscotch.startTour(tour);
        });
    </script>
@endsection
