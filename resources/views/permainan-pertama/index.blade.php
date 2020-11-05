@extends('layouts.frontend-game')

@section('content')
<main>
    <div id="content">
        <div id="game" class="card">
            <h1 style="margin: 0"><u>QUIZ LEVEL 1</u></h1>
            <div id="hud">
                <div id="hud-item">
                    <p class="hud-prefix">
                    Soal
                    </p>
                    <h2 class="hud-main-text" id="questionCounter">0/5</h2>
                </div>
                <div id="hud-item">
                    <p class="hud-prefix">
                    Waktu
                    </p>
                    <h2 class="hud-main-text" id="timer">
                        12:00
                    </h2>
                </div>
                {{-- <div class="audio" style="display: none;">
                    <audio id="audio-soal" controls loop>
                        <source src="{{ asset('audio/backsound.mp3') }}" type="audio/mpeg">
                    </audio>
                    <audio id="audio-jawab" src="{{ asset('audio/jawab.mp3') }}"></audio>
                </div> --}}
                <div id="hud-item">
                    <button id="btn_mulai" type="button" class="btn-game btn-blue"> MULAI</button>   
                    <button id="btn_simpan" style="display: none;" type="button" class="btn-game btn-gray"> AKHIRI QUIZ</button>   
                </div>
            </div>

            <hr>
            
            <div id="header-game" class="text-center">
                <h1 id="pembuka"> SILAHKAN KLIK MULAI</h1>

                <table id="papan" style="display: none;">
                    <tr style="background-color: dimgray;">
                        <th colspan="4"><h1 style="margin: 5px;">PAPAN PITA PERKALIAN</h1></th>
                        <th><button class="btn-game btn-pink" id="btn_tutorial" type="button">TUTORIAL</button></th>
                    </tr>
                    <tr class="first_row">
                        <td class="first_column">
                            <h2 id="soal" style="margin: 0;">0 x 0 :</h2>
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
                                        <input type="number" id="rara-1" class="column-input input-1 input-number" tipe="rara">
                                        <input type="number" id="rara-2" class="column-input input-2 input-number" tipe="rara">
                                        <input type="number" id="rara-3" class="column-input input-3 input-number" tipe="rara">
                                        <input type="number" id="rara-4" class="column-input input-4 input-number" tipe="rara">
                                        <input type="number" id="rara-5" class="column-input input-5 input-number" tipe="rara">
                                        <input type="number" id="rara-6" class="column-input input-6 input-number" tipe="rara">
                                        <input type="number" id="rara-7" class="column-input input-7 input-number" tipe="rara">
                                        <input type="number" id="rara-8" class="column-input input-8 input-number" tipe="rara">
                                        <input type="number" id="rara-9" class="column-input input-9 input-number" tipe="rara">
                                        <span>
                                            <input id="jumlah_rara" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="rara"><i class="fa fa-check"></i></button>
                                        </span>
                                        
                                    </div>
                                    <div id="rapu" class="seribu box">
                                        <input type="number" id="rapu-1" class="column-input input-1 input-number" tipe="rapu">
                                        <input type="number" id="rapu-2" class="column-input input-2 input-number" tipe="rapu">
                                        <input type="number" id="rapu-3" class="column-input input-3 input-number" tipe="rapu">
                                        <input type="number" id="rapu-4" class="column-input input-4 input-number" tipe="rapu">
                                        <input type="number" id="rapu-5" class="column-input input-5 input-number" tipe="rapu">
                                        <input type="number" id="rapu-6" class="column-input input-6 input-number" tipe="rapu">
                                        <input type="number" id="rapu-7" class="column-input input-7 input-number" tipe="rapu">
                                        <input type="number" id="rapu-8" class="column-input input-8 input-number" tipe="rapu">
                                        <input type="number" id="rapu-9" class="column-input input-9 input-number" tipe="rapu">
                                        <span>
                                            <input id="jumlah_rapu" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="rapu"><i class="fa fa-check"></i></button>
                                        </span>
                                    </div>
                                    <div id="rasa" class="seratus box">
                                        <input type="number" id="rasa-1" class="column-input input-1 input-number" tipe="rasa">
                                        <input type="number" id="rasa-2" class="column-input input-2 input-number" tipe="rasa">
                                        <input type="number" id="rasa-3" class="column-input input-3 input-number" tipe="rasa">
                                        <input type="number" id="rasa-4" class="column-input input-4 input-number" tipe="rasa">
                                        <input type="number" id="rasa-5" class="column-input input-5 input-number" tipe="rasa">
                                        <input type="number" id="rasa-6" class="column-input input-6 input-number" tipe="rasa">
                                        <input type="number" id="rasa-7" class="column-input input-7 input-number" tipe="rasa">
                                        <input type="number" id="rasa-8" class="column-input input-8 input-number" tipe="rasa">
                                        <input type="number" id="rasa-9" class="column-input input-9 input-number" tipe="rasa">
                                        <span>
                                            <input id="jumlah_rasa" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="rasa"><i class="fa fa-check"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <div id="flex-row">
                                    <div id="pura" class="seribu box">
                                        <input type="number" id="pura-1" class="column-input input-1 input-number" tipe="pura">
                                        <input type="number" id="pura-2" class="column-input input-2 input-number" tipe="pura">
                                        <input type="number" id="pura-3" class="column-input input-3 input-number" tipe="pura">
                                        <input type="number" id="pura-4" class="column-input input-4 input-number" tipe="pura">
                                        <input type="number" id="pura-5" class="column-input input-5 input-number" tipe="pura">
                                        <input type="number" id="pura-6" class="column-input input-6 input-number" tipe="pura">
                                        <input type="number" id="pura-7" class="column-input input-7 input-number" tipe="pura">
                                        <input type="number" id="pura-8" class="column-input input-8 input-number" tipe="pura">
                                        <input type="number" id="pura-9" class="column-input input-9 input-number" tipe="pura">
                                        <span>
                                            <input id="jumlah_pura" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="pura"><i class="fa fa-check"></i></button>
                                        </span>
                                    </div>
                                    <div id="pupu" class="seratus box">
                                        <input type="number" id="pupu-1" class="column-input input-1 input-number" tipe="pupu">
                                        <input type="number" id="pupu-2" class="column-input input-2 input-number" tipe="pupu">
                                        <input type="number" id="pupu-3" class="column-input input-3 input-number" tipe="pupu">
                                        <input type="number" id="pupu-4" class="column-input input-4 input-number" tipe="pupu">
                                        <input type="number" id="pupu-5" class="column-input input-5 input-number" tipe="pupu">
                                        <input type="number" id="pupu-6" class="column-input input-6 input-number" tipe="pupu">
                                        <input type="number" id="pupu-7" class="column-input input-7 input-number" tipe="pupu">
                                        <input type="number" id="pupu-8" class="column-input input-8 input-number" tipe="pupu">
                                        <input type="number" id="pupu-9" class="column-input input-9 input-number" tipe="pupu">
                                        <span>
                                            <input id="jumlah_pupu" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="pupu"><i class="fa fa-check"></i></button>
                                        </span>
                                    </div>
                                    <div id="pusa" class="sepuluh box">
                                        <input type="number" id="pusa-1" class="column-input input-1 input-number" tipe="pusa">
                                        <input type="number" id="pusa-2" class="column-input input-2 input-number" tipe="pusa">
                                        <input type="number" id="pusa-3" class="column-input input-3 input-number" tipe="pusa">
                                        <input type="number" id="pusa-4" class="column-input input-4 input-number" tipe="pusa">
                                        <input type="number" id="pusa-5" class="column-input input-5 input-number" tipe="pusa">
                                        <input type="number" id="pusa-6" class="column-input input-6 input-number" tipe="pusa">
                                        <input type="number" id="pusa-7" class="column-input input-7 input-number" tipe="pusa">
                                        <input type="number" id="pusa-8" class="column-input input-8 input-number" tipe="pusa">
                                        <input type="number" id="pusa-9" class="column-input input-9 input-number" tipe="pusa">
                                        <span>
                                            <input id="jumlah_pusa" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="pusa"><i class="fa fa-check"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <div id="flex-row">
                                    <div id="sara" class="seratus box">
                                        <input type="number" id="sara-1" class="column-input input-1 input-number" tipe="sara">
                                        <input type="number" id="sara-2" class="column-input input-2 input-number" tipe="sara">
                                        <input type="number" id="sara-3" class="column-input input-3 input-number" tipe="sara">
                                        <input type="number" id="sara-4" class="column-input input-4 input-number" tipe="sara">
                                        <input type="number" id="sara-5" class="column-input input-5 input-number" tipe="sara">
                                        <input type="number" id="sara-6" class="column-input input-6 input-number" tipe="sara">
                                        <input type="number" id="sara-7" class="column-input input-7 input-number" tipe="sara">
                                        <input type="number" id="sara-8" class="column-input input-8 input-number" tipe="sara">
                                        <input type="number" id="sara-9" class="column-input input-9 input-number" tipe="sara">
                                        <span>
                                            <input id="jumlah_sara" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="sara"><i class="fa fa-check"></i></button>
                                        </span>
                                    </div>
                                    <div id="sapu" class="sepuluh box">
                                        <input type="number" id="sapu-1" class="column-input input-1 input-number" tipe="sapu">
                                        <input type="number" id="sapu-2" class="column-input input-2 input-number" tipe="sapu">
                                        <input type="number" id="sapu-3" class="column-input input-3 input-number" tipe="sapu">
                                        <input type="number" id="sapu-4" class="column-input input-4 input-number" tipe="sapu">
                                        <input type="number" id="sapu-5" class="column-input input-5 input-number" tipe="sapu">
                                        <input type="number" id="sapu-6" class="column-input input-6 input-number" tipe="sapu">
                                        <input type="number" id="sapu-7" class="column-input input-7 input-number" tipe="sapu">
                                        <input type="number" id="sapu-8" class="column-input input-8 input-number" tipe="sapu">
                                        <input type="number" id="sapu-9" class="column-input input-9 input-number" tipe="sapu">
                                        <span>
                                            <input id="jumlah_sapu" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="sapu"><i class="fa fa-check"></i></button>
                                        </span>
                                    </div>
                                    <div id="sasa" class="satu box">
                                        <input type="number" id="sasa-1" class="column-input input-1 input-number" tipe="sasa">
                                        <input type="number" id="sasa-2" class="column-input input-2 input-number" tipe="sasa">
                                        <input type="number" id="sasa-3" class="column-input input-3 input-number" tipe="sasa">
                                        <input type="number" id="sasa-4" class="column-input input-4 input-number" tipe="sasa">
                                        <input type="number" id="sasa-5" class="column-input input-5 input-number" tipe="sasa">
                                        <input type="number" id="sasa-6" class="column-input input-6 input-number" tipe="sasa">
                                        <input type="number" id="sasa-7" class="column-input input-7 input-number" tipe="sasa">
                                        <input type="number" id="sasa-8" class="column-input input-8 input-number" tipe="sasa">
                                        <input type="number" id="sasa-9" class="column-input input-9 input-number" tipe="sasa">
                                        <span>
                                            <input id="jumlah_sasa" type="number" class="column-input column-jumlah">
                                            <button type="button" class="btn-jumlah" style="display: none;" tipe="sasa"><i class="fa fa-check"></i></button>
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
                                <h3 id="hasil_total">
                                </h3> 
                            </div>
                        </td>
                    </tr>
                </table>
                
            </div>

        </div>
    </div>
