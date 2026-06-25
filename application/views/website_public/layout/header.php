<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Nusantara Travel'; ?></title>

    <style>
        body{
            margin:0;
            font-family:Arial,sans-serif;
        }

        header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 50px;
            background:#fff;
            box-shadow:0 2px 5px rgba(0,0,0,.1);
        }

        nav a{
            text-decoration:none;
            margin:0 15px;
            color:#333;
            font-weight:bold;
        }

        .book{
            background:#007BFF;
            color:#fff;
            padding:10px 20px;
            border-radius:20px;
            text-decoration:none;
        }
    </style>
</head>
<body>

<header>

    <h2>Nusantara Travel</h2>

    <nav>
        <a href="<?= site_url('website'); ?>">Home</a>
        <a href="<?= site_url('website/destinations'); ?>">Destinations</a>
        <a href="<?= site_url('website/blog'); ?>">Blog</a>
        <a href="<?= site_url('website/about'); ?>">About Us</a>
    </nav>

    <a href="#" class="book">Book Now</a>

</header>