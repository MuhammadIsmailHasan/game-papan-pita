@extends('layouts.frontend-game')

@section('content')
<div class="container">
    <div id="game" class="justify-center flex-column">
        <h1>QUIZ LEVEL 2</h1>
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
                        12:00
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
            <h3>Pilihlah jawaban yang paling tepat diantara jawaban-jawaban berikut!</h3>
            <h1>KLIK TOMBOL MULAI</h1>
        </div>
        <div id="game_question" style="display: none;">
            <h3 id="question">What is the answer to this questions?</h3>
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
                question: "Ima pergi ke tukang sayur pagi-pagi untuk membeli sayur wortel. Dia mengambil 2 keranjang plastik yang masing-masing keranjang berisi 3 wortel. Berapa banyak wortel yang didapatkan ima ?",
                choice1: "9 wortel",
                choice2: "6 wortel",
                choice3: "5 wortel",
                choice4: "4 wortel",
                answer: 2
            },
            {
                question: "Kakak bekerja di sebuah toko ikan hias yang memiliki 7 akuarium. Masing-masing akuarium berisi 120 ikan koki. Berapa banyak ikan koki seluruhnya ?",
                choice1: "840 ikan koki",
                choice2: "740 ikan koki",
                choice3: "714 ikan koki",
                choice4: "220 ikan koki",
                answer: 1
            },
            {
                question: "Ibu sedang menghadiri acara peringatan maulid Nabi Muhammad SAW. di rumah ibu Leli. Ibu Leli menyiapkan 56 kotak kue untuk diberikan kepada warga yang menghadiri acara tersebut. Masing-masing kotak berisi  6 kue. Berapa banyak kue yang disiapkan ibu leli ?",
                choice1: "566 kue",
                choice2: "386 kue",
                choice3: "366 kue",
                choice4: "336 kue",
                answer: 4
            },
            {
                question: "Pak Edi seorang pedagang sayur tomat. Beliau menjual 430 tomat dalam waktu satu minggu. Berapa banyak tomat yang dijual Pak Edi dalam waktu 9 minggu ?",
                choice1: "3.870 tomat",
                choice2: "3670 tomat",
                choice3: "3.627 tomat",
                choice4: "3620 tomat",
                answer: 1
            },
            {
                question: "Bu Nana mengadakan ada acara sunatan untuk anak laki-lakinya. Bu Nana telah menyiapkan 850 tas kecil untuk diberikan kepada orang-orang yang datang ke acara tersebut. Setiap tas kecil berisi 2 souvenir. Berapa jumlah seluruh souvenir yang disiapkan bu Nana ?",
                choice1: "2.850 souvenir",
                choice2: "2.600 souvenir",
                choice3: "1.700 souvenir",
                choice4: "1600 souvenir",
                answer: 3
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

            // const questionIndex = Math.floor(Math.random() * availableQuesions.length);
            const questionIndex = 0;
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
            later.setMinutes(now.getMinutes() + 12);

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
                    'level' : 2
                },
                dataType: "JSON",
                success: function (response) {
                    let data = response.data;
                    
                    if (response.status) {
                        Swal.fire({
                            title: `${data.sebutan} (${data.skor})`,
                            text: 'Horee, Quiz Level 2 Telah di Selesaikan',
                            imageUrl: `{{ asset('img/sebutan/`+ data.sebutan +`.gif') }}`,
                            imageWidth: 600,
                            imageHeight: 200,
                            imageAlt: 'Custom image',
                        }).then((result) => {
                            document.location.href = "{{ route('profil.index') }}"; 
                        })
                    } else {
                        alert("GAGAL MENYIMPAN");
                    }
                    
                }
            });
        }

    });
</script>
@endsection