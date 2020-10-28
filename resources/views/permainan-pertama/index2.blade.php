@extends('layouts.frontend')

@section('css')
    <link href="{{ asset('css/app-game.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="permainan_pertama" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>QUIZ LEVEL 1</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="justify-center">
                <table id="papan" class="table table-bordered ">
                    <thead>
                        <tr>
                            <th colspan="5">PAPAN PITA PERKALIAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>31 x 73</th>
                            <th>RATUSAN</th>
                            <th>PULUHAN</th>
                            <th>SATUAN</th>
                            <th rowspan="3">a</th>
                        </tr>
                        <tr>
                            <td>RATUSAN</td>
                            <td class="bagan">
                                <div id="wrapper">
                                    <canvas id="canvasTemp" width=300 height=200></canvas>
                                    <canvas id="canvas" width=300 height=200></canvas>
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>PULUHAN</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SATUAN</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <hr>

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
        $(function(){

            var canvas=document.getElementById("canvas");
            var ctx=canvas.getContext("2d");
            var canvasTemp=document.getElementById("canvasTemp");
            var ctxTemp=canvasTemp.getContext("2d");
            var canvasOffset=$("#canvas").offset();
            var offsetX=canvasOffset.left;
            var offsetY=canvasOffset.top;
            console.log(offsetX);
            console.log(offsetY);
            

            var startX;
            var startY;
            var isDown=false;

            $("#canvasTemp").css({ left: 0, top:0 });

            function drawLine(toX,toY,context){
                context.beginPath();
                context.moveTo(startX, startY);
                context.lineTo(toX,toY);
                context.stroke();
            }

            function handleMouseDown(e){
            e.preventDefault();
            mouseX=parseInt(e.clientX-offsetX);
            mouseY=parseInt((e.clientY + 200)-offsetY);
            console.log(`clientX ${e.clientX}`);
            console.log(`clientY ${e.clientY}`);
            console.log(`OffsetX ${offsetX}`);
            console.log(`OffsetY ${offsetY}`);
            

            // save drag-startXY, 
            // move temp canvas over main canvas,
            // set dragging flag
            startX=mouseX;
            startY=mouseY;
            ctxTemp.clearRect(0,0,canvasTemp.width,canvasTemp.height);
            $("#canvasTemp").css({ left:0, top:0 });
            isDown=true;
            }

            function handleMouseUp(e){
            e.preventDefault();
            if(!isDown){return;}
            // clear dragging flag
            // move temp canvas offscreen
            // draw the user's line on the main canvas
            isDown=false;
            mouseX=parseInt(e.clientX-offsetX);
            mouseY=parseInt((e.clientY + 200)-offsetY);
            $("#canvasTemp").css({ left: 0, top:0 });
            drawLine(mouseX,mouseY,ctx);
            }

            function handleMouseMove(e){
            e.preventDefault();        
            if(!isDown){return;}
            mouseX=parseInt(e.clientX-offsetX);
            mouseY=parseInt((e.clientY + 200)-offsetY);
            // clear the temp canvas
            // on temp canvas draw a line from drag-start to mouseXY
            ctxTemp.clearRect(0,0,canvasTemp.width,canvasTemp.height);
            drawLine(mouseX,mouseY,ctxTemp);
            }

            $("#canvas").mousedown(function(e){handleMouseDown(e);});
            $("#canvas").mousemove(function(e){handleMouseMove(e);});
            $("#canvas").mouseup(function(e){handleMouseUp(e);});
            $("#canvas").mouseout(function(e){handleMouseUp(e);});

            }); // end $(function(){});
    </script>
@endsection