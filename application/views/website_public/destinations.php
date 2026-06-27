<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Destinations'; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets1/destinations.css'); ?>">
</head>
<body>

<section class="hero">
    <h1>Destinations</h1>
    <p>Temukan destinasi wisata terbaik di Indonesia.</p>
</section>

<div class="container">

    <div class="cards">

        <div class="card">
            <img src="https://picsum.photos/600/400?random=1" alt="Pantai Bali">
            <div class="card-content">
                <h3>Pantai Kuta</h3>
                <p>Nikmati pasir putih, ombak, dan matahari terbenam yang memukau di Bali.</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="https://picsum.photos/600/400?random=2" alt="Raja Ampat">
            <div class="card-content">
                <h3>Raja Ampat</h3>
                <p>Surga bawah laut dengan keanekaragaman hayati yang luar biasa.</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="https://picsum.photos/600/400?random=3" alt="Labuan Bajo">
            <div class="card-content">
                <h3>Labuan Bajo</h3>
                <p>Gerbang menuju Pulau Komodo dan panorama laut yang indah.</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
        </div>

        <div class="card">
            <img src="https://picsum.photos/600/400?random=4" alt="Pantai Menganti">
            <div class="card-content">
                <h3>Pantai Menganti</h3>
                <p>Pantai eksotis di Kebumen dengan tebing hijau dan pemandangan laut lepas.</p>
                <a href="#" class="btn">Lihat Detail</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
