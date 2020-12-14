@extends('auth.auth-page')

@section('css')
   
@endsection

@section('content')
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Login Siswa</h2>
                <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        @if ( $errors->any())
                            {{ Html::ul($errors->all()) }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name_data"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name_data" id="name_data" placeholder="Nama Lengkap"/>
                    </div>
                    <div class="form-group">
                        <label for="kelas_data"><i class="zmdi zmdi-book"></i></label>
                        <input type="number" name="kelas_data" id="kelas_data" placeholder="Kelas"/>
                    </div>
                    <div class="form-group">
                        <label for="sekolah_data"><i class="zmdi zmdi-assignment"></i></label>
                        <input type="text" name="sekolah_data" id="sekolah_data" placeholder="Sekolah"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" id="signup" class="form-submit" value="Masuk"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img id="salam-tour" src="{{ asset('auth/images/signin-image.png') }}" alt="sing up image"></figure>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            var placementRight = 'right';
            var placementLeft = 'left';
            var placementButtom = 'bottom';
            var placementTop = 'top';

            // Define the tour!
            var tour = {
                id: "intro-tour",
                steps: [
                    {
                        target: "salam-tour",
                        title: "Ayo Belajar Perkalian dengan Media Pembelajaran Papan Pira Perkalian!",
                        placement: placementLeft,
                        yOffset: 20
                    },
                    {
                        target: 'salam-tour',
                        title: "Belajar Semakin Mudah dan Menyenangkan",
                        placement: placementTop,
                        zindex: 999
                    },
                    {
                        target: 'register-form',
                        title: "Isilah kolom berikut :",
                        content: "dengan Identitas diri adik! (nama, kelas dan sekolah)",
                        placement: placementRight,
                        zindex: 999
                    },
                    {
                        target: 'signup',
                        content: "klik masuk untuk memulai pembelajaran",
                        placement: placementRight,
                        zindex: 999
                    }
                ],
                showPrevButton: true
            };

            // Start the tour!
            hopscotch.startTour(tour);
        });
    </script>
@endsection