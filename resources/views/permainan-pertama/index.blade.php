@extends('layouts.frontend')

@section('css')
    <link href="{{ asset('css/app-game.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="permainan_pertama" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>RONDE 1</h2>
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
                    <h3>Ronde ini terdiri dari beberapa pernyataan. Jika menurutmu pernyataan itu benar, pilihlah <u>BENAR</u> dan jika menurutmu pertanyaan itu salah, pilihlah <u>SALAH</u></h3>
                    <h1> SILAHKAN KLIK MULAI</h1>
                </div>
                <div id="soal-game" style="display: none;">
                    <div id="question" class="text-center" style="margin-bottom: 20px;">
                        <h3>ini soal</h3>
                    </div>
                    <div class="choice-container" data-number="1">
                        <p class="choice-prefix">A</p>
                        <p class="choice-text">Benar</p>
                    </div>
                    <div class="choice-container" data-number="2">
                        <p class="choice-prefix">B</p>
                        <p class="choice-text">Salah</p>
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
                question : "<span class='text-soal'>Diagram lingkaran terdiri dari beberapa bagian juring yang tidak menunjukkan besar data.</span>",
                choice1: "Benar",
                choice2: "Salah",
                answer: 2
            },
            {
                question : "<span class='text-soal'>Saat menggambar diagram lingkaran, kita dapat menggunakan busur derajat agar besar bagian (juring) sesuai dengan besar sudut.</span>",
                choice1: "Benar",
                choice2: "Salah",
                answer: 1
            },
            {
                question : `<span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture2.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="left">
                            </span>
                            <span class='text-soal'>Berdasarkan diagram tersebut, persentase siswa yang menyukai mata pelajaran PAI yaitu 25%. </span>`,
                    choice1: "Benar",
                    choice2: "Salah",
                    answer: 1
            },
            {
                question : `<span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture3.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="left">
                            </span>
                            <span class='text-soal'>Jika ditambahkan, jumlah siswa yang menyukai warna merah muda dan biru sama dengan jumlah siswa yang menyukai warna putih dan merah.</span>`,
                choice1: "Benar",
                choice2: "Salah",
                answer: 2
            },
            {   
                question : `<span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture4-2.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="left">
                            </span>
                            <span class='text-soal'>Jika data dalam bentuk tabel tersebut disajikan dalam diagram lingkaran akan menjadi seperti berikut.</span>
                            <span class='img-soal'>
                                <img src="{{ asset('img/soal/Picture4.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" align="right">
                            </span>`,
                choice1: "Benar",
                choice2: "Salah",
                answer: 1
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
                const number = valueOfElement.dataset["number"];
                const paraf = valueOfElement.querySelector('.choice-text');
                $(paraf).text(currentQuestion["choice" + number]);
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
                const selectedAnswer = valueOfElement.dataset["number"];

                const classToApply = selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";

                if (classToApply === "correct") {
                    incrementScore(CORRECT_BONUS);
                }

                valueOfElement.classList.add(classToApply);
                
                setTimeout( () => {
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
                                <h1 style="color: red;"> GAME RONDE 1 SELESAI</h1>
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

            $('#audio-soal').trigger('pause');
            doSave();
        });
        
        function doSave() {
            $.ajax({
                type: "POST",
                url: "{{ route('nilai-api.store') }}",
                data: {
                    "user_id" : userId,
                    'skor' : score,
                    'ronde' : 1
                },
                dataType: "JSON",
                success: function (response) {
                    let data = response.data;
                    
                    if (response.status) {
                        Swal.fire({
                            title: data.sebutan,
                            text: 'Selamat, Ronde 1 telah di Selesaikan',
                            imageUrl: `{{ asset('img/soal/`+ data.sebutan +`.gif') }}`,
                            imageWidth: 400,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                        }).then((result) => {
                            Swal.fire({
                                title: 'TETAP MAIN?',
                                text: "Pilih Yes untuk Lanjut ke Ronde 2",
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
                                    document.location.href = "{{ route('materi.index') }}"; 
                                }
                            });
                        })
                    } else {
                        alert("GAGAL");
                    }
                    
                }
            });
        }
    </script>
@endsection