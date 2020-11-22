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
                                Media pembelajaran papan pita perkalian dirancang untuk digunakan dalam kegiatan pembelajaran 
                                <b>matematika kelas 3 SD materi perkalian dua bilangan cacah dengan hasil kali hingga 6 digit bilangan atau perkalian bilangan 1 hingga 999.</b>
                            </li>
                            <li>
                                Berhitung perkalian pada media papan pita perkalian atau PaPi “x” menggunakan teknik persekutuan yakni :
                                <ol class="card-text" style="font-size: 20px;">
                                    <li><b>Membuat PiRi sebagai garis vertikal dan PiDur sebagai garis horizontal pada papan pita</b></li>
                                    <li><b>Jumlah PiRi dan PiDur sesuai faktor perkalian yang akan dihitung</b></li>
                                    <li>
                                        <b>Menjumlahkan banyak titik pertemuan dari kedua pita tersebut dengan masing-masing nilai titik temu berdasarkan warna kotak</b>
                                        untuk mendapatkan hasil kali dari perkalian dua bilangan cacah
                                    </li>
                                </ol>
                            </li>
                            <img src="{{ asset('img/materi/4-1.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
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
                            <li>Mulai lakukan praktik berhitung perkalian dengan menggunakan media pembelajaran PaPi “x”.</li>
                            <img src="{{ asset('img/materi/4-2.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 1200px">
                            <li>Lanjutkan ke menu Quiz I dan Quiz II untuk mengetahui kemampuan berhitung perkalianmu. Apabila hasil quiz masih belum maksimal, dapat mengulang ke menu papan pita perkalian untuk latihan berhitung perkalian menggunakan media papan pita perkalian.</li>  
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