</main>

<!-- The Modal -->
<div id="modal_totorial" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="text-align: center; margin: 10px;">TUTORIAL</h2>
        <hr>
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
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        // MODAL //
        $('#btn_tutorial').click(function (e) { 
            $('#modal_totorial').css('display', 'block');
        });
        $('.close').click(function (e) { 
            $('#modal_totorial').css('display', 'none');
        });

        var doTimer;
        var clickSimpan = false;
        let userId = '{{ Auth::user()->id }}';

        let score = 0;
        let currentQuestion = {};
        let questionCounter = 0;
        let availableQuesions = [];
        const CORRECT_BONUS = 20;
        const MAX_QUESTIONS = 5;

        let questions = [
            {
                question : "4 x 9",
                answer : 36
            },
            {
                question : "6 x 123",
                answer : 738
            },
            {
                question : "111 x 25",
                answer : 2775
            },
            {
                question : "442 x 70",
                answer : 30940
            },
            {
                question : "300 x 800",
                answer : 240000
            },
        ];

        startGame = () => {
            questionCounter = 0;
            availableQuesions = [...questions];
            getNewQuestion();
        }
        
        getNewQuestion = () => {
            $('#questionCounter').text(`${questionCounter + 1}/${MAX_QUESTIONS}`);
            currentQuestion = availableQuesions[questionCounter];
                
            $('#soal').text(currentQuestion.question);
            questionCounter++;
        }  

        incrementScore = num => {
            score += num;
        }

        $('#btn_mulai').click(function (e) { 
            $('#pembuka').remove();
            $('#btn_simpan').css('display','block');
            $(this).css('display','none');

            $('#papan').css('display', '');
            startGame();
            setTimer();
        });

        $('#btn_selesai').click(function (e) { 
            let selectedAnswer = $('#hasil_total').text();
            const classToApply = selectedAnswer == currentQuestion.answer ? "benar" : "salah";
            console.log(classToApply);

            if (classToApply === "benar") {
                incrementScore(CORRECT_BONUS);
            }

            setTimeout( () => {
                if (questionCounter >= 5) {
                    $('#btn_simpan').trigger("click");
                } else {
                    getNewQuestion();
                    resetPapan();
                }
            }, 1000);
        });

        $('#btn_simpan').click(function (e) {
            clearInterval(doTimer);
            clickSimpan = true;
            clearCard();
            questionCounter = 5;

            doSave();
        });

        $('#btn_reset').click(function (e) { 
            resetPapan();
        });

        clearCard = () => {
            $('#header-game').html(`<div class="text-center">
                                <h1 style="color: red;"> EVALUASI SELESAI</h1>
                            </div>`);
        }

        // PAPAN //
        $('.input-number').change(function (e) {
            let tipe = $(this).attr('tipe');
            let dataInputNumber = Array.from($(`input[tipe='${tipe}']`));
            let dataInputJumlah = dataInputNumber.map(number => {
                                                        const numb = number.value == "" ? 0 :  parseInt(number.value);
                                                        return numb;
                                                    })
                                                    .reduce((total, number) => {
                                                        return total += number;
                                                    });

            $(`#jumlah_${tipe}`).val(dataInputJumlah);
            $(`.btn-jumlah[tipe=${tipe}]`).css('display', 'block');
        });

        $('.btn-jumlah').click(function (e) { 
            let tipe = $(this).attr('tipe');
            let dataInputJumlah = $(`#jumlah_${tipe}`).val();
            $(`li[tipe=${tipe}]`).remove();
            let li = `<li data-jumlah="${dataInputJumlah}" tipe=${tipe}>${dataInputJumlah}</li>`;
            $('#hasil_jumlah').append(li);
            
            $(this).css('display', 'none');

            let listJumlah = Array.from($('[data-jumlah]'));
            let hasilTotal = listJumlah.map(number => parseInt(number.dataset.jumlah))
                                        .reduce((total, number) => {
                                            return total += number;
                                        });
            $('#hasil_total').text(hasilTotal);
        });

        function resetPapan() {
            $('.line').remove();
            $('#papan input').val('');
            $('.btn-jumlah').css('display', 'none');
            $('#hasil_jumlah').html('');
            $('#hasil_total').text('');
        }

        function setTimer() {
            let now = new Date();
            let later = new Date();
            later.setMinutes(now.getMinutes() + 12);

            doTimer = setInterval(function() {
                let distance = later.getTime() - new Date().getTime();
        
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                if (distance < 0) {
                    clearInterval(doTimer);
                    if (!clickSimpan) {
                        $('#btn_simpan').trigger('click');
                    }
                } else {
                    let minutesDis = ("0" + minutes).slice(-2);
                    let secondsDis = ("0" + seconds).slice(-2);
                    $('#timer').html(minutesDis + ":" + secondsDis);
                }
            }, 1000);
        }

        function doSave() {
            $.ajax({
                type: "POST",
                url: "{{ route('nilai-api.store') }}",
                data: {
                    "user_id" : userId,
                    'skor' : score,
                    'level' : 1
                },
                dataType: "JSON",
                success: function (response) {
                    let data = response.data;
                    
                    if (response.status) {
                        Swal.fire({
                            title: `${data.sebutan} (${data.skor})`,
                            text: 'Horee, Quiz Level 1 Telah di Selesaikan',
                            imageUrl: `{{ asset('img/sebutan/`+ data.sebutan +`.gif') }}`,
                            imageWidth: 400,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                        }).then((result) => {
                            Swal.fire({
                                title: 'TETAP MAIN?',
                                text: "Tekan Yes untuk Lanjut ke Quiz Level 2",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes',
                                cancelButtonText: 'No'
                            }).then((result) => {
                                if (result.value) {
                                    document.location.href = "{{ route('permainan.index', 2) }}"
                                } else {
                                    document.location.href = "{{ route('home') }}"; 
                                }
                            });
                        })
                    } else {
                        alert("GAGAL");
                    }
                    
                }
            });
        }


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
            if ($(this).hasClass('first_dot')) {
                let parent = parseInt($(this).attr('parent_value'));
                let order = parseInt($(this).attr('order_value'));
                let dotId = `dot_container_${parent}_1`;		

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
            }
        });

    });
</script>
@endsection
</body>
</html>