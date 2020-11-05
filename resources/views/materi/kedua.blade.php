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
                                <b>membuat PiRi sebagai garis vertikal dan PiDur sebagai garis horizontal pada papan pita dengan jumlah PiRi dan PiDur sesuai faktor perkalian yang akan dihitung, kemudian menjumlahkan banyak titik pertemuan dari kedua pita tersebut dengan nilai titik temu setiap kotak tidak sama yang bertujuan</b> 
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
                        <h4 class="card-header">Tutorial penggunaan media</h4>
                        <ol class="card-text" style="font-size: 20px;">
                            <li>Baca dan pahami tujuan pembelajaran dari pembelajaran matematika perkalian yang menggunakan media PaPi “x” pada menu tujuan pembelajaran.</li>
                            <li>Baca dan pahami konsep-konsep perkalian pada menu materi perkalian untuk memudahkan kita dalam meningkatkan kemampuan berhitung perkalian.</li>
                            <li>Buka menu papan pita perkalian untuk memahami bagian-bagian media, tutorial penggunaan media, dan latihan berhitung perkalian menggunakan media papan pita perkalian.</li>
                            <li>
                                Mulai lakukan praktik berhitung perkalian dengan menggunakan media pembelajaran PaPi “x”.
                                <ol class="card-text" type="a">
                                    <li>
                                        Ketahui nilai tempat dari bilangan-bilangan faktor perkalian. Misalkan 12 x 43 = ... <br>
                                        <b>12 terdiri dari 1 puluhan dan 2 satuan sedangkan 43 terdiri dari 4 puluhan dan 3 satuan.</b>
                                    </li>
                                    <li>
                                        Tentukan faktor perkalian mana yang menjadi PiDur dan PiRi dengan melihat kolom keterangan yakni a x b = c. <br>
                                        <b>PiDur sebagai a dan PiRi sebagai b</b> sehingga untuk 12 x 43 <b>berarti 12 menjadi PiDur dan 43 menjadi PiRi.</b>
                                    </li>
                                    <li>
                                        Buatlah PiDur dan  PiRi pada papan dengan caranya sebagai berikut : <br>
                                        <b>Klik titik sebelah kiri</b> pada papan untuk <b>membuat PiDur</b> dan klik <b>titik sebelah kanan</b> pada papan untuk <b>menghapus PiDur.</b> <br>
                                        <b>Klik titik sebelah atas</b> pada papan untuk <b>membuat PiRi</b> dan klik <b>klik titik sebelah bawah</b> pada papan untuk <b>menghapus PiRi.</b> <br>
                                        <b>Jumlah pita sesuai nilai tempat bilangan</b> sehingga untuk faktor perkalian <b> 12 x 43 :</b> <br>
                                        <b>12 sebagai PiDur</b> terdiri dari <b>1 puluhan dan 2 satuan</b> maka kalian harus <b>klik 1 titik sebelah kiri pada baris puluhan</b> dan <b>klik 2 titik sebelah kiri pada baris satuan.</b> <br>
                                        <b>43 sebagai PiRi</b> terdiri dari <b>4 puluhan dan 3 satuan</b> maka kalian harus <b>klik 4 titik sebelah atas pada kolom puluhan</b> dan <b>klik 3 titik sebelah atas pada kolom satuan.</b> <br>
                                        NB : jika bilangan 0 maka tidak perlu meletakkan pita di papan hitung, karena <b>0 berarti tidak ada.</b>
                                    </li>
                                    <li>
                                        Hitung titik pertemuan kedua pita (titik temu) di setiap kotak dari kiri ke kanan dengan 
                                        <b>ketentuan nilai titik temu masing-masing kotak sesuai warna kotak yang dijelaskan dalam kolom keterangan</b>, 
                                        kemudian <b>tulis hasilnya di kolom sampingnya</b> maka muncul total di kolom bawahnya secara otomatis.
                                    </li>
                                    <li>
                                        <b>Klik tanda centang di samping kolom bawah tersebut</b>, maka total nilai titik temu di kotak tersebut muncul di kolom hasil akhir.
                                    </li>
                                    <li>
                                        <b>Lakukan langkah d dan e pada setiap kotak yang terdapat PiRi dan PiDur bertumpukan</b> yang menghasilkan titik pertemuan yang merupakan hasil kali.
                                    </li>
                                    <li>
                                        Total nilai titik temu masing-masing kotak yang muncul di kolom hasil akhir akan <b>terjumlah secara otomatis.</b>
                                    </li>
                                    <li>
                                        <b>Periksa kembali jawaban di kolom hasil akhir</b> kemudian <b>klik tombol selesai</b> untuk mengetahui jawaban benar atau salah.
                                    </li>
                                </ol>
                            </li>
                            <li>
                                Lanjutkan ke menu Quiz I dan Quiz II untuk mengetahui kemampuan berhitung perkalianmu. Apabila hasil quiz masih belum maksimal, dapat mengulang ke menu papan pita perkalian untuk latihan berhitung perkalian menggunakan media papan pita perkalian.
                            </li>
                        </ol>
                        <p class="card-text">NB : Tombol reset pada papan untuk menghapus semua pita yang telah digambar pada papan.</p>
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


@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#btn_selesai').click(function (e) { 
                Swal.fire({
                    title: 'Selesai',
                    text: "Lanjut ke Praktik Berhitung dengan Media",
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