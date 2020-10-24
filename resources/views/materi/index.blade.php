@extends('layouts.frontend')

@section('content')
    <section id="materi-2" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>MATERI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Penyajian Data dalam Diagram Lingkaran</h4>
                        <p class="card-text">Diagram lingkaran merupakan diagram data berbentuk lingkaran yang terdiri dari beberapa bagian (juring).</p>
                        <img src="{{ asset('img/materi/1.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                        <p class="card-text after-img">Besar juring disesuaikan dengan besar persentase ataupun besar sudut setiap data. </p>
                        <img src="{{ asset('img/materi/2.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="success" id="about-2" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Cara membaca data dalam diagram lingkaran</h4>
                        <p class="card-text">Setiap Minggu Cak Budi menjual 180 porsi lalapan, yaitu lalapan tempe penyet, bebek goreng, ayam panggang dan ayam goreng. Berikut diagram lingkarannya.</p>
                        <img src="{{ asset('img/materi/3.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                        <p class="card-text after-img">
                            - &nbsp; Sebanyak 30% yang terjual adalah lalapan tempe penyet
                        </p>
                        <p class="card-text">
                            - &nbsp; Sebanyak 10% yang terjual adalah lalapan bebek goreng
                        </p>
                        <p class="card-text">
                            - &nbsp; Sebanyak 20% yang terjual adalah lalapan ayam panggang
                        </p>
                        <p class="card-text">
                            - &nbsp; Sebanyak 40% yang terjual adalah lalapan ayam goreng
                        </p>

                        {{-- NEXT BAB --}}
                        <h4 class="card-title" style="margin-top: 40px">Cara Menghitung Banyaknya porsi lalapan yang terjual untuk setiap data</h4>
                        <div class="img-bordered text-bordered">
                            <p class="card-text">
                                - Banyak penjualan tempe penyet<br>
                                30% x 180 = 30/100x 180 = <b>54 porsi</b>
                            </p>
                            <p class="card-text">
                                - Banyak penjualan bebek goreng<br>
                                10% x 180 = 10/100x 180 = <b>18 porsi</b>
                            </p>
                            <p class="card-text">
                                - Banyak penjualan ayam panggang<br>
                                20% x 180 = 20/100x 180 = <b>36 porsi</b>
                            </p>
                            <p class="card-text">
                                - Banyak penjualan ayam goreng<br>
                                40% x 180 = 40/100x 180 = <b>72 porsi</b>
                            </p>
                        </div>

                        <div class="img-bordered text-bordered">
                            <h4>Rumus Menghitung Banyaknya Data</h4>
                            <p class="card-text">
                                Jumlah data yang dicari :<br>
                                Persentase data yang diketahui/100 x Jumlah data keseluruhan
                            </p>
                        </div>
                        <div class="img-bordered text-bordered">
                            <h4>Rumus (Jika menggunakan besar sudut)</h4>
                            <p class="card-text">
                                Jumlah data yang dicari :<br>
                                Besar sudut yang diketahui/360˚ x Jumlah data keseluruhan
                            </p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section id="materi-3" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Menyajikan Data dalam Diagram Lingkaran</h4>
                        <p class="card-text">Data Penjualan Lalapan Cak Budi</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td><p style="margin: 0"><b>Jenis Lalapan</b></p></td>
                                    <td><p style="margin: 0"><b>Banyak Porsi Terjual</b></p></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p style="margin: 0">Tempe Penyet</p></td>
                                    <td><p style="margin: 0">54</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin: 0">Bebek Goreng</p></td>
                                    <td><p style="margin: 0">18</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin: 0">Ayam Panggang</p></td>
                                    <td><p style="margin: 0">36</p></td>
                                </tr>
                                <tr>
                                    <td><p style="margin: 0">Ayam Goreng</p></td>
                                    <td><p style="margin: 0">72</p></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="card-text"><b>1. Menentukan jumlah seluruh data terlebih dahulu</b></p>
                        <p class="card-text">54+28+36+72 = 180</p>
                        <p class="card-text"><b>2. Lalu, tentukan besar sudut atau persentase dari setiap jenis lalapan. </b></p>
                        <p class="card-text">Berikut ini caranya:</p>
                        <div class="img-bordered text-bordered">
                            <h4>Besar Sudut :</h4>
                            <p class="card-text">
                                1. Tempe Penyet :<br> 54/180 x 360˚ = 108˚
                            </p>
                            <p class="card-text">
                                2. Bebek Goreng :<br> 18/180 x 360˚ = 36˚
                            </p>
                            <p class="card-text">
                                3. Ayam Panggang :<br> 36/180 x 360˚ = 72˚
                            </p>
                            <p class="card-text">
                                4. Ayam Goreng :<br> 72/180 x 360˚ = 144˚
                            </p>
                        </div>
                        <div class="img-bordered text-bordered">
                            <h4>Persentase :</h4>
                            <p class="card-text">
                                1. Tempe Penyet :<br> 54/180 x 100% = 30%
                            </p>
                            <p class="card-text">
                                2. Bebek Goreng :<br> 18/180 x 100% = 10%
                            </p>
                            <p class="card-text">
                                3. Ayam Panggang :<br> 36/180 x 100% = 20%
                            </p>
                            <p class="card-text">
                                4. Ayam Goreng :<br> 72/180 x 100% = 40%
                            </p>
                        </div>
                        <p class="card-text after-img"><b>3. Buatlah lingkaran, lalu bagi menjadi beberapa bagian sesuai dengan besar sudut yang diperoleh 
                            (Gunakan busur derajat untuk mengukur sudut dan jangka untuk mnggambar di buku)
                            </b></p>
                        <p class="card-text">
                            - Untuk berlatih, mari membuat diagram lingkaran dengan mengisi kolom derajat awal dan derajat akhir berikut ini sesuai dengan besar sudut yang telah dihitung sebelumnya.
                        </p>
                        <p class="card-text">
                            - Derajat awal yang pertama bernilai 0˚ dan derajat paling akhir bernilai 360˚.
                        </p>
                        <p class="card-text">
                            - Untuk mengetahui derajat lainnya kalian dapat menjumlahkan atau mengurangkan besar sudut yang sudah dihitung.
                        </p>
                        <p class="card-text">
                            - Kemudian periksa jawaban kalian
                        </p>
                        {{-- Menggambar Canvas --}}
                        <canvas id="can_satu" style="border: 1px solid black;;"></canvas>
                        <form action="#" class="after-img">
                            <div class="form-group">
                                <div style="border: 1px solid black; width: 300px; height: 23px; background: magenta;">Tempe Penyet</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Awal</small>
                                        <input type="text" name="awal" id="tempe_awal" class="form-control" value="0" disabled placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Akhir</small>
                                        <input type="text" name="akhir" id="tempe_akhir" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div style="border: 1px solid black; width: 300px; height: 20px; background: blue;">Bebek Goreng</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Awal</small>
                                        <input type="text" name="awal" id="bebek_awal" class="form-control awal" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Akhir</small>
                                        <input type="text" name="akhir" id="bebek_akhir" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div style="border: 1px solid black; width: 300px; height: 20px; background: red;">Ayam Panggang</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Awal</small>
                                        <input type="text" name="awal" id="ayam_panggang_awal" class="form-control awal" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Akhir</small>
                                        <input type="text" name="akhir" id="ayam_panggang_akhir" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div style="border: 1px solid black; width: 300px; height: 20px; background: yellow;">Ayam Goreng</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Awal</small>
                                        <input type="text" name="awal" id="ayam_goreng_awal" class="form-control awal" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <small id="helpId" class="text-muted">Derajat Akhir</small>
                                        <input type="text" name="akhir" id="ayam_goreng_akhir" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div style="margin: 10px;">
                            <button id="btn_tampil" type="button" class="btn btn-info">Tampilkan Diagram Jawaban</button>
                        </div>

                        <img src="{{ asset('img/materi/5.png') }}" id="img_tampil" alt="diagram 1" class="img-responsive img-bordered" style="display: none;">
                        {{-- <canvas id="can_dua" style="border: 1px solid black; display: none;"></canvas> --}}

                        <p class="card-text after-img"><b>
                            4. Seperti diagram jawaban di atas, setiap bagian lingkaran diberi keterangan. Keterangan dapat ditulis sesuai dengan besar sudut atau besar persentasenya.
                        </b></p>
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
                        "status_materi" : 1
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            Swal.fire({
                                    title: 'LANJUTKAN BERMAIN ?',
                                    text: "Pilih Yes untuk Lanjut ke Game Ronde 1",
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
                            alert("GAGAL");
                        }
                    }
                });
            });

            $('#btn_tampil').click(function (e) { 
                if (drawStatus) {
                    $(this).css('display', 'none');
                    $('#img_tampil').css('display', 'block');
                    // $('#can_dua').css('display', 'block');
                } else {
                    alert("Selesaikan Diagram Dahulu");
                }
            });

            // canvas 1
            var myCanvas = document.getElementById("can_satu");
            myCanvas.width = 300;
            myCanvas.height = 300;
            var ctx = myCanvas.getContext("2d");

            var totalDegreeTempe = 0;
            var totalDegreeBebek = 0;
            var totalDegreePanggang = 0;
            var totalDegreeGoreng = 0;
            let drawStatus = false;

            function drawArc(ctx, centerX, centerY, radius, startAngle, endAngle){
                ctx.beginPath();
                ctx.arc(centerX, centerY, radius, startAngle, endAngle);
                ctx.stroke();
            }

            function drawPieSlice(ctx,centerX, centerY, radius, startAngle, endAngle, color ){
                //newEndAngle = startAngle + endAngle;
                ctx.fillStyle = color;
                ctx.beginPath();
                ctx.moveTo(centerX,centerY);
                ctx.arc(centerX, centerY, radius, startAngle, endAngle);
                ctx.closePath();
                ctx.fill();
            }

            function resetDraw(startAngle, endAngle) {
                drawPieSlice (ctx, 150, 150, 150, startAngle, endAngle, 'white');
            }

            calRadius = num => {
                return (Math.PI / 180) * num;
            }

            function rubahStatus(degEnd) {
                drawStatus = degEnd == 360 ? true : false;
            }

            // draw circle
            drawArc(ctx, 150,150,150, 0, 360);

            $('#tempe_akhir').blur(function (e) {
                let degStart = parseInt($('#tempe_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 360);
                totalDegreeTempe = 0;
                
                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'magenta');
                    totalDegreeTempe = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
            $('#bebek_akhir').blur(function (e) { 
                let degStart = parseInt($('#bebek_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 0);
                totalDegreeBebek = 0;

                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'blue');
                    totalDegreeBebek = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
            $('#ayam_panggang_akhir').blur(function (e) { 
                let degStart = parseInt($('#ayam_panggang_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 0);
                totalDegreePanggang = 0;
                
                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'red');
                    totalDegreePanggang = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
            $('#ayam_goreng_akhir').blur(function (e) { 
                let degStart = parseInt($('#ayam_goreng_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 0);
                totalDegreeGoreng = 0;

                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'yellow');
                    totalDegreeGoreng = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
        });
    </script>
@endsection