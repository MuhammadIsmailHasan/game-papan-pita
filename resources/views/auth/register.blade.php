@extends('auth.auth-page')

@section('content')
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Pendaftaran Siswa</h2>
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
                        <input type="submit" id="signup" class="form-submit" value="Daftar"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('auth/images/signin-image.jpg') }}" alt="sing up image"></figure>
            </div>
        </div>
    </div>
</section>
@endsection