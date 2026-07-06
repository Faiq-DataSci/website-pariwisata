<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url('assets1/blog.css'); ?>">
</head>

<body>
	<section class="blog-section">

		<?php if (!empty($articles)) :
			$featured = $articles[0];
			$featured_image = !empty($featured->gambar_artikel) ? base_url('uploads/artikel/' . $featured->gambar_artikel) : 'https://via.placeholder.com/1200x500?text=Artikel+Unggulan';
		?>
			<div class="blog-card">
				<img src="<?= $featured_image ?>" alt="<?= htmlspecialchars($featured->judul) ?>" style="width:100%; height:auto; object-fit:cover; border-radius: 10px; margin-bottom: 20px;">

				<div class="blog-content">

					<span class="kategori">
						TERPOPULER
					</span>

					<h1>
						<?= htmlspecialchars(strlen($featured->judul) > 60 ? substr($featured->judul, 0, 60) . '...' : $featured->judul) ?>
					</h1>

					<p>
						<?= htmlspecialchars(strlen($featured->konten) > 150 ? substr($featured->konten, 0, 150) . '...' : $featured->konten) ?>
					</p>

					<a href="#" class="btn-blog">
						Baca Selengkapnya →
					</a>

				</div>

			</div>
		<?php else : ?>
			<div class="blog-card">
				<div class="blog-content">
					<span class="kategori">BELUM ADA ARTIKEL</span>
					<h1>Belum ada artikel yang dipublikasikan</h1>
					<p>Admin masih menyiapkan artikel menarik untuk Anda. Silakan kembali lagi nanti.</p>
				</div>
			</div>
		<?php endif; ?>

	</section>

	<section class="blog-filter">

		<div class="kategori-blog">

			<a href="#" class="active">Semua</a>

		</div>


		<div class="search-blog">

			<input type="text" placeholder="Cari artikel..." id="search-artikel">

		</div>

	</section>

	<section class="blog-list">

		<?php if (!empty($articles)) : ?>
			<?php foreach ($articles as $article) : ?>
				<div class="blog-item">
					<img src="<?= !empty($article->gambar_artikel) ? base_url('uploads/artikel/' . $article->gambar_artikel) : 'https://via.placeholder.com/300x200?text=' . urlencode($article->judul) ?>" alt="<?= htmlspecialchars($article->judul) ?>">

					<div class="blog-body">
						<small><?= date('d M Y', strtotime($article->tanggal)) ?> • Bacaan</small>

						<h3><?= htmlspecialchars($article->judul) ?></h3>

						<p>
							<?= htmlspecialchars(strlen($article->konten) > 100 ? substr($article->konten, 0, 100) . '...' : $article->konten) ?>
						</p>

						<a href="#">Baca Selengkapnya →</a>
					</div>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<p style="text-align: center; padding: 40px;">Belum ada artikel yang dipublikasikan.</p>
		<?php endif; ?>

	</section>

</body>

</html>