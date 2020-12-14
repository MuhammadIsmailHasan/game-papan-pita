@extends('layouts.frontend-game-papan')

@section('content')
<main>
    <div id="content">
        <div id="game" class="card">
            <h2 style="margin: 0;">Praktik Berhitung Perkalian <br>dengan Media Pembelajaran Papan Pita Perkalian</h2>
            <hr>
            
            <div id="header-game" class="text-center">
                <table id="papan">
                    <tr style="background-color: dimgray;">
                        <th colspan="4"><h1 style="margin: 5px;">PAPAN PITA PERKALIAN</h1></th>
                        <th><button class="btn-game btn-pink" id="btn_tutorial" type="button">TUTORIAL</button></th>
                    </tr>
                    <tr class="first_row">
                        <td class="first_column">
                            <input type="number" id="awal" class="column-soal">
                            x
                            <input type="number" id="akhir" class="column-soal">
                            {{-- <h2 id="soal" style="margin: 0;">2 x 3 :</h2> --}}
                        </td>
                        <td class="header_column">RATUSAN</td>
                        <td class="header_column">PULUHAN</td>
                        <td class="header_column">SATUAN</td>
                        <td rowspan="3" class="last_column">
                            <h4 style="margin: 0;">KETERANGAN</h4>
                            <hr class="hr_large">
                            <div id="warna">
                                <div class="box-warna sepuluh-ribu">
                                    <p class="warna-text">10.000</p>
                                </div>
                                <div class="box-warna seribu">
                                    <p class="warna-text">1.000</p>
                                </div>
                                <div class="box-warna seratus">
                                    <p class="warna-text">100</p>
                                </div>
                                <div class="box-warna sepuluh">
                                    <p class="warna-text">10</p>
                                </div>
                                <div class="box-warna satu">
                                    <p class="warna-text">1</p>
                                </div>
                            </div>
                            <div id="keterangan">
                                <div id="hl"></div>
                                <p style="margin: 0 0 2px 0; font-size: 12px;">PiDur (Pita Tidur)</p>
                                <div id="vl"></div>
                                <p style="margin: 1px 0 20px 0; display: inline-block; font-size: 12px;">PiRi (Pita berdiRi)</p>

                                <p class="ket-text">
                                    ----- INGAT !! -----<br> 
                                    a x b = c <br>
                                    PiDur sebagai a <br>
                                    PiRi sebagai b
                                </p>
                            </div>
                            
                            <div style="border: 1px solid dimgray; border-radius: 3px; padding: 2px;">
                                <button id="btn_reset" type="button" class="btn-game btn-chocolate"> RESET</button> 
                                <button id="btn_selesai" type="button" class="btn-game btn-green"> SELESAI</button> 
                            </div>
                        </td>
                    </tr>
                    <tr class="header_row">
                        <td>RATUSAN</td>
                        <td colspan="3" rowspan="3" style="padding: 0;">
                            <div id="canvas">
                                <div id="flex-row">
                                    <div id="rara" class="sepuluh-ribu box">
                                        <input type="number" id="input-0-27" class="column-input input-number">
                                        <input type="number" id="input-1-27" class="column-input input-number">
                                        <input type="number" id="input-2-27" class="column-input input-number">
                                        <input type="number" id="input-3-27" class="column-input input-number">
                                        <input type="number" id="input-4-27" class="column-input input-number">
                                        <input type="number" id="input-5-27" class="column-input input-number">
                                        <input type="number" id="input-6-27" class="column-input input-number">
                                        <input type="number" id="input-7-27" class="column-input input-number">
                                        <input type="number" id="input-8-27" class="column-input input-number">
                                        <span data-tipe="rara">
                                            <input id="jumlah_rara" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="rara"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="rapu" class="seribu box">
                                        <input type="number" id="input-0-36" class="column-input input-number">
                                        <input type="number" id="input-1-36" class="column-input input-number">
                                        <input type="number" id="input-2-36" class="column-input input-number">
                                        <input type="number" id="input-3-36" class="column-input input-number">
                                        <input type="number" id="input-4-36" class="column-input input-number">
                                        <input type="number" id="input-5-36" class="column-input input-number">
                                        <input type="number" id="input-6-36" class="column-input input-number">
                                        <input type="number" id="input-7-36" class="column-input input-number">
                                        <input type="number" id="input-8-36" class="column-input input-number">
                                        <span data-tipe="rapu">
                                            <input id="jumlah_rapu" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="rapu"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="rasa" class="seratus box">
                                        <input type="number" id="input-0-45" class="column-input input-number">
                                        <input type="number" id="input-1-45" class="column-input input-number">
                                        <input type="number" id="input-2-45" class="column-input input-number">
                                        <input type="number" id="input-3-45" class="column-input input-number">
                                        <input type="number" id="input-4-45" class="column-input input-number">
                                        <input type="number" id="input-5-45" class="column-input input-number">
                                        <input type="number" id="input-6-45" class="column-input input-number">
                                        <input type="number" id="input-7-45" class="column-input input-number">
                                        <input type="number" id="input-8-45" class="column-input input-number">
                                        <span data-tipe="rasa">
                                            <input id="jumlah_rasa" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="rasa"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>

                                <div id="flex-row">
                                    <div id="pura" class="seribu box">
                                        <input type="number" id="input-9-27" class="column-input input-number">
                                        <input type="number" id="input-10-27" class="column-input input-number">
                                        <input type="number" id="input-11-27" class="column-input input-number">
                                        <input type="number" id="input-12-27" class="column-input input-number">
                                        <input type="number" id="input-13-27" class="column-input input-number">
                                        <input type="number" id="input-14-27" class="column-input input-number">
                                        <input type="number" id="input-15-27" class="column-input input-number">
                                        <input type="number" id="input-16-27" class="column-input input-number">
                                        <input type="number" id="input-17-27" class="column-input input-number">
                                        <span data-tipe="pura">
                                            <input id="jumlah_pura" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="pura"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="pupu" class="seratus box">
                                        <input type="number" id="input-9-36" class="column-input input-number">
                                        <input type="number" id="input-10-36" class="column-input input-number">
                                        <input type="number" id="input-11-36" class="column-input input-number">
                                        <input type="number" id="input-12-36" class="column-input input-number">
                                        <input type="number" id="input-13-36" class="column-input input-number">
                                        <input type="number" id="input-14-36" class="column-input input-number">
                                        <input type="number" id="input-15-36" class="column-input input-number">
                                        <input type="number" id="input-16-36" class="column-input input-number">
                                        <input type="number" id="input-17-36" class="column-input input-number">
                                        <span data-tipe="pupu">
                                            <input id="jumlah_pupu" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="pupu"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="pusa" class="sepuluh box">
                                        <input type="number" id="input-9-45" class="column-input input-number">
                                        <input type="number" id="input-10-45" class="column-input input-number">
                                        <input type="number" id="input-11-45" class="column-input input-number">
                                        <input type="number" id="input-12-45" class="column-input input-number">
                                        <input type="number" id="input-13-45" class="column-input input-number">
                                        <input type="number" id="input-14-45" class="column-input input-number">
                                        <input type="number" id="input-15-45" class="column-input input-number">
                                        <input type="number" id="input-16-45" class="column-input input-number">
                                        <input type="number" id="input-17-45" class="column-input input-number">
                                        <span data-tipe="pusa">
                                            <input id="jumlah_pusa" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="pusa"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>

                                <div id="flex-row">
                                    <div id="sara" class="seratus box">
                                        <input type="number" id="input-18-27" class="column-input input-number">
                                        <input type="number" id="input-19-27" class="column-input input-number">
                                        <input type="number" id="input-20-27" class="column-input input-number">
                                        <input type="number" id="input-21-27" class="column-input input-number">
                                        <input type="number" id="input-22-27" class="column-input input-number">
                                        <input type="number" id="input-23-27" class="column-input input-number">
                                        <input type="number" id="input-24-27" class="column-input input-number">
                                        <input type="number" id="input-25-27" class="column-input input-number">
                                        <input type="number" id="input-26-27" class="column-input input-number">
                                        <span data-tipe="sara">
                                            <input id="jumlah_sara" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="sara"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="sapu" class="sepuluh box">
                                        <input type="number" id="input-18-36" class="column-input input-number">
                                        <input type="number" id="input-19-36" class="column-input input-number">
                                        <input type="number" id="input-20-36" class="column-input input-number">
                                        <input type="number" id="input-21-36" class="column-input input-number">
                                        <input type="number" id="input-22-36" class="column-input input-number">
                                        <input type="number" id="input-23-36" class="column-input input-number">
                                        <input type="number" id="input-24-36" class="column-input input-number">
                                        <input type="number" id="input-25-36" class="column-input input-number">
                                        <input type="number" id="input-26-36" class="column-input input-number">
                                        <span data-tipe="sapu">
                                            <input id="jumlah_sapu" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="sapu"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div id="sasa" class="satu box">
                                        <input type="number" id="input-18-45" class="column-input input-number">
                                        <input type="number" id="input-19-45" class="column-input input-number">
                                        <input type="number" id="input-20-45" class="column-input input-number">
                                        <input type="number" id="input-21-45" class="column-input input-number">
                                        <input type="number" id="input-22-45" class="column-input input-number">
                                        <input type="number" id="input-23-45" class="column-input input-number">
                                        <input type="number" id="input-24-45" class="column-input input-number">
                                        <input type="number" id="input-25-45" class="column-input input-number">
                                        <input type="number" id="input-26-45" class="column-input input-number">
                                        <span data-tipe="sasa">
                                            <input id="jumlah_sasa" type="number" class="column-input column-jumlah">
                                            <div class="btn-jumlah-group" style="display: none;">
                                                <button type="button" class="btn-jumlah" tipe="sasa"><i class="fa fa-check"></i></button>
                                                <div class="tooltip">
                                                    Klik tanda centang ini
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="header_row">
                        <td>PULUHAN</td>
                    </tr>
                    <tr class="header_row">
                        <td>SATUAN</td>
                        <td class="hasil_row">
                            <h4 style="margin: 0;">HASIL AKHIR</h4>
                            <hr class="hr_large">
                            <div id="hasil_section">
                                <ul id="hasil_jumlah">
                                </ul>
                                <div style='overflow:hidden; white-space:nowrap;'>
                                    <i class="fa fa-plus"></i>
                                    <hr class="hr_small"/>
                                </div>
                                <input type="number" id="hasil_total" class="column-input column-hasil">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <hr>
            <div style="overflow: auto;">
                <div style="float: left;">
                    <button id="btn_kembali" type="button" class="btn-game btn-blue"> KEMBALI</button>
                </div>
                <div style="float: right;">
                    <a href="{{ route('permainan.index', 1) }}" type="button" class="btn-game btn-long btn-gray"> Lanjut Quiz 1</a>
                </div>
            </div>
            
        </div>
    </div>
