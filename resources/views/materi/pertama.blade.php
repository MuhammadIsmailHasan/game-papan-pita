@extends('layouts.frontend')

@section('content')
    <section style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>MATERI PERKALIAN</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <ul class="card-text" style="font-size: 20px;">
                            <li>Perkalian adalah salah satu operasi hitung selain penjumlahan, pengurangan, dan pembagian yang <b>terjadi kelipatan pada bilangannya</b>.</li>
                            <li>Perkalian diartikan juga sebagai <b>penjumlahan berulang</b> yakni menjumlahkan bilangan yang sama yang berulang sebanyak “n” kali.</li>
                            <li>Misal 3 x 4 = 12 diperoleh dari 4 + 4 + 4 = 12, dapat disimpulkan bahwasannya pada perkalian, bilangan 4 berulang sebanyak 3 kali dan bilangan-bilangan 4 tersebut dijumlahkan semuanya sehingga diperoleh 12 sebagai hasil kali.</li>
                            <li>Bilangan-bilangan yang melakukan operasi hitung perkalian baik yang mengalikan maupun yang dikalikan disebut <b>faktor perkalian.</b> </li>
                            <li>Hasil yang diperoleh dari proses perhitungan perkalian disebut <b>hasil kali.</b></li>
                            <li>Misal 5 x 6 = 30, dari perkalian tersebut yang disebut <b>faktor perkalian</b> adalah 5 x 6 dan yang disebut <b>hasil kali</b> adalah <b>30.</b></li>
                            <li>
                                Sifat operasi hitung yang berlaku pada perkalian yakni <b>sifat asosiatif</b> atau <b>pengelompokan, sifat komutatif atau pertukaran,</b>
                                dan <b>sifat distributif atau penyebaran</b>. Pada perkalian dua bilangan cacah hanya berlaku 
                                <b>sifat pertukaran atau komutatif. <br>Contoh : 3 x 4 = 4+4+4 = 12 dan 4 x 3 = 3+3+3+4 jadi dapat dikatakan 3x4 = 4x3.</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="about-2" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sifat-sifat khusus perkalian</h4>
                        <ul class="card-text" style="font-size: 20px;">
                            <li>Hasil kali perkalian bilangan 2 atau perkalian yang bilangan akhirnya 2 adalah <b>bilangan genap.</b> <br>Contoh : 7 x 2 = 14, 12 x 3 = 36, 122 x 4 = 488.</li>
                            <li>Bilangan berapapun <b>jika dikalikan dengan 0 maka hasil kalinya juga 0.</b> <br>Contoh : 8 x 0 = 0, 45 x 0 = 0, 456 x 0 = 0.</li>
                            <li>Pada operasi hitung campuran, kedudukan × dan ÷ lebih tinggi daripada + dan – sehingga didahulukan proses perhitungan × dan ÷. Kecuali, jika + dan – berada didalam kurung maka didahulukan operasi hitung yang ada didalam kurung. <br>Contoh : 4x9+2 = …didahulukan 4x9 yang diperoleh hasil 36 baru tambahkan 36 dengan 2 sehingga memperoleh hasil 38.</li>
                        </ul>
                        <br/>

                        <h4 class="card-title">Bentuk perkalian dapat diilustrasikan dengan gambar sebagai berikut</h4>
                        <p class="card-text" style="padding: 0;">1. &nbsp; 4 x 2 = 2 + 2 + 2 + 2 = <b>8</b></p>
                        <img src="{{ asset('img/materi/1-1.jpg') }}" alt="diagram 1" class="img-responsive img-bordered">
                        <br>
                        <p class="card-text" style="padding: 0;">1. &nbsp; 5 x 3 = 3 + 3 + 3 + 3 + 3 = <b>15</b></p>
                        <img src="{{ asset('img/materi/1-2.jpg') }}" alt="diagram 2" class="img-responsive img-bordered">
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
                        <h4 class="card-title">Contoh perkalian yang melibatkan permasalahan sehari-hari</h4>
                        <p class="card-text"><b>Soal</b></p>
                        <p class="card-text">
                            Kakak memelihara kelinci di belakang rumah. Terdapat 3 kandang tempat kelinci-kelinci tersebut berlindung. Masing-masing kandang terdiri dari 8 ekor kelinci. Jadi, ada berapa <b>banyak kelinci</b> yang dipelihara kakak?
                        </p>
                        <p class="card-text"><b>Jawaban</b></p>
                        <p class="card-text">
                            Terdapat 3 kandang dibelakang rumah yang berisi masing-masing <b>8 ekor kelinci</b> maka total kelinci yang dimiliki kakak adalah 8 + 8 + 8 yang ditulis dalam perkalian yakni 3x8 = 24. jadi, total kelinci yang dipelihara kakak berjumlah 24 ekor kelinci. (Fokus pada pertanyaan)
                        </p>
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
                        "status_materi_1" : 1
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            Swal.fire({
                                title: 'Selesai',
                                text: "Lanjut ke Materi Papan Pita Perkalian",
                                icon: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Oke'
                            }).then((result) => {
                                if (result.value) {
                                    document.location.href = "{{ route('permainan.index', 1) }}"
                                } else {
                                    document.location.href = "{{ route('home') }}"; 
                                }
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