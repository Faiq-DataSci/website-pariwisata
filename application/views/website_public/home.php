<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title : 'home'; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets1/home.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
	<section id="hero">
		<h1>PANTAI PANCORAN</h1>
		<p>Surga Tersembunyi Kebumen</p>
	</section>

	<section id="hero3">

		<h2 class="section-title">Pantai Pancoran</h2>
		<div class="video-content">
			<div class="video">
				<iframe
					width="560"
					height="315"
					src="https://www.youtube.com/embed/VIDEO_ID"
					title="Video Pantai Pancoran"
					frameborder="0"
					allowfullscreen>
				</iframe>
			</div>

			<div class="description">
				<h3>Surga Tersembunyi di Kebumen</h3>
				<p>
					Pantai Pancoran menawarkan pemandangan alam yang indah dengan
					air laut yang jernih, tebing yang menjulang, dan suasana yang
					tenang. Tempat ini cocok untuk menikmati liburan bersama
					keluarga maupun teman.
				</p>

				<a href="#" class="btn">Pelajari Lebih Lanjut</a>
			</div>

		</div>

	</section>

	<section id="hero4">
		<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Pantai Pancoran">
	</section>


	<section id="services">

		<h2>SERVICES</h2>

		<div class="service-container">

			<div class="service-item">
				<img src="img1.jpg">
				<div class="service-text">
					<h3>Keindahan Panorama</h3>
					<p>Penjelasan layanan wisata pantai...</p>
					<a href="<?php echo site_url('website/camping_area'); ?>" class="btn">
						Pelajari Lebih Lanjut
					</a>
				</div>
			</div>

			<div class="service-item">
				<img src="img2.jpg">
				<div class="service-text">
					<h3>Glamping Pecaron</h3>
					<p>Penjelasan glamping...</p>
					<a href="#" class="btn">Pelajari Lebih Lanjut</a>
				</div>
			</div>

			<div class="service-item">
				<img src="img3.jpg">
				<div class="service-text">
					<h3>Camping Area</h3>
					<p>Camping Area merupakan area yang disediakan bagi wisatawan yang ingin berkemah dan menikmati suasana alam secara lebih dekat. Pengunjung dapat mendirikan tenda di lokasi yang telah ditentukan sambil menikmati udara segar, pemandangan alam, serta suasana yang tenang. Area ini cocok untuk kegiatan bersama keluarga, teman, maupun komunitas. Demi menjaga kenyamanan dan kelestarian lingkungan, pengunjung diharapkan menjaga kebersihan, mematuhi peraturan yang berlaku, dan tidak merusak fasilitas maupun alam di sekitar area perkemahan.
					</p>
					<a href="#" class="btn">Pelajari Lebih Lanjut</a>
				</div>
			</div>

			<div class="service-item">
				<img src="img3.jpg">
				<div class="service-text">
					<h3>Camping Area</h3>
					<p>Camping Area merupakan area yang disediakan bagi wisatawan yang ingin berkemah dan menikmati suasana alam secara lebih dekat. Pengunjung dapat mendirikan tenda di lokasi yang telah ditentukan sambil menikmati udara segar, pemandangan alam, serta suasana yang tenang. Area ini cocok untuk kegiatan bersama keluarga, teman, maupun komunitas. Demi menjaga kenyamanan dan kelestarian lingkungan, pengunjung diharapkan menjaga kebersihan, mematuhi peraturan yang berlaku, dan tidak merusak fasilitas maupun alam di sekitar area perkemahan.
					</p>
					<a href="#" class="btn">Pelajari Lebih Lanjut</a>
				</div>
			</div>

		</div>

	</section>

	<section id="gallery">

		<h2 class="gallery-title">Galeri Pantai</h2>
		<p class="gallery-subtitle">Keindahan alam pantai Indonesia</p>

		<div class="gallery-container">

			<div class="gallery-item">
				<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Pantai 1">
			</div>

			<div class="gallery-item">
				<img src="https://images.unsplash.com/photo-1501973801540-537f08ccae7b" alt="Pantai 2">
			</div>

			<div class="gallery-item">
				<img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" alt="Pantai 3">
			</div>

			<div class="gallery-item">
				<img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e" alt="Pantai 4">
			</div>

			<div class="gallery-item">
				<img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21" alt="Pantai 5">
			</div>

			<div class="gallery-item">
				<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Pantai 6">
			</div>

		</div>

	</section>

	<section class="testimoni">

		<h1>VOICE OF PARADISE</h1>

		<div class="container">
			<div class="card">
				<div class="star">★★★★★</div>
				<p>
					Salah satu hidden gem di Kebumen.
					Air laut yang jernih, pasir putih,
					dan pemandangan tebing yang memukau
					membuat pengalaman berwisata
					menjadi lebih berkesan.
				</p>

				<div class="user">
					<img src="user1.jpg" alt="">
					<span>Faiq Atha</span>
				</div>

			</div>


			<div class="card">
				<div class="star">★★★★★</div>
				<p>
					"One of the best beaches in Kebumen.
					The environment is calm and relaxing,
					making it ideal for family trips and
					weekend getaways."
				</p>

				<div class="user">
					<img src="user2.jpg" alt="">
					<span>Jonathan Abdi</span>
				</div>

			</div>



			<div class="card">
				<div class="star">★★★★★</div>
				<p>
					Bar pisan takon nang kana,
					langsung seneng. Pantaine resik,
					banyune bening lan suasane
					isih alami. Mantep.
				</p>

				<div class="user">
					<img src="user3.jpg" alt="">
					<span>Raden Aldiman</span>
				</div>

			</div>

		</div>

	</section>

	<section class="contact">

		<h1>CONTACT</h1>


		<div class="info">

			<div class="item">
				<i class="fa-solid fa-share-nodes"></i>
				<p>Follow Us</p>
			</div>

			<div class="item">
				<i class="fa-regular fa-map"></i>
				<p>Visit Us</p>
			</div>

			<div class="item">
				<i class="fa-regular fa-message"></i>
				<p>Contact Us</p>
			</div>

		</div>



		<div class="sosmed">

			<a href="#">
				<div class="box">
					<i class="fa-brands fa-instagram"></i>
				</div>
			</a>

			<a href="#">
				<div class="box">
					<i class="fa-solid fa-mobile-screen"></i>
				</div>
			</a>

			<a href="#">
				<div class="box">
					<i class="fa-regular fa-envelope"></i>
				</div>
			</a>

			<a href="#">
				<div class="box">
					<i class="fa-brands fa-facebook-f"></i>
				</div>
			</a>

			<a href="#">
				<div class="box">
					<i class="fa-brands fa-youtube"></i>
				</div>
			</a>

			<a href="#">
				<div class="box">
					<i class="fa-brands fa-tiktok"></i>
				</div>
			</a>

		</div>

	</section>



</body>

</html>