<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url(uri: 'assets1/style1.css') ?>">
</head>

<body>
	<section class="detail-wisata">

		<div class="container">

			<!-- Galeri -->
			<div class="gallery">

				<div class="gallery-left">
					<img src="<?= base_url('assets/img/camping/main.jpg'); ?>" alt="Camping Area">

					<div class="gallery-text">
						<h2>Camping<br>Area</h2>
					</div>
				</div>

				<div class="gallery-right">

					<div class="small-img">
						<img src="<?= base_url('assets/img/camping/img1.jpg'); ?>" alt="">
					</div>

					<div class="small-img">
						<img src="<?= base_url('assets/img/camping/img2.jpg'); ?>" alt="">
					</div>

					<div class="large-img">
						<img src="<?= base_url('assets/img/camping/img3.jpg'); ?>" alt="">
					</div>

				</div>

			</div>

			<!-- Isi -->
			<div class="content">

				<!-- Kiri -->
				<div class="content-left">

					<span class="kategori">📍 TEGAL, JAWA TENGAH</span>

					<h1>Camping Area</h1>

					<p>
						Camping Area merupakan tempat berkemah yang menawarkan
						suasana alam yang asri dengan pemandangan perbukitan,
						pepohonan hijau, dan udara yang sejuk. Area ini cocok
						untuk wisatawan yang ingin menikmati pengalaman bermalam
						di alam terbuka bersama keluarga, teman, maupun komunitas.
					</p>

					<!-- Keindahan -->
					<div class="card">

						<h3>Keindahan dan Daya Tarik</h3>

						<ul>
							<li>Udara sejuk dan bersih.</li>
							<li>Pemandangan alam yang indah.</li>
							<li>Area berkemah yang luas.</li>
							<li>Cocok menikmati matahari terbit dan terbenam.</li>
							<li>Suasana tenang jauh dari keramaian.</li>

						</ul>

					</div>

					<!-- Aktivitas -->
					<div class="card">

						<h3>Aktivitas yang Dapat Dilakukan</h3>

						<ul>
							<li>Mendirikan tenda.</li>
							<li>Api unggun bersama.</li>
							<li>Barbecue.</li>
							<li>Fotografi alam.</li>
							<li>Trekking ringan.</li>
							<li>Menikmati sunrise dan sunset.</li>

						</ul>

					</div>

				</div>

				<!-- Kanan -->
				<div class="content-right">

					<div class="info-card">

						<h3>Informasi</h3>

						<table>

							<tr>
								<td><strong>Lokasi</strong></td>
								<td>:</td>
								<td>Tegal, Jawa Tengah</td>
							</tr>

							<tr>
								<td><strong>Harga Tiket</strong></td>
								<td>:</td>
								<td>Rp15.000</td>
							</tr>

							<tr>
								<td><strong>Jam Operasional</strong></td>
								<td>:</td>
								<td>24 Jam</td>
							</tr>

							<tr>
								<td><strong>Fasilitas</strong></td>
								<td>:</td>
								<td>Toilet, Mushola, Parkir</td>
							</tr>

						</table>

					</div>

				</div>

			</div>

			<!-- Dokumentasi -->
			<div class="documentation">

				<h2>Dokumentasi</h2>

				<div class="documentation-gallery">

					<img src="<?= base_url('assets/img/camping/doc1.jpg'); ?>" alt="">
					<img src="<?= base_url('assets/img/camping/doc2.jpg'); ?>" alt="">
					<img src="<?= base_url('assets/img/camping/doc3.jpg'); ?>" alt="">
					<img src="<?= base_url('assets/img/camping/doc4.jpg'); ?>" alt="">

				</div>

			</div>

		</div>

	</section>
</body>

</html>