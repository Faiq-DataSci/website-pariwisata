<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title : 'home'; ?></title>
	<link rel="stylesheet" href="<?= base_url('assets1/home.css'); ?>">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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

		<h2>Wisata Indah Pantai Pecaron</h2>

		<div class="service-container" style="display: flex; flex-direction: column; gap: 20px;">

			<?php if (!empty($services)) : ?>
				<?php foreach ($services as $service) : ?>
					<div class="service-item" style="display: flex; gap: 20px; align-items: flex-start; background: #f9f9f9; padding: 15px; border-radius: 8px;">
						<div style="flex-shrink: 0; width: 200px; height: 200px; overflow: hidden; border-radius: 8px; background: #f0f0f0; display: flex; align-items: center; justify-content: center;">
							<?php if (!empty($service->file_gambar)) : ?>
								<img src="<?= base_url('assets/images/wisata/' . $service->file_gambar) ?>" alt="<?= htmlspecialchars($service->nama_wisata) ?>" style="width: 100%; height: 100%; object-fit: cover;">
							<?php else : ?>
								<img src="https://via.placeholder.com/200x200?text=<?= urlencode($service->nama_wisata) ?>" alt="<?= htmlspecialchars($service->nama_wisata) ?>" style="width: 100%; height: 100%; object-fit: cover;">
							<?php endif; ?>
						</div>
						<div class="service-text" style="flex: 1;">
							<h3 style="margin-top: 0;"><?= htmlspecialchars($service->nama_wisata) ?></h3>
							<p><?= htmlspecialchars($service->deskripsi) ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<p style="text-align: center;">Belum ada layanan yang ditambahkan.</p>
			<?php endif; ?>

		</div>

	</section>

	<section id="gallery">

		<h2 class="gallery-title">Foto Foto Keindahan Pantai Pecaron</h2>
		<p class="gallery-subtitle">Keindahan Pantai Pecaron</p>

		<div class="gallery-container">
			<?php if (!empty($gallery_images)) : ?>
				<?php foreach ($gallery_images as $image) : ?>
					<div class="gallery-item">
						<img src="<?= base_url('assets/images/gallery/' . $image->file_gambar) ?>" alt="<?= htmlspecialchars($image->keterangan, ENT_QUOTES, 'UTF-8') ?>">
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="gallery-item" style="grid-column: 1 / -1;">
					<p style="margin: 0;">Belum ada gambar yang diunggah oleh admin.</p>
				</div>
			<?php endif; ?>
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