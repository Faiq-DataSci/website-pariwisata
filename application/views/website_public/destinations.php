<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Destinations'; ?></title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
            background:#f5f7fa;
        }

        .hero{
            background:#0ea5e9;
            color:white;
            text-align:center;
            padding:60px 20px;
        }

        .hero h1{
            margin-bottom:10px;
            font-size:40px;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:40px auto;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
            gap:20px;
        }

        .card{
            background:#fff;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 2px 8px rgba(0,0,0,0.1);
        }

        .card img{
            width:100%;
            height:200px;
            object-fit:cover;
        }

        .card-content{
            padding:20px;
        }

        .card h3{
            margin-top:0;
        }

        .btn{
            display:inline-block;
            margin-top:10px;
            padding:10px 18px;
            background:#0ea5e9;
            color:#fff;
            text-decoration:none;
            border-radius:5px;
        }

        .btn:hover{
            background:#0284c7;
        }
    </style>
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