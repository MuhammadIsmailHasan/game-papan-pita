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
                            <img src="{{ asset('img/materi/3-1.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 120px">
                            <li>Perkalian disebut juga sebagai <b>penjumlahan berulang</b> yakni menjumlahkan bilangan “b” yang berulang sebanyak “a” kali.</li>
                            <li>Bilangan pengali maupun bilangan yang dikali pada perkalian disebut <b>faktor perkalian.</b></li>
                            <li>Hasil yang diperoleh dari proses perhitungan perkalian disebut <b>hasil kali.</b></li>
                            <li>Contoh :</li>
                            <img src="{{ asset('img/materi/3-2.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 800px">
                            <li>Sifat operasi hitung yang berlaku pada perkalian yakni :</li>
                            <img src="{{ asset('img/materi/3-3.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 800px">
                            <li>Sifat-sifat khusus perkalian :</li>
                            <img src="{{ asset('img/materi/3-4.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 780px">
                            <li>Contoh permasalahan sehari-hari yang melibatkan perkalian adalah sebagai berikut :</li>
                            <img src="{{ asset('img/materi/3-5.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 780px">
                        </ul>
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