</main>

<div>
    <div id="siswa-section" class="floating-siswa floating-right">
        <span id="siswa-close" class="close">&times;</span>
        <img src="{{ asset('img/siswa.png') }}" 
            id="siswa-icon"
            alt="siswa" 
            class="img-responsive img-icon"
            style="width: 150px">
    </div>
</div>

<!-- The Modal -->
<div id="modal_totorial" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="margin: 10px;">TUTORIAL</h2>
        <hr>
        <img src="{{ asset('img/materi/4-3.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 550px">
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(`.input-number`).attr(`disabled`, true);
    // $(`.column-jumlah`).attr(`disabled`, true);

    $('#siswa-close').click(function (e) { 
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
        steps: [
            {
                target: `siswa-icon`,
                title: `Ayo mulai berhitung perkalian! jangan bilang tidak bisa sebelum mencobanya.`,
                placement: placementLeft,
            },
            {
                target: `btn_tutorial`,
                content: `${nama} juga dapat melihat tutorial pada papan, jika tidak ingat semua langkah-langkah penggunaannya.`,
                placement: placementLeft,
                yOffset: -18,
            },
            {
                target: `siswa-close`,
                content: `Klik ini untuk menghilangkan saya`,
                placement: placementLeft,
                yOffset: -18,
            },
        ],
        showPrevButton: true
    };
    hopscotch.startTour(tour);

    // MODAL //
    $('#btn_tutorial').click(function (e) { 
        $('#modal_totorial').css('display', 'block');
    });
    $('.close').click(function (e) { 
        $('#modal_totorial').css('display', 'none');
    });

    // PAPAN //
    $('#btn_reset').click(function (e) { 
        resetPapan();
    });
    
    $('.column-jumlah').keyup(function (e) { 
        let tipe = e.target.parentElement.dataset['tipe'];
        $(this).next().css(`display`, `block`);
    });

    $('.btn-jumlah').click(function (e) { 
        let tipe = $(this).attr('tipe');
        let dataInputJumlah = $(`#jumlah_${tipe}`).val();
        $(`li[tipe=${tipe}]`).remove();
        let li = `<li data-jumlah="${dataInputJumlah}" tipe=${tipe}>${dataInputJumlah}</li>`;
        $('#hasil_jumlah').append(li);
        
        $(this).parent().css('display', 'none');
    });

    $('#btn_selesai').click(function (e) { 
        let selectedAnswer = $('#hasil_total').val();
        let firstNumber = $(`#awal`).val();
        let secondNumber = $(`#akhir`).val();
        let jawaban = parseInt(firstNumber) * parseInt(secondNumber);
        let titleError = "Error";
        if (!Number.isNaN(jawaban)) {
            if (selectedAnswer == jawaban) {
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
                                title: '{{ Auth::user()->name }}, JAWABANMU BENAR',
                                html: "Kamu hebat. <br>Tekan Yes untuk lanjut quiz level 1.",
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

            } else {
                resetPapan();
                titleError = '{{ Auth::user()->name }}, JAWABANMU SALAH '
                errorAnswar(titleError);
            }
        } else {
                titleError = '{{ Auth::user()->name }}, TULISKAN ANGKA SOAL DAHULU'
                errorAnswar(titleError);
        }
        
    });

    function errorAnswar(titleError) {
        Swal.fire({
            icon: 'error',
            title: titleError,
            text: 'Kamu dapat mengulang kembali pengerjaanmu.'
        });
    }

    $('#btn_kembali').click(function (e) { 
        document.location.href = "{{ route('materi.index', 2) }}";
    });

    function resetPapan() {
        $('.line').remove();
        $('#papan .column-input').val('');
        $('.btn-jumlah-group').css('display', 'none');
        $('#hasil_jumlah').html('');
        $('#hasil_total').val('');

        $(`.input-number`).attr(`disabled`, true);
        dotVertical = [];
        dotHorizontal = [];
    }
    
    
    let dotVertical = [];
    let dotHorizontal = [];

    let coords2 = [
        // BARIS
        // ratusan
        [
            [0, 23], [1046, 23]
        ],
        [
            [0, 50], [1046, 50]
        ],
        [
            [0, 77], [1046, 77]
        ],
        [
            [0, 104], [1046, 104]
        ],
        [
            [0, 131], [1046, 131]
        ],
        [
            [0, 158], [1046, 158]
        ],
        [
            [0, 185], [1046, 185]
        ],
        [
            [0, 212], [1046, 212]
        ],
        [
            [0, 239], [1046, 239]
        ],
        
        // puluhan
        [
            [0, 303], [1046, 303]
        ],
        [
            [0, 330], [1046, 330]
        ],
        [
            [0, 357], [1046, 357]
        ],
        [
            [0, 384], [1046, 384]
        ],
        [
            [0, 411], [1046, 411]
        ],
        [
            [0, 438], [1046, 438]
        ],
        [
            [0, 465], [1046, 465]
        ],
        [
            [0, 492], [1046, 492]
        ],
        [
            [0, 519], [1046, 519]
        ],

        // satuan
        [
            [0, 582], [1046, 582]
        ],
        [
            [0, 609], [1046, 609]
        ],
        [
            [0, 636], [1046, 636]
        ],
        [
            [0, 663], [1046, 663]
        ],
        [
            [0, 690], [1046, 690]
        ],
        [
            [0, 717], [1046, 717]
        ],
        [
            [0, 744], [1046, 744]
        ],
        [
            [0, 771], [1046, 771]
        ],
        [
            [0, 798], [1046, 798]
        ],


    // KOLOM
        // ratusan
        [
            [30, 0], [30, 839]
        ],
        [
            [60, 0], [60, 839]
        ],
        [
            [90, 0], [90, 839]
        ],
        [
            [120, 0], [120, 839]
        ],
        [
            [150, 0], [150, 839]
        ],
        [
            [180, 0], [180, 839]
        ],
        [
            [210, 0], [210, 839]
        ],
        [
            [240, 0], [240, 839]
        ],
        [
            [270, 0], [270, 839]
        ],

        // puluhan
        [
            [378, 0], [378, 839]
        ],
        [
            [408, 0], [408, 839]
        ],
        [
            [438, 0], [438, 839]
        ],
        [
            [468, 0], [468, 839]
        ],
        [
            [498, 0], [498, 839]
        ],
        [
            [528, 0], [528, 839]
        ],
        [
            [558, 0], [558, 839]
        ],
        [
            [588, 0], [588, 839]
        ],
        [
            [618, 0], [618, 839]
        ],

        // satuan
        [
            [729, 0], [729, 839]
        ],
        [
            [759, 0], [759, 839]
        ],
        [
            [789, 0], [789, 839]
        ],
        [
            [819, 0], [819, 839]
        ],
        [
            [849, 0], [849, 839]
        ],
        [
            [879, 0], [879, 839]
        ],
        [
            [909, 0], [909, 839]
        ],
        [
            [939, 0], [939, 839]
        ],
        [
            [969, 0], [969, 839]
        ],

    ];

    for (var a = 0; a < coords2.length; a++) {
        for (var b = 0; b < coords2[a].length; b++){
            let css = {
                left: coords2[a][b][0]-6,
                top: coords2[a][b][1]-17,
            }
            class_active = (b == 0) ? ' first_dot' : ' last_dot';
            div = $('<div id="dot_container_'+a+'_'+b+'" parent_value="'+a+'" order_value="'+b+'" class="dot_container'+class_active+'"><div class="dot"></div></div>').css(css);
            $('#canvas').append(div);
        }	
    }

    $('.dot_container').click(function() {
        let parent = parseInt($(this).attr('parent_value'));
        let order = parseInt($(this).attr('order_value'));

        if ($(this).hasClass('first_dot')) {
            let dotId = `dot_container_${parent}_1`;		

            if (parent < 27) {
                dotVertical.push(parent);
            }

            if (parent >= 27 && parent < 36) {
                // ratusan
                dotHorizontal.push(27);
            } else if (parent >= 36 && parent < 45) {
                // puluhan
                dotHorizontal.push(36);
            } else if (parent >= 45 & parent < 54 ) {
                // satuan
                dotHorizontal.push(45);
            }

            $.each(dotHorizontal, function (i, v) { 
                $.each(dotVertical, function (ii, vv) { 
                    $(`#input-${vv}-${v}`).attr(`disabled`, false);
                });
            });

            for (let c = 0; c < coords2[parent].length; c++){
                x1 = coords2[parent][c][0];
                y1 = coords2[parent][c][1];
                x2 = coords2[parent][c+1][0];
                y2 = coords2[parent][c+1][1];
                c = c + 1;

                var m = (y2-y1)/(x2-x1); //slope of the segment
                var angle = (Math.atan(m))*180/(Math.PI); //angle of the line
                var diameter = Math.sqrt(((x2-x1)*(x2-x1)) + ((y2-y1)*(y2-y1))); //length of the segment
                var transform;

                // the (css) transform angle depends on the direction of movement of the line
                if (x2 >= x1){
                    transform = (360 + angle) % 360;
                } else {
                    transform = 180 + angle;
                }

                // add the (currently invisible) line to the page
                var id ='line_'+new Date().getTime();
                var line = "<div id='"+id+"'class='line' dot_id="+dotId+">&nbsp;</div>";
                $('#canvas').append(line);
                
                //rotate the line
                $('#'+id).css({
                    'left': x1,
                    'top': y1,
                    'width': '0px',
                    'transform' : 'rotate('+transform+'deg)',
                    'transform-origin' : '0px 0px',
                    '-ms-transform' : 'rotate('+transform+'deg)',
                    '-ms-transform-origin' : '0px 0px',
                    '-moz-transform' : 'rotate('+transform+'deg)',
                    '-moz-transform-origin' : '0px 0px',
                    '-webkit-transform' : 'rotate('+transform+'deg)',
                    '-webkit-transform-origin' : '0px 0px',
                    '-o-transform' : 'rotate('+transform+'deg)',
                    '-o-transform-origin' : '0px 0px'
                });

                // 'draw' the line
                $('#'+id).animate({
                    width: diameter,
                }, 400, "linear");
            }
            
        } else {
            let dotLineId = $(this).attr('id')
            $(`.line[dot_id=${dotLineId}]`).remove();

            if (parent >= 27 && parent < 36) {
                // ratusan
                parent = 27;
            } else if (parent >= 36 && parent < 45) {
                // puluhan
                parent = 36;
            } else if (parent >= 45 & parent < 54 ) {
                // satuan
                parent = 45;
            }

            if (parent < 27) {
                dotVertical.splice(dotVertical.indexOf(parent), 1);

                $.each(dotHorizontal, function (iii, vvv) { 
                    $(`#input-${parent}-${vvv}`).attr(`disabled`, true);
                });
            } else {
                dotHorizontal.splice(dotHorizontal.indexOf(parent), 1);

                $.each(dotVertical, function (iiii, vvvv) { 
                    let parentLength = dotHorizontal.filter(numHor => numHor == parent);
                    if (parentLength == 0) {
                        $(`#input-${vvvv}-${parent}`).attr(`disabled`, true);
                    }
                });
            }
        }
    });
</script>
@endsection