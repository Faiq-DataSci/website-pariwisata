<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url('assets1/style.css') ?>">
</head>

<body>

<header>
    <nav class="navbar">

        <div class="logo">
            <a href="<?= site_url('website') ?>">
                <span>Nusantara</span> Travel
            </a>
        </div>

        <ul class="menu">

            <?php if(!$this->session->userdata('login')) : ?>

                <li>
                    <a class="btn-login" href="<?= site_url('auth/login') ?>">
                        Login
                    </a>
                </li>

            <?php else : ?>

                <li>
                    <a href="<?= site_url('website/destinations') ?>">Destinations</a>
                </li>

                <li>
                    <a href="<?= site_url('website/blog') ?>">Blog</a>
                </li>

                <li>
                    <a href="<?= site_url('website/about') ?>">About Us</a>
                </li>

                <li>
                    <a class="btn-login" href="<?= site_url('auth/logout') ?>">
                        Logout
                    </a>
                </li>

            <?php endif; ?>

        </ul>

    </nav>
</header>