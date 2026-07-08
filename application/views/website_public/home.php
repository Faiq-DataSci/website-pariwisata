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

		<h1>Testimoni & Pengalaman Wisata</h1>

		<div class="container">

			<?php if ($this->session->userdata('user_login')) : ?>
				<form action="<?= site_url('website/submit_testimoni') ?>" method="post" enctype="multipart/form-data" style="margin-bottom: 24px; background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 600;">Pengalaman Anda:</label>
					    <textarea name="isi" rows="4" required style="width: 100%; padding: 16px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 1rem; resize: vertical;" placeholder="Bagikan pengalaman menarik Anda di Pantai Pecaron..."></textarea>
                    </div>
                    
                    <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 15px;">
                        <div style="flex: 1; min-width: 200px;">
                            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Rating:</label>
                            <select name="rating" required style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 8px;">
                                <option value="5">★★★★★ (5/5) Sangat Bagus</option>
                                <option value="4">★★★★☆ (4/5) Bagus</option>
                                <option value="3">★★★☆☆ (3/5) Cukup</option>
                                <option value="2">★★☆☆☆ (2/5) Kurang</option>
                                <option value="1">★☆☆☆☆ (1/5) Sangat Kurang</option>
                            </select>
                        </div>
                        <div style="flex: 1; min-width: 200px;">
                            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Upload Foto Liburan (Opsional):</label>
                            <input type="file" name="foto" accept="image/*" style="width: 100%; padding: 8px; border: 1px solid #d1d5db; border-radius: 8px;">
                        </div>
                    </div>

					<button type="submit" class="btn" style="padding: 12px 24px;">Kirim Ulasan</button>
				</form>
			<?php else : ?>
				<div style="margin-bottom: 24px; padding: 20px; border: 1px solid #e5e7eb; border-radius: 16px; background: #f8fafc; color: #374151;">
					<p style="margin: 0 0 12px; font-weight: 600;">Silakan login terlebih dahulu untuk membagikan pengalaman wisata Anda.</p>
					<a href="<?= site_url('userauth/login') ?>" class="btn" style="display: inline-block; padding: 12px 24px;">Login</a>
				</div>
			<?php endif; ?>

			<?php if (!empty($testimonials)) : ?>
				<?php foreach ($testimonials as $t) : ?>
					<div class="card" style="display: flex; flex-direction: column; gap: 15px;">
						<div class="star" style="color: #f59e0b; font-size: 1.2rem;">
                            <?php 
                                $rating = intval($t->rating);
                                echo str_repeat('★', $rating) . str_repeat('☆', 5 - $rating);
                            ?>
                        </div>
						<p style="flex: 1;"><?= nl2br(htmlspecialchars($t->isi, ENT_QUOTES, 'UTF-8')) ?></p>
                        
                        <?php if (!empty($t->foto) && file_exists('./assets/images/testimoni/' . $t->foto)) : ?>
                            <div style="width: 100%; height: 150px; overflow: hidden; border-radius: 8px; margin-bottom: 10px;">
                                <img src="<?= base_url('assets/images/testimoni/' . $t->foto) ?>" alt="Foto Testimoni" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        <?php endif; ?>

						<div class="user" style="display: flex; align-items: center; gap: 10px;">
							<img src="https://ui-avatars.com/api/?name=<?= urlencode($t->nama) ?>&background=random" alt="<?= htmlspecialchars($t->nama) ?>" style="width: 40px; height: 40px; border-radius: 50%;">
							<span style="font-weight: 600;"><?= htmlspecialchars($t->nama) ?></span>
						</div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="card">
					<div class="star">★★★★★</div>
					<p>Belum ada ulasan. Jadilah yang pertama membagikan pengalaman Anda!</p>
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