@extends('layouts.frontend')

@section('css')
    <link href="{{ asset('css/app-game.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="permainan_pertama" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>RONDE 2</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div id="game" class="justify-center flex-column custom-card">
                <div id="hud">
                    <div id="hud-item">
                        <p class="hud-prefix">
                        Soal
                        </p>
                        <h1 class="hud-main-text" id="questionCounter">0/5</h1>
                    </div>
                    <div id="hud-item">
                        <p class="hud-prefix">
                        Waktu
                        </p>
                        <div class="hud-main-text" id="timer">
                            <h1>2:00</h1>
                        </div>
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
                    <h3>Pilihan Ganda, Pilihlah jawaban yang paling tepat</h3>
                    <h1> SILAHKAN KLIK MULAI</h1>
                </div>
                <div id="soal-game" style="display: none;">
                    <div id="question" class="text-center" style="margin-bottom: 20px;">
                        <h3>ini soal</h3>
                    </div>
                    <div class="choice-container" data-number="1">
                        <p class="choice-prefix">A</p>
                        <p class="choice-text">A</p>
                    </div>
                    <div class="choice-container" data-number="2">
                        <p class="choice-prefix">B</p>
                        <p class="choice-text">B</p>
                    </div>
                    <div class="choice-container" data-number="3">
                        <p class="choice-prefix">C</p>
                        <p class="choice-text">C</p>
                    </div>
                    <div class="choice-container" data-number="4">
                        <p class="choice-prefix">D</p>
                        <p class="choice-text">D</p>
                        </div>    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript">
        var time = 60;
        var minute = 1;
        var clickSimpan = false;

        let userId = '{{ Auth::user()->id }}';

        const choices = Array.from($('.choice-container'));
        
        let currentQuestion = {};
        let acceptingAnswers = false;
        let score = 0;
        let questionCounter = 0;
        let availableQuesions = [];
        
        let questions = [
            {
                question : "<span class='text-soal'>Untuk mempermudah dalam membuat diagram lingkaran, langkah yang harus dilakukan yaitu:</span>",
                choice1: "<p class='choice-text' data-number='1'>Menyajikan data dalam bentuk tabel</p>",
                choice2: "<p class='choice-text' data-number='2'>Menentukan warna untuk diagram lingkaran.</p>",
                choice3: "<p class='choice-text' data-number='3'>Menentukan sumber data.</p>",
                choice4: "<p class='choice-text' data-number='4'>Mengira-ngira ukuran lingkaran.</p>",
                answer: 1
            },
            {
                question : `<span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture32.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="center">
                            </span>
                            <span class='text-soal'>Berdasarkan diagram di atas, ukuran sepatu siswa kelas IV yang paling banyak adalah ...</span>`,
                    choice1: "<p class='choice-text' data-number='1'>36 cm</p>",
                    choice2: "<p class='choice-text' data-number='2'>37 cm </p>",
                    choice3: "<p class='choice-text' data-number='3'>38 cm</p>",
                    choice4: "<p class='choice-text' data-number='4'>39 cm</p>",
                    answer: 1
            },
            {
                question : `<span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture26.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="center">
                            </span>
                            <span class='text-soal'>Jika banyak siswa 40 orang, berapa jumlah orang tua siswa yang pekerjaannya pengusaha?</span>`,
                    choice1: "<p class='choice-text' data-number='1'>6 orang</p>",
                    choice2: "<p class='choice-text' data-number='2'>7 orang</p>",
                    choice3: "<p class='choice-text' data-number='3'>8 orang</p>",
                    choice4: "<p class='choice-text' data-number='4'>9 orang</p>",
                    answer: 3
            },
            {
                question : `<span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture31.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="center">
                            </span>
                            <span class='text-soal'>Jika banyak siswa yang memiliki tinggi badan 130 cm, 133 cm, dan 134 cm secara berturut-turut adalah 6,10 dan 16 maka selisih banyak siswa yang memiliki tinggi badan 133 cm dan 135 cm adalah</span>`,
                    choice1: "<p class='choice-text' data-number='1'>2 siswa</p>",
                    choice2: "<p class='choice-text' data-number='2'>4 siswa</p>",
                    choice3: "<p class='choice-text' data-number='3'>6 siswa</p>",
                    choice4: "<p class='choice-text' data-number='4'>8 siswa</p>",
                    answer: 1
            },
            {
                question : `<span class='text-soal'>Perhatikan data nilai matematika 20 siswa kelas IV MI Maftahul Ulum berikut!</span>
                            <span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture29.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="center">
                            </span>
                            <span class='text-soal'>Diagram garis yang sesuai dengan data tersebut adalah ...</span>`,
                choice1: `<img src="{{ asset('img/soal/Picture29-1.png') }}" data-number='1' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                choice2: `<img src="{{ asset('img/soal/Picture29-2.png') }}" data-number='2' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                choice3: `<img src="{{ asset('img/soal/Picture29-3.png') }}" data-number='3' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                choice4: `<img src="{{ asset('img/soal/Picture29-4.png') }}" data-number='4' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                answer: 4
            },     
        ];

        const CORRECT_BONUS = 10;
        const MAX_QUESTIONS = 5;

        startGame = () => {
            questionCounter = 0;
            availableQuesions = [...questions];
            getNewQuestion();
        }

        getNewQuestion = () => {
            questionCounter++;
            $('#questionCounter').text(`${questionCounter}/${MAX_QUESTIONS}`);
            
            const questionIndex = Math.floor(Math.random() * availableQuesions.length);
            currentQuestion = availableQuesions[questionIndex];
            $('#question').html(currentQuestion.question);


            $.each(choices, function (indexInArray, valueOfElement) { 
                console.log(valueOfElement);
                const number = valueOfElement.dataset["number"];
                const paraf = valueOfElement.querySelector('.choice-text');
                $(paraf).html(currentQuestion["choice" + number]);
            });

            availableQuesions.splice(questionIndex, 1);
            acceptingAnswers = true;
        };

        $.each(choices, function (indexInArray, valueOfElement) { 
            $(valueOfElement).click(function (e) { 
                time = 60;
                minute = 1;
                if (!acceptingAnswers) return;

                acceptingAnswers = false;
                // const selectedChoice = e.target;
                const selectedAnswer = valueOfElement.dataset["number"];

                const classToApply = selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";

                if (classToApply === "correct") {
                    incrementScore(CORRECT_BONUS);
                }

                // selectedChoice.parentElement.classList.add(classToApply);
                valueOfElement.classList.add(classToApply);
                
                setTimeout( () => {
                    // selectedChoice.parentElement.classList.remove(classToApply);
                    valueOfElement.classList.remove(classToApply);
                    if (availableQuesions.length === 0) {
                        $('#btn_simpan').trigger("click");
                    } else {
                        getNewQuestion();
                    }
                }, 1000);

                $('#audio-jawab').trigger('play');
            });
        });

        incrementScore = num => {
            score += num;
        }

        clearCard = () => {
            $('#game').html(`<div class="text-center">
                                <h1 style="color: red;"> GAME RONDE 2 SELESAI</h1>
                            </div>`);
        }
        
        $('#btn_mulai').click(function (e) { 
            $('#header-game').css('display','none');
            $('#soal-game').css('display','block');
            $('#btn_simpan').css('display','block');
            $(this).css('display','none');

            startGame();
            setInterval(doUpdate, 1000);

            $('#audio-soal').trigger('play');
        });
        
        var doUpdate = function () {
            time--;
            let timeDis = ("0" + time).slice(-2);
            if (time >= 0) {
                $('#timer').html("<h1>" + minute + ":" + timeDis +"</h1>");
            } 
            if (!clickSimpan) {
                if (time == 0) {
                    if (minute == 1) {
                        time = 60;
                        minute = 0;
                    } else {
                        if (questionCounter < MAX_QUESTIONS) {
                            getNewQuestion();
                            time = 60;
                            minute = 1;
                        } else {
                            clearCard();

                            doSave();
                        }
                    }
                } 
            }
        }

        $('#btn_simpan').click(function (e) { 
            clearCard();
            questionCounter = 10;
            clickSimpan = true;

            doSave();
            $('#audio-soal').trigger('pause');
        });
        
        function doSave() {
            $.ajax({
                type: "POST",
                url: "{{ route('nilai-api.store') }}",
                data: {
                    "user_id" : userId,
                    'skor' : score,
                    'ronde' : 2
                },
                dataType: "JSON",
                success: function (response) {
                    let data = response.data;
                    
                    if (response.status) {
                        Swal.fire({
                            title: data.sebutan,
                            text: 'Selamat, Ronde 2 telah di Selesaikan',
                            imageUrl: `{{ asset('img/soal/`+ data.sebutan +`.gif') }}`,
                            imageWidth: 400,
                            imageHeight: 200,
                            imageAlt: 'Gambar ',
                        }).then((result) => {
                            document.location.href = "{{ route('angket.index') }}"; 
                        })
                    } else {
                        alert("GAGAL");
                    }
                    
                }
            });
        }
    </script>
@endsection