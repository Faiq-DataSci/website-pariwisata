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

				<li>
					<a href="<?= site_url('website') ?>">Home</a>
				</li>

				<li>
					<a href="<?= site_url('website/destinations') ?>">Destinations</a>
				</li>

				<li>
					<a href="<?= site_url('website/blog') ?>">Blog</a>
				</li>

				<li>
					<a href="<?= site_url('website/about') ?>">About Us</a>
				</li>

			</ul>

			<div class="btn-login">
				<a href="<?= site_url('auth'); ?>" class="btn-login">Login</a>
			</div>
		</nav>
	</header>
