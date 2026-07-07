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
	<section id="hero" style="position: relative; overflow: hidden; background: linear-gradient(rgba(128,128,128,0.65), rgba(128,128,128,0.65)), url('<?= base_url('assets/images/gallery/' . rawurlencode('pemandangan 2.jpeg')) ?>') center/cover no-repeat; min-height: 480px; display: flex; align-items: center; justify-content: center; text-align: center; padding: 60px 20px; color: #fff;">
		<div style="position: relative; z-index: 1; max-width: 900px; width: 100%;">
			<h1 style="font-size: clamp(2.8rem, 5vw, 4.8rem); margin-bottom: 16px; letter-spacing: 0.1em;">PANTAI PECARON</h1>
			<p style="font-size: clamp(1.1rem, 2vw, 1.5rem); margin: 0; line-height: 1.5;">Wisata Tersembunyi Kebumen</p>
		</div>
	</section>

	<section id="hero3">

		<h2 class="section-title">Pantai Pecaron</h2>

		<div class="video-content">

			<div class="video">
				<iframe
					width="560"
					height="315"
					src="https://www.youtube.com/embed/lQjJi5Rhggs"
					title="Video Pantai Pancoran"
					frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen>
				</iframe>
			</div>

			<div class="description">
				<h3>Wisata Tersembunyi di Kebumen</h3>
				<p>
					Pantai Pecaron menawarkan pemandangan alam yang indah dengan
					air laut yang jernih, tebing yang menjulang, dan suasana yang
					tenang. Tempat ini cocok untuk menikmati liburan bersama
					keluarga maupun teman.
				</p>

				<a href="http://localhost/website-pariwisata/website#" class="btn">Pelajari Lebih Lanjut</a>
			</div>

		</div>

	</section>

	<section id="hero4">
		<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Pantai Pecaron">
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

		<h1>Komentar</h1>

		<div class="container">

			<?php if ($this->session->userdata('user_login')) : ?>
				<form action="<?= site_url('website/submit_komentar') ?>" method="post" style="margin-bottom: 24px;">
					<textarea name="komentar" rows="4" required style="width: 100%; padding: 16px; border: 1px solid #d1d5db; border-radius: 12px; font-size: 1rem; resize: vertical;">Saya ingin berbagi pengalaman berkunjung ke Pantai Pancoran...</textarea>
					<button type="submit" class="btn" style="margin-top: 12px; padding: 12px 24px;">Kirim Komentar</button>
				</form>
			<?php else : ?>
				<div style="margin-bottom: 24px; padding: 20px; border: 1px solid #e5e7eb; border-radius: 16px; background: #f8fafc; color: #374151;">
					<p style="margin: 0 0 12px; font-weight: 600;">Silakan login terlebih dahulu untuk menambahkan komentar.</p>
					<a href="<?= site_url('userauth/login') ?>" class="btn" style="display: inline-block; padding: 12px 24px;">Login</a>
				</div>
			<?php endif; ?>

			<?php if (!empty($comments)) : ?>
				<?php foreach ($comments as $comment) : ?>
					<div class="card">
						<div class="star" style="margin-bottom: 10px;">★★★★★</div>
						<p><?= nl2br(htmlspecialchars($comment->komentar, ENT_QUOTES, 'UTF-8')) ?></p>
						<div class="user">
							<img src="https://via.placeholder.com/80x80?text=User" alt="<?= htmlspecialchars($comment->nama) ?>">
							<span><?= htmlspecialchars($comment->nama) ?></span>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="card">
					<div class="star">★★★★★</div>
					<p>Belum ada komentar tersedia. Nantikan pembaruan dari pengguna.</p>
				</div>
			<?php endif; ?>

		</div>

	</section>

	<section class="contact">

		<h1>Kontak</h1>


		<div class="info">

			<a href="https://www.instagram.com/pantai_pecaron?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" class="item" style="text-decoration: none; color: inherit;">
				<i class="fa-solid fa-share-nodes"></i>
				<p>Follow Us</p>
			</a>

			<a href="https://maps.app.goo.gl/eiXtLiEqGh9kwBnA6" target="_blank" rel="noopener noreferrer" class="item" style="text-decoration: none; color: inherit;">
				<i class="fa-regular fa-map"></i>
				<p>Visit Us</p>
			</a>

			<a href="https://mail.google.com/mail/?view=cm&fs=1&to=ppecaron@gmail.com" target="_blank" rel="noopener noreferrer" class="item" style="text-decoration: none; color: inherit;">
				<i class="fa-regular fa-message"></i>
				<p>Contact Us</p>
			</a>

		</div>



		<div class="sosmed">

			<a href="https://www.instagram.com/pantai_pecaron?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer">
				<div class="box">
					<i class="fa-brands fa-instagram"></i>
				</div>
			</a>

			<a href="https://wa.me/6283856522476" target="_blank" rel="noopener noreferrer">
				<div class="box">
					<i class="fa-solid fa-mobile-screen"></i>
				</div>
			</a>

			<a href="https://mail.google.com/mail/?view=cm&fs=1&to=ppecaron@gmail.com" target="_blank" rel="noopener noreferrer">
				<div class="box">
					<i class="fa-regular fa-envelope"></i>
				</div>
			</a>

			<a href="https://www.facebook.com/share/1DbFfr5Bwt/" target="_blank" rel="noopener noreferrer">
				<div class="box">
					<i class="fa-brands fa-facebook-f"></i>
				</div>
			</a>

			<a href="" target="_blank" rel="noopener noreferrer">
				<div class="box">
					<i class="fa-brands fa-youtube"></i>
				</div>
			</a>

			<a href="https://www.tiktok.com/@pantai_pecaron?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer">
				<div class="box">
					<i class="fa-brands fa-tiktok"></i>
				</div>
			</a>

		</div>

	</section>



</body>

</html>