@extends('layouts.frontend')

@section('content')
    <section id="materi-2" style="padding: 120px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 40px;">
                    <h2>Perkenalan Media Pembelajaran<br>Papan Pita Perkalian</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bagian-bagian Media</h4>
                        <img src="{{ asset('img/materi/update1/perkenalan.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-header">Deskripsi media</h4>
                        <ul class="card-text" style="font-size: 20px;">
                            <li>
                                Media pembelajaran papan pita perkalian dirancang untuk digunakan dalam kegiatan
                                pembelajaran
                                <b>matematika kelas 3 SD materi perkalian dua bilangan cacah dengan hasil kali hingga 6
                                    digit bilangan atau perkalian bilangan 1 hingga 999.</b>
                            </li>
                            <li>
                                Berhitung perkalian pada media papan pita perkalian menggunakan teknik persekutuan yakni :
                                <ol class="card-text" style="font-size: 20px;">
                                    <li><b>Membuat Pita Berdiri (PiRi) sebagai garis vertikal dan Pita Tidur (PiDur) sebagai
                                            garis horizontal pada papan pita</b></li>
                                    <li><b>Jumlah Pita Berdiri (PiRi) dan Pita Tidur (PiDur) sesuai faktor perkalian yang
                                            akan dihitung</b></li>
                                    <li>
                                        <b>Menjumlahkan banyak titik perpotongan dari kedua pita tersebut dengan masing-masing
                                            nilai titik potong berdasarkan warna kotak</b>
                                        untuk mendapatkan hasil kali dari perkalian dua bilangan cacah
                                    </li>
                                </ol>
                            </li>
                            <img src="{{ asset('img/materi/4-1.png') }}" alt="diagram 1"
                                class="img-responsive img-bordered" style="width: 500px">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="materi-2" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body" id="petunjuk-section">
                        <h4 class="card-header">Tutorial penggunaan media</h4>
                        <img src="{{ asset('img/materi/update1/tutorial.png') }}" alt="diagram 1" class="img-responsive img-bordered"
                            style="width: 1200px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contoh Bentuk Perkalian 1-10 Menggunakan papan pita perkalian</h4>
                        <img src="{{ asset('img/materi/update1/perkalian1-10.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contoh Bentuk Perkalian 11-100 Menggunakan papan pita perkalian</h4>
                        <img src="{{ asset('img/materi/update1/perkalian11-100.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contoh Bentuk Perkalian 101-999 Menggunakan papan pita perkalian</h4>
                        <img src="{{ asset('img/materi/update1/perkalian101-999.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 30px;">
        <div class="container">
            <div class="row">
                <hr>
                @can('materi_update')
                    <div style="margin: 10px;">
                        <button type="button" id="btn_selesai" class="btn btn-success btn-lg btn-block" style="height: 80px;">
                            LANJUT KE PRAKTIK
                        </button>
                    </div>
                @endcan
            </div>
        </div>
    </section>

    <div id="siswa-section" class="floating-siswa floating-right">
        <span id="siswa-close" class="close">&times;</span>
        <img src="{{ asset('img/siswa.png') }}" id="siswa-icon" alt="siswa" class="img-responsive img-icon"
            style="width: 100px">
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#siswa-close').click(function(e) {
                let siswaSection = $(this).parent();
                $(siswaSection).css('display', 'none');
            });

            $('.close').click(function(e) {
                let siswaSection = $(this).parent();
                $(siswaSection).css('display', 'none');
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
                        title: `Yuk kenali papan pita perkalian lebih dalam dengan membaca materi di bawah ini!`,
                        placement: placementLeft,
                    },
                    {
                        target: `petunjuk-section`,
                        content: `${nama}, baca petunjuk penggunaan papan pita perkalian terlebih dahulu agar dapat menggunakannya dengan lebih mudah.`,
                        placement: placementTop,
                        xOffset: 400
                    },
                    {
                        target: `siswa-icon`,
                        content: `oh iya, petunjuk tersebut juga dapat dilihat di papan pita loh!`,
                        placement: placementLeft,
                    },
                    {
                        target: `btn_selesai`,
                        content: `${nama} dapat kembali membaca materi di atas jika belum paham atau dapat langsung klik tombol “lanjut praktik berhitung” jika sudah paham.`,
                        placement: placementButtom,
                        xOffset: 400
                    },
                ],
                showPrevButton: true
            };
            hopscotch.startTour(tour);

            $('#btn_selesai').click(function(e) {
                Swal.fire({
                    title: `${nama}, BAGUS.`,
                    text: "Sekarang lanjutkan ke praktik berhitung perkalian menggunakan papan pita perkalian.",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oke'
                }).then((result) => {
                    if (result.value) {
                        document.location.href = "{{ route('materi.index', 3) }}"
                    } else {
                        document.location.href = "{{ route('home') }}";
                    }
                });
            });
        });
    </script>
@endsection
