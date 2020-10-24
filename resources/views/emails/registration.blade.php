<html>
	<head>
    	<title>Welcome Email</title>
	</head> 
	<body>
		<h2>Registration Mail</h2>
		<p>
			Kepada Bpk/Ibu {{$user['name']}}, Terima Kasih Sudah Mendaftar Di Website Kami.
		</p>
		<p>
			Silahkan klik link <a href="{{ url('/verify', ['code' => $user['verification_code'], 'email' => $user['email'], 'person' => $user['person_type']]) }}"> berikut</a> untuk mengkonfirmasi email anda.
		</p>
	</body> 
</html>