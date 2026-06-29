<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title : 'about'; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets1/about.css'); ?>">
</head>

<body>

	<section class="about">
		<div class="container">

			<div class="about-image">
				<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=900"
					alt="Pantai Pancoran">
			</div>

			<div class="about-content">
				<span class="sub-title">ABOUT US</span>

				<h2>Selamat Datang di Pantai Pancoran Kebumen</h2>

				<p>
					Pantai Pancoran merupakan salah satu destinasi wisata alam di Kabupaten
					Kebumen yang menawarkan keindahan pantai dengan suasana yang masih alami,
					udara yang sejuk, serta panorama laut yang memukau. Hamparan pasir,
					tebing karang, dan deburan ombak Samudra Hindia menjadikan tempat ini
					pilihan tepat untuk melepas penat.
				</p>

				<p>
					Kami berkomitmen memperkenalkan pesona Pantai Pancoran kepada masyarakat
					luas serta menjaga kelestarian lingkungan agar tetap bersih, nyaman,
					dan indah untuk dinikmati oleh setiap pengunjung.
				</p>

				<div class="about-info">

					<div class="info-box">
						<h3>🌊 Keindahan Alam</h3>
						<p>
							Pantai yang masih alami dengan pemandangan laut lepas,
							tebing karang, dan pepohonan yang menyejukkan.
						</p>
					</div>

					<div class="info-box">
						<h3>📸 Spot Foto</h3>
						<p>
							Banyak lokasi menarik untuk berfoto dengan latar
							pantai, sunset, dan panorama alam yang indah.
						</p>
					</div>

					<div class="info-box">
						<h3>🏕 Camping Area</h3>
						<p>
							Area camping yang nyaman bagi wisatawan yang ingin
							menikmati malam di tepi pantai.
						</p>
					</div>

					<div class="info-box">
						<h3>🌱 Wisata Ramah Lingkungan</h3>
						<p>
							Mengajak seluruh pengunjung menjaga kebersihan dan
							kelestarian alam Pantai Pancoran.
						</p>
					</div>

				</div>

				<a href="#" class="btn">Jelajahi Pantai</a>

			</div>

		</div>
	</section>

</body>

</html>