@extends('auth.auth-page')

@section('content')
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{ asset('auth/images/signup-image.jpg') }}" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login Administrator</h2>
                <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" id="signin" class="form-submit" value="Masuk"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection