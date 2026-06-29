<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Pantai</title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets1/login.css'); ?>">
</head>

<body>

	<div class="container">

		<div class="login-box">

			<h2>SELAMAT DATANG DI<br>PANTAI PECARON</h2>

			<p>Masuk untuk mengakses layanan dan informasi resmi kami</p>

			<form>

				<label>Email atau Username</label>
				<input type="text">

				<label>Kata Sandi</label>
				<input type="password">

				<div class="forgot">
					<a href="#">Lupa Kata Sandi?</a>
				</div>

				<button type="submit" class="login-btn">
					Login
				</button>

			</form>

			<div class="divider">
				<span>atau masuk dengan</span>
			</div>

			<button class="social google">
				<i class="fa-brands fa-google"></i>
				Google
			</button>

			<button class="social linkedin">
				<i class="fa-brands fa-linkedin"></i>
				LinkedIn
			</button>

			<div class="register">
				Belum Punya Akun?
				<a href="#">Daftar Sekarang</a>
			</div>

		</div>

	</div>

</body>

</html>