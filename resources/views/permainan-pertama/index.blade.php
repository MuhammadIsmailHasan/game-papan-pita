<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papan Pita Perkalian</title>

    <link href="{{ asset('css/games.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
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
                            2:00
                        </h2>
                    </div>
                    <div class="audio" style="display: none;">
                        <audio id="audio-soal" controls loop>
                            <source src="{{ asset('audio/backsound.mp3') }}" type="audio/mpeg">
                        </audio>
                        <audio id="audio-jawab" src="{{ asset('audio/jawab.mp3') }}"></audio>
                    </div>
                    <div id="hud-item">
                        <button id="btn_mulai" type="button" class="btn btn-primary hud-prefix"> MULAI</button>   
                        <button id="btn_simpan" style="display: none;" type="button" class="btn btn-success hud-prefix"> SELESAI</button>   
                    </div>
                </div>

                <hr>
                
                <div id="header-game" class="text-center">
                    {{-- <h1> SILAHKAN KLIK MULAI</h1> --}}
                    <table id="papan">
                        <tr style="background-color: dimgray;">
                            <th colspan="5"><h1 style="margin: 5px;">PAPAN PITA PERKALIAN</h1></th>
                        </tr>
                        <tr class="first_row">
                            <td class="first_column">31x73 : ...</td>
                            <td class="header_column">RATUSAN</td>
                            <td class="header_column">PULUHAN</td>
                            <td class="header_column">SATUAN</td>
                            <td rowspan="3" class="last_column">Tutorial</td>
                        </tr>
                        <tr class="header_row">
                            <td>RATUSAN</td>
                            <td colspan="3" rowspan="3" style="padding: 0;">
                                <div id="canvas">
                                    <div id="flex-row">
                                        <div id="rara" class="sepuluh-ribu box">
                                            <input type="text" id="rara-1" class="input-col input-1 input-number" tipe="rara">
                                            <input type="text" id="rara-2" class="input-col input-2 input-number" tipe="rara">
                                            <input type="text" id="rara-3" class="input-col input-3 input-number" tipe="rara">
                                            <input type="text" id="rara-4" class="input-col input-4 input-number" tipe="rara">
                                            <input type="text" id="rara-5" class="input-col input-5 input-number" tipe="rara">
                                            <input type="text" id="rara-6" class="input-col input-6 input-number" tipe="rara">
                                            <input type="text" id="rara-7" class="input-col input-7 input-number" tipe="rara">
                                            <input type="text" id="rara-8" class="input-col input-8 input-number" tipe="rara">
                                            <input type="text" id="rara-9" class="input-col input-9 input-number" tipe="rara">
                                            <span>
                                                <input id="total-rara" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="rara"><i class="fa fa-check"></i></button>
                                            </span>
                                            
                                        </div>
                                        <div id="rapu" class="seribu box">
                                            <input type="text" id="rapu-1" class="input-col input-1 input-number" tipe="rapu">
                                            <input type="text" id="rapu-2" class="input-col input-2 input-number" tipe="rapu">
                                            <input type="text" id="rapu-3" class="input-col input-3 input-number" tipe="rapu">
                                            <input type="text" id="rapu-4" class="input-col input-4 input-number" tipe="rapu">
                                            <input type="text" id="rapu-5" class="input-col input-5 input-number" tipe="rapu">
                                            <input type="text" id="rapu-6" class="input-col input-6 input-number" tipe="rapu">
                                            <input type="text" id="rapu-7" class="input-col input-7 input-number" tipe="rapu">
                                            <input type="text" id="rapu-8" class="input-col input-8 input-number" tipe="rapu">
                                            <input type="text" id="rapu-9" class="input-col input-9 input-number" tipe="rapu">
                                            <span>
                                                <input id="total-rapu" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="rapu"><i class="fa fa-check"></i></button>
                                            </span>
                                        </div>
                                        <div id="rasa" class="seratus box">
                                            <input type="text" id="rasa-1" class="input-col input-1 input-number" tipe="rasa">
                                            <input type="text" id="rasa-2" class="input-col input-2 input-number" tipe="rasa">
                                            <input type="text" id="rasa-3" class="input-col input-3 input-number" tipe="rasa">
                                            <input type="text" id="rasa-4" class="input-col input-4 input-number" tipe="rasa">
                                            <input type="text" id="rasa-5" class="input-col input-5 input-number" tipe="rasa">
                                            <input type="text" id="rasa-6" class="input-col input-6 input-number" tipe="rasa">
                                            <input type="text" id="rasa-7" class="input-col input-7 input-number" tipe="rasa">
                                            <input type="text" id="rasa-8" class="input-col input-8 input-number" tipe="rasa">
                                            <input type="text" id="rasa-9" class="input-col input-9 input-number" tipe="rasa">
                                            <span>
                                                <input id="total-rasa" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="rasa"><i class="fa fa-check"></i></button>
                                            </span>
                                        </div>
                                    </div>

                                    <div id="flex-row">
                                        <div id="pura" class="seribu box">
                                            <input type="text" id="pura-1" class="input-col input-1 input-number" tipe="pura">
                                            <input type="text" id="pura-2" class="input-col input-2 input-number" tipe="pura">
                                            <input type="text" id="pura-3" class="input-col input-3 input-number" tipe="pura">
                                            <input type="text" id="pura-4" class="input-col input-4 input-number" tipe="pura">
                                            <input type="text" id="pura-5" class="input-col input-5 input-number" tipe="pura">
                                            <input type="text" id="pura-6" class="input-col input-6 input-number" tipe="pura">
                                            <input type="text" id="pura-7" class="input-col input-7 input-number" tipe="pura">
                                            <input type="text" id="pura-8" class="input-col input-8 input-number" tipe="pura">
                                            <input type="text" id="pura-9" class="input-col input-9 input-number" tipe="pura">
                                            <span>
                                                <input id="total-pura" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="pura"><i class="fa fa-check"></i></button>
                                            </span>
                                        </div>
                                        <div id="pupu" class="seratus box">
                                            <input type="text" id="pupu-1" class="input-col input-1 input-number" tipe="pupu">
                                            <input type="text" id="pupu-2" class="input-col input-2 input-number" tipe="pupu">
                                            <input type="text" id="pupu-3" class="input-col input-3 input-number" tipe="pupu">
                                            <input type="text" id="pupu-4" class="input-col input-4 input-number" tipe="pupu">
                                            <input type="text" id="pupu-5" class="input-col input-5 input-number" tipe="pupu">
                                            <input type="text" id="pupu-6" class="input-col input-6 input-number" tipe="pupu">
                                            <input type="text" id="pupu-7" class="input-col input-7 input-number" tipe="pupu">
                                            <input type="text" id="pupu-8" class="input-col input-8 input-number" tipe="pupu">
                                            <input type="text" id="pupu-9" class="input-col input-9 input-number" tipe="pupu">
                                            <span>
                                                <input id="total-pupu" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="pupu"><i class="fa fa-check"></i></button>
                                            </span>
                                        </div>
                                        <div id="pusa" class="sepuluh box">
                                            <input type="text" id="pusa-1" class="input-col input-1 input-number" tipe="pusa">
                                            <input type="text" id="pusa-2" class="input-col input-2 input-number" tipe="pusa">
                                            <input type="text" id="pusa-3" class="input-col input-3 input-number" tipe="pusa">
                                            <input type="text" id="pusa-4" class="input-col input-4 input-number" tipe="pusa">
                                            <input type="text" id="pusa-5" class="input-col input-5 input-number" tipe="pusa">
                                            <input type="text" id="pusa-6" class="input-col input-6 input-number" tipe="pusa">
                                            <input type="text" id="pusa-7" class="input-col input-7 input-number" tipe="pusa">
                                            <input type="text" id="pusa-8" class="input-col input-8 input-number" tipe="pusa">
                                            <input type="text" id="pusa-9" class="input-col input-9 input-number" tipe="pusa">
                                            <span>
                                                <input id="total-pusa" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="pusa"><i class="fa fa-check"></i></button>
                                            </span>
                                        </div>
                                    </div>

                                    <div id="flex-row">
                                        <div id="sara" class="seratus box">
                                            <input type="text" id="sara-1" class="input-col input-1 input-number" tipe="sara">
                                            <input type="text" id="sara-2" class="input-col input-2 input-number" tipe="sara">
                                            <input type="text" id="sara-3" class="input-col input-3 input-number" tipe="sara">
                                            <input type="text" id="sara-4" class="input-col input-4 input-number" tipe="sara">
                                            <input type="text" id="sara-5" class="input-col input-5 input-number" tipe="sara">
                                            <input type="text" id="sara-6" class="input-col input-6 input-number" tipe="sara">
                                            <input type="text" id="sara-7" class="input-col input-7 input-number" tipe="sara">
                                            <input type="text" id="sara-8" class="input-col input-8 input-number" tipe="sara">
                                            <input type="text" id="sara-9" class="input-col input-9 input-number" tipe="sara">
                                            <span>
                                                <input id="total-sara" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="sara"><i class="fa fa-check"></i></button>
                                            </span>
                                        </div>
                                        <div id="sapu" class="sepuluh box">
                                            <input type="text" id="sapu-1" class="input-col input-1 input-number" tipe="sapu">
                                            <input type="text" id="sapu-2" class="input-col input-2 input-number" tipe="sapu">
                                            <input type="text" id="sapu-3" class="input-col input-3 input-number" tipe="sapu">
                                            <input type="text" id="sapu-4" class="input-col input-4 input-number" tipe="sapu">
                                            <input type="text" id="sapu-5" class="input-col input-5 input-number" tipe="sapu">
                                            <input type="text" id="sapu-6" class="input-col input-6 input-number" tipe="sapu">
                                            <input type="text" id="sapu-7" class="input-col input-7 input-number" tipe="sapu">
                                            <input type="text" id="sapu-8" class="input-col input-8 input-number" tipe="sapu">
                                            <input type="text" id="sapu-9" class="input-col input-9 input-number" tipe="sapu">
                                            <span>
                                                <input id="total-sapu" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="sapu"><i class="fa fa-check"></i></button>
                                            </span>
                                        </div>
                                        <div id="sasa" class="satu box">
                                            <input type="text" id="sasa-1" class="input-col input-1 input-number" tipe="sasa">
                                            <input type="text" id="sasa-2" class="input-col input-2 input-number" tipe="sasa">
                                            <input type="text" id="sasa-3" class="input-col input-3 input-number" tipe="sasa">
                                            <input type="text" id="sasa-4" class="input-col input-4 input-number" tipe="sasa">
                                            <input type="text" id="sasa-5" class="input-col input-5 input-number" tipe="sasa">
                                            <input type="text" id="sasa-6" class="input-col input-6 input-number" tipe="sasa">
                                            <input type="text" id="sasa-7" class="input-col input-7 input-number" tipe="sasa">
                                            <input type="text" id="sasa-8" class="input-col input-8 input-number" tipe="sasa">
                                            <input type="text" id="sasa-9" class="input-col input-9 input-number" tipe="sasa">
                                            <span>
                                                <input id="total-sasa" type="text" class="input-col total-col">
                                                <button type="button" class="btn-col btn-total" tipe="sasa"><i class="fa fa-check"></i></button>
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
                                    <ul id="hasil_number">
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
    <script src="{{ asset('frontend/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/games.js') }}"></script>
</body>
</html>