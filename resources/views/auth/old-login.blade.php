<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Papan Pita Perkalian</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth-page/css/sourcesanspro-font.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('auth-page/css/style.css') }}"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="{{ asset('auth-page/images/login-21.jpg') }}" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')" id="defaultOpen">Masuk</button>
					</div>
				</div>
                {{-- <form class="form-detail" action="{{ route('register') }}" method="post">
                    @csrf
					<div class="tabcontent" id="sign-up">
                        <div class="form-row">
                            @if ( $errors->any())
                                {{ Html::ul($errors->all()) }}
                            @endif
                        </div>
                        <div class="form-row">
							<label class="form-row-inner">
                                <input type="text" name="name_data" id="name_data" class="input-text custom-uppercase" required>
								<span class="label">Nama Lengkap</span>
                                <span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
                                <input type="text" name="username_data" id="username_data" class="input-text" required>
								<span class="label">Username</span>
                                <span class="border"></span>  
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
                                <input type="password" name="password_data" id="password_data" class="input-text" required>
								<span class="label">Kata Sandi</span>
                                <span class="border"></span>
							</label>
                        </div>
						<div class="form-row-last">
							<input type="submit" class="register">
						</div>
					</div>
				</form> --}}
                <form class="form-detail" action="{{ route('login') }}" method="post">
                    @csrf
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="name" id="name" class="input-text" required>
								<span class="label">Nama</span>
                                <span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
                                <span class="border"></span>
                                <input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Kata Sandi</span>
                            </label>
                            
                            @error('error')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-row-last">
							<input type="submit" class="register">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('frontend/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
	
	<!-- Sweet Alert -->
	<script src="{{ asset('frontend/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>
	
	@if (Session::has('success'))
		<script type="text/javascript">
			Swal.fire(
				'Berhasil',
				'{{ Session::get('success') }}',
				'success'
				)
		</script>
	@endif
    @if (Session::has('error'))
		<script type="text/javascript">
			Swal.fire({
				icon: 'error',
				title: 'Gagal',
				text: '{{ Html::ul($errors->all()) }}',
				})
        </script>
    @endif

    <script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();

		// Set UpperCase Nama
		$('#name_data').keyup(function (e) { 
			let string = $(this).val();
			$(this).val(string.toUpperCase()); 
		});

	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>