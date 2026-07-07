<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($article->judul) ?></title>
    <link rel="stylesheet" href="<?= base_url('assets1/blog.css'); ?>">
</head>

<body>
    <main style="max-width: 1000px; margin: 40px auto; padding: 0 20px;">
        <article style="background: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            <small><?= date('d M Y', strtotime($article->tanggal)) ?> • Bacaan</small>
            <h1 style="margin-top: 12px;"><?= htmlspecialchars($article->judul) ?></h1>

            <?php if (!empty($article->gambar_artikel)) : ?>
                <img src="<?= base_url('uploads/artikel/' . $article->gambar_artikel) ?>" alt="<?= htmlspecialchars($article->judul) ?>" style="width:100%; height:auto; object-fit:cover; border-radius: 8px; margin: 16px 0;">
            <?php endif; ?>

            <div style="color: #374151; line-height: 1.8; font-size: 1.05rem;">
                <?= nl2br(htmlspecialchars($article->konten, ENT_QUOTES, 'UTF-8')) ?>
            </div>

            <p style="margin-top: 20px;"><a href="<?= site_url('website/blog') ?>">← Kembali ke Blog</a></p>
        </article>
    </main>
</body>

</html>