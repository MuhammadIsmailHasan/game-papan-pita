@extends('layouts.frontend-game')

@section('content')
<div class="container">
    <div id="game" class="justify-center flex-column">
        <h1>QUIZ LEVEL 1</h1>
        <div id="hud">
            <div id="hud-item">
                <p id="progressText" class="hud-prefix">
                    Jumlah Soal 5
                </p>
                <div id="progressBar">
                    <div id="progressBarFull"></div>
                </div>
            </div>
            <div id="hud-item">
                <p class="hud-prefix">
                    Waktu
                </p>
                <div id="timer">
                    <h1 class="hud-main-text">
                        10:00
                    </h1>
                </div>
            </div>
            <div id="hud-item">
                <button id="btn_mulai" type="button" class="btn">MULAI</button>
                <button id="btn_selesai" style="display: none;" type="button" class="btn btn-primary">SELESAI</button>
            </div>
        </div>
        <hr>
        <div id="game_header" class="text-center">
            <h3>Pilihan Ganda, Jadi Pilihlah Jawaban yang Paling Tepat</h3>
            <h1>KLIK TOMBOL MULAI</h1>
        </div>
        <div id="game_question" style="display: none;">
            <h2 id="question">What is the answer to this questions?</h2>
            <div class="choice-container" data-number="1">
                <p class="choice-prefix">A</p>
                <p class="choice-text">Choice 1</p>
            </div>
            <div class="choice-container" data-number="2">
                <p class="choice-prefix">B</p>
                <p class="choice-text">Choice 2</p>
            </div>
            <div class="choice-container" data-number="3">
                <p class="choice-prefix">C</p>
                <p class="choice-text">Choice 3</p>
            </div>
            <div class="choice-container" data-number="4">
                <p class="choice-prefix">D</p>
                <p class="choice-text">Choice 4</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () { 
        var doTimer;
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
                question: "Pada perkalian 4 x 9 = 36, bilangan manakah yang disebut faktor perkalian ?",
                choice1: "36",
                choice2: "9 dan 36",
                choice3: "4 dan 9",
                choice4: "4 saja",
                answer: 3
            },
            {
                question: "Pada perkalian 8 x 9 = 72, bilangan manakan yang disebut hasil kali ?",
                choice1: "89",
                choice2: "72",
                choice3: "9",
                choice4: "8",
                answer: 2
            },
            {
                question: "6 x 123 = ...",
                choice1: "738",
                choice2: "768",
                choice3: "849",
                choice4: "628",
                answer: 1
            },
            {
                question: "111 x 25 = ...",
                choice1: "2.775",
                choice2: "2.525",
                choice3: "1.125",
                choice4: "777",
                answer: 1
            },
            {
                question: "300 x  800 = ...",
                choice1: "24.000",
                choice2: "24",
                choice3: "2.400",
                choice4: "240.000",
                answer: 4
            },
        ];

        //CONSTANTS
        const CORRECT_BONUS = 20;
        const MAX_QUESTIONS = 5;

        startGame = () => {
            questionCounter = 0;
            score = 0;
            availableQuesions = [...questions];
            getNewQuestion();
        };

        getNewQuestion = () => {
            questionCounter++;
            $('#progressText').text(`Soal Ke-${questionCounter} dari ${MAX_QUESTIONS}`);
            $('#progressBarFull').css('width', `${(questionCounter / MAX_QUESTIONS) * 100}%`);

            const questionIndex = Math.floor(Math.random() * availableQuesions.length);
            currentQuestion = availableQuesions[questionIndex];
            $('#question').text(currentQuestion.question);

            choices.forEach(choice => {
                const number = choice.dataset["number"];
                const choiceText = choice.querySelector('.choice-text');
                $(choiceText).text(currentQuestion["choice" + number]);
            });

            availableQuesions.splice(questionIndex, 1);
            acceptingAnswers = true;
        };

        choices.forEach(choice => {
            choice.addEventListener("click", e => {
                if (!acceptingAnswers) return;

                acceptingAnswers = false;
                const selectedAnswer = choice.dataset["number"];

                const classToApply = selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";

                if (classToApply === "correct") {
                    incrementScore(CORRECT_BONUS);
                }

                choice.classList.add(classToApply);

                setTimeout(() => {
                    choice.classList.remove(classToApply);
                    if (availableQuesions.length === 0) {
                        $('#btn_selesai').trigger("click");
                    } else {
                        getNewQuestion();
                    }
                }, 1000);
            });
        });

        incrementScore = num => {
            score += num;
        };

        clearCard = () => {
            $('#game').html(`<div class="text-center">
                                <h1 style="color: red;"> QUIZ SELESAI</h1>
                            </div>`);
        }

        $('#btn_mulai').click(function (e) { 
            $('#game_header').css('display','none');
            $('#game_question').css('display','block');
            $('#btn_selesai').css('display','block');
            $(this).css('display','none');
            startGame();
            setTimer();
        }); 

        function setTimer() {
            let now = new Date();
            let later = new Date();
            later.setMinutes(now.getMinutes() + 10);

            doTimer = setInterval(function() {
                let distance = later.getTime() - new Date().getTime();
        
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                if (distance < 0) {
                    clearInterval(doTimer);
                    if (!clickSimpan) {
                        $('#btn_selesai').trigger('click');
                    }
                } else {
                    let hoursDis = ("0" + hours).slice(-2);
                    let minutesDis = ("0" + minutes).slice(-2);
                    let secondsDis = ("0" + seconds).slice(-2);

                    $('#timer').html(`<h1 class="hud-main-text">${minutesDis}:${secondsDis}</h1>`);
                }
            }, 1000);
        }

        $('#btn_selesai').click(function (e) {
            clearInterval(doTimer);
            clearCard();
            clickSimpan = true;
            doSave();
        });
        
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

    });
</script>
@endsection