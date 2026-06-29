<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title : 'Destinations'; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets1/destinations.css'); ?>">
</head>

<body>

	<section class="detail-pantai">

		<!-- Hero Image -->
		<div class="hero">
			<img src="img/pantai.jpg" alt="">
		</div>


		<!-- Informasi -->
		<div class="content">

			<!-- Kiri -->
			<div class="left">

				<h1>Permata Tersembunyi di Jantung Segitiga Terumbu Karang</h1>

				<p>
					Pantai Pecaron menawarkan keindahan alam yang luar biasa
					dengan hamparan pasir putih, air laut jernih, serta tebing
					hijau yang menjulang tinggi.
				</p>


				<div class="info-box">

					<div class="box">
						<h4>Lokasi</h4>
						<p>
							Desa Pecaron, Kabupaten Kebumen,
							Jawa Tengah
						</p>
					</div>


					<div class="box">
						<h4>Fasilitas</h4>

						<ul>
							<li>Parkir</li>
							<li>Toilet</li>
							<li>Mushola</li>
							<li>Warung Makan</li>
						</ul>

					</div>

				</div>

			</div>



			<!-- Kanan -->

			<div class="right">

				<div class="booking">

					<h2>Rp</h2>

					<h3>32.500.000</h3>


					<input type="date">


					<select>

						<option>1 Orang</option>
						<option>2 Orang</option>
						<option>3 Orang</option>

					</select>



					<button>Pesan Sekarang</button>


					<div class="include">

						<p>✓ Pemandu wisata</p>

						<p>✓ Transportasi</p>

						<p>✓ Makan siang</p>

					</div>

				</div>

			</div>

		</div>



		<!-- Aktivitas -->

		<section class="activity">

			<h2>Aktivitas & Fasilitas</h2>


			<div class="gallery">

				<div class="card">

					<img src="img/snorkeling.jpg">

					<h4>Snorkeling</h4>

				</div>


				<div class="card">

					<img src="img/diving.jpg">

					<h4>Diving</h4>

				</div>



				<div class="card">

					<img src="img/perahu.jpg">

					<h4>Perahu Wisata</h4>

				</div>



				<div class="card">

					<img src="img/dermaga.jpg">

					<h4>Dermaga</h4>

				</div>


			</div>

		</section>




		<!-- Lokasi -->


		<section class="map">

			<h2>Lokasi</h2>

			<div class="maps">

				Google Maps

			</div>

		</section>




		<!-- Ulasan -->


		<section class="review">

			<div class="title">

				<h2>Ulasan Pengunjung</h2>

				<span>⭐ 4.9</span>

			</div>



			<div class="review-box">


				<div class="review-card">

					<h4>Andi Putra</h4>

					<p>
						Tempat yang sangat indah dan cocok
						untuk berlibur bersama keluarga.
					</p>

				</div>



				<div class="review-card">

					<h4>Cantika</h4>

					<p>
						Air lautnya jernih dan suasananya
						sangat menenangkan.
					</p>

				</div>


			</div>


		</section>



	</section>

	<!-- SECTION 2 : FOOTER -->
	<section class="footer-info">

		<div class="footer-container">

			<div class="footer-col">
				<h3>Pantai Pecaron</h3>

				<p>
					Pantai Pecaron, Surga Tersembunyi yang
					Menanti Anda.
				</p>

				<div class="social">
					<a href="#">○</a>
					<a href="#">○</a>
					<a href="#">○</a>
				</div>
			</div>


			<div class="footer-col">
				<h4>TAUTAN CEPAT</h4>

				<ul>
					<li><a href="#">Destinations</a></li>
					<li><a href="#">Travel Blog</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>


			<div class="footer-col">
				<h4>KONTAK KAMI</h4>

				<p>📧 PecaronBeach</p>
				<p>📞 +62 123 234 5678</p>
				<p>📍 Jl. Sukirman No.123,<br>
					Jakarta Selatan, Indonesia
				</p>
			</div>


			<div class="footer-col">
				<h4>APLIKASI KAMI</h4>

				<p>Download untuk pengalaman terbaik.</p>

				<a href="#" class="store-btn">
					Google Play
				</a>

				<a href="#" class="store-btn">
					App Store
				</a>
			</div>

		</div>


		<div class="copyright">
			© 2026 Pantai Pecaron. All rights reserved.
		</div>

	</section>

</body>

</html>
