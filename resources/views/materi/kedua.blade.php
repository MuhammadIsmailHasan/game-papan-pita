@extends('layouts.frontend')

@section('content')
    <section id="materi-2" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>Perkenalan Media Pembelajaran<br>Papan Pita Perkalian</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-header">Deskripsi media</h4>
                        <ul class="card-text" style="font-size: 20px;">
                            <li>
                                Media pembelajaran papan pita perkalian adalah suatu media yang dirancang untuk digunakan dalam pembelajaran khususnya 
                                <br>mata pelajaran matematika kelas 3 sekolah dasar pada materi perkalian dua bilangan cacah dengan hasil kali hingga 6 digit bilangan atau perkalian bilangan 1 hingga 999.</b>
                            </li>
                            <li>
                                Dengan media pembelajaran diharapkan dapat 
                                <b>meningkatkan pemahaman siswa tentang perkalian, memudahkan berhitung perkalian tanpa harus menghafal perkalian dasar, meningkatkan kemampuan berhitung perkalian, meningkatkan minat belajar matematika, dan dapat memenuhi kebutuhan siswa sehingga mampu mencapai tujuan-tujuan pembelajaran yang telah ditentukan.</b>
                            </li>
                            <li>
                                Berhitung perkalian pada media papan pita perkalian atau PaPi “x” menggunakan teknik persekutuan yakni 
                                <b>berfokus pada titik pertemuan garis vertikal dan garis horizontal dengan menjumlahkan banyak titik pertemuan tersebut</b> 
                                untuk mendapatkan hasil kali dari perkalian dua bilangan cacah.
                            </li>
                        </ul>
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
                        <h4 class="card-title">Bagian-bagian Media</h4>
                        <img src="{{ asset('img/materi/2-1.jpg') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="materi-2" style="padding: 30px;">
        <div class="container">
            <div class="row">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-header">Berhitung Perkalian dengan Media Pembelajaran Papan Pita Perkalian (PaPi “x”)</h4>
                        <p class="card-text" style="font-size: 23;">Tutorial penggunaan media</p>
                        <ol class="card-text" style="font-size: 20px;">
                            <li>Baca dan pahami tujuan pembelajaran dari pembelajaran matematika perkalian yang menggunakan media PaPi “x” pada menu tujuan pembelajaran.</li>
                            <li>Baca dan pahami konsep-konsep perkalian pada menu materi perkalian untuk memudahkan kita dalam meningkatkan kemampuan berhitung perkalian.</li>
                            <li>Buka menu perkenalan media pembelajaran PaPi “x” untuk memahami bagian-bagian media.</li>
                            <li>
                                Mulai lakukan praktik berhitung perkalian dengan menggunakan media pembelajaran PaPi “x”.
                                <ol class="card-text" type="a">
                                    <li>
                                        Ketahui nilai tempat dari bilangan-bilangan faktor perkalian. Misalkan 12 x 43 = ... <br>
                                        12 terdiri dari 1 puluhan dan 2 satuan sedangkan 43 terdiri dari 4 puluhan dan 3 satuan.
                                    </li>
                                    <li>
                                        Ambil PiRi dan PiDur pada kotak keterangan dan letakkan di papan hitung media PaPi “x” dengan jumlah PiRi dan PiDur sesuai bilangan faktor perkaliannya. Misalkan 12 x 43 = ... <br/>
                                        Diketahui bahwa 12 terdiri dari 1 puluhan dan 2 satuan berarti terdapat 1 buah PiRi di kolom puluhan dan 2 buah PiRi di kolom satuan. Sedangkan untuk 43 terdiri dari 4 puluhan dan 3 satuan berarti terdapat 4 buah PiDur di baris puluhan dan 3 buah PiDur di baris satuan.
                                        <br><i>NB : jika bilangan 0 maka tidak perlu meletakkan pita di papan hitung karena 0 berarti tidak ada.</i>
                                    </li>
                                    <li>Muncul titik temu setelah PiRi dan PiDur bertumpukan.</li>
                                    <li>Klik tombol titik temu tersebut, maka muncul bilangan di kolom bawah pada setiap PiRi.</li>
                                    <li>Jika sudah mengklik semua titik temu di kotak tersebut, selanjutnya klik tombol centang disamping kolom bawah maka muncul hasil penjumlahan seluruh nilai titik temu yang ada di kotak tersebut. Bilangan tersebut juga muncul di kotak hasil akhir.</li>
                                    <li>Lakukan pada semua kotak yang ada di papan hitung media PaPi “x”.</li>
                                    <li>Jumlahkan bilangan-bilangan yang ada di kotak hasil akhir lalu ketikkan jawabannya di bawahnya.</li>
                                    <li>Klik tombol selesai untuk mengetahui benar salah jawabannya. Jika benar diberi tanda centang, jika salah diberi tanda silang. Apabila salah, dapat mengulangi jawaban di kotak hasil akhir.</li>
                                </ol>
                            </li>
                        </ol>
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
                        <h4 class="card-title">Contoh Bentuk Perkalian 1-10 Menggunakan PaPi “x”</h4>
                        <img src="{{ asset('img/materi/2-2.jpg') }}" alt="diagram 1" class="img-responsive img-bordered">
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
                        <h4 class="card-title">Contoh Bentuk Perkalian 11-100 Menggunakan PaPi “x”</h4>
                        <img src="{{ asset('img/materi/2-3.jpg') }}" alt="diagram 1" class="img-responsive img-bordered">
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
                        <h4 class="card-title">Contoh Bentuk Perkalian 101-999 Menggunakan PaPi “x”</h4>
                        <img src="{{ asset('img/materi/2-4.jpg') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="materi-2" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quiz Media PaPi “x”</h4>
                        <img src="{{ asset('img/materi/2-5.jpg') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
                
                <hr>

                @can('materi_update')
                    <div style="margin: 10px;">
                        <button type="button" id="btn_selesai" class="btn btn-success btn-lg btn-block" style="height: 80px;">
                            SELESAI BACA MATERI
                        </button>
                    </div>
                @endcan
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btn_selesai').click(function (e) { 
                let userId = '{{ Auth::user()->id }}';
                let url = "{{ route('user-api.update', 'replaceThis') }}";
                
                $.ajax({
                    type: "POST",
                    url: url.replace('replaceThis', userId),
                    data: {
                        "status_materi_2" : 1
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            Swal.fire({
                                title: 'LANJUTKAN KE QUIZ ?',
                                text: "Tekan Yes untuk Lanjut ke QUIZ LEVEL 1",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes',
                                cancelButtonText: 'No'
                            }).then((result) => {
                                if (result.value) {
                                    document.location.href = "{{ route('permainan.index', 1) }}"
                                } else {
                                    document.location.href = "{{ route('home') }}"; 
                                }
                            });
                        } else {
                            alert("GAGAL MELANJUTKAN KE QUIZ");
                        }
                    }
                });
            });
        });
    </script>
@endsection