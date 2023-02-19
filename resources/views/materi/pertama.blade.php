@extends('layouts.frontend')

@section('content')
    <section style="padding: 120px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 30px;">
                    <h2>MATERI PERKALIAN</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <ul class="card-text" style="font-size: 20px;">
                            <b>Aku memiliki 2 keranjang berisi 4 buah jeruk pada setiap keranjangnya.</b>
                            <img src="{{ asset('img/materi/update1/perkalian1.png') }}" alt="diagram 1"
                                class="img-responsive img-bordered" style="width: 800px">
                            <b>Buah jeruk milikku seluruhnya ada 8 buah.</b>
                            <img src="{{ asset('img/materi/update1/perkalian2.png') }}" alt="diagram 1"
                                class="img-responsive img-bordered" style="width: 800px">

                            <h3>KONSEP PERKALIAN</h3>
                            <img src="{{ asset('img/materi/3-1.png') }}" alt="diagram 1"
                                class="img-responsive img-bordered" style="width: 120px">
                            <li>Perkalian disebut juga sebagai <b>penjumlahan berulang</b> yakni menjumlahkan bilangan “b”
                                yang berulang sebanyak “a” kali.</li>
                            <li>Bilangan pengali maupun bilangan yang dikali pada perkalian disebut <b>faktor perkalian.</b>
                            </li>
                            <li>Hasil yang diperoleh dari proses perhitungan perkalian disebut <b>hasil kali.</b></li>
                            
                            <li>Sifat operasi hitung yang berlaku pada perkalian yakni :</li>
                            <img src="{{ asset('img/materi/update1/perkalian3.png') }}" alt="diagram 1"
                                class="img-responsive img-bordered" style="width: 800px">
                            <li>Sifat-sifat khusus perkalian :</li>
                            <img src="{{ asset('img/materi/update1/perkalian4.png') }}" alt="diagram 1"
                                class="img-responsive img-bordered" style="width: 780px">
                            <li>Contoh permasalahan sehari-hari yang melibatkan perkalian adalah sebagai berikut :</li>
                            <img src="{{ asset('img/materi/update1/perkalian5.png') }}" alt="diagram 1"
                                class="img-responsive img-bordered" style="width: 780px">
                        </ul>
                        <div id="floating-x" style="float: right;">
                        </div>
                    </div>
                </div>

                <hr>

                @can('materi_update')
                    <div style="margin: 10px;">
                        <button type="button" id="btn_selesai" class="btn btn-success btn-lg btn-block" style="height: 80px;">
                            SELESAI MEMBACA MATERI
                        </button>
                    </div>
                @endcan
            </div>
        </div>
    </section>

    <div class="floating-siswa floating-right">
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
                        title: `Ayo membaca materi dibawah ini agar kita lebih memahami konsep perkalian.`,
                        placement: placementLeft,
                    },
                    {
                        target: `floating-x`,
                        content: `${nama} dapat membaca kembali materi perkalian jika masih ada konsep perkalian yang belum paham.`,
                        placement: placementLeft,
                        yOffset: -100,
                        xOffset: -50
                    },
                    {
                        target: `btn_selesai`,
                        content: `Jika sudah paham, ${nama} langsung klik tombol "selesai membaca materi" untuk melanjutkan langkah berikutnya.`,
                        placement: placementButtom,
                        xOffset: 400
                    },
                ],
                showPrevButton: true
            };

            // Start the tour!
            hopscotch.startTour(tour);

            $('#btn_selesai').click(function(e) {
                let userId = '{{ Auth::user()->id }}';
                let url = "{{ route('user-api.update', 'replaceThis') }}";

                $.ajax({
                    type: "POST",
                    url: url.replace('replaceThis', userId),
                    data: {
                        "status_materi_1": 1
                    },
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status) {
                            Swal.fire({
                                title: `${nama}, BAGUS.`,
                                text: "Sekarang lanjutkan ke menu papan pita perkalian.",
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Oke'
                            }).then((result) => {
                                document.location.href = "{{ route('home') }}";
                            });
                        } else {
                            alert("GAGAL MELANJUTKAN KE MATERI PAPAN PITA");
                        }
                    }
                });
            });
        });
    </script>
@endsection
