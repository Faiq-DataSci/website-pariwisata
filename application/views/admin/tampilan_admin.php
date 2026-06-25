<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pantai Pecaron</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body>

    <div class="sidebar">
        <h2>ADMIN PANTAI PECARON</h2>
        <ul>
            <li>
                <a href="<?= base_url('admin/index') ?>">Dashboard</a>
            </li>
            <li>
                <a href="<?= base_url('admin/wisata') ?>">Kelola Wisata</a>
            </li>
            <li>
                <a href="<?= base_url('admin/akun') ?>">Kelola Akun</a>
            </li>
            <li>
                <a href="<?= base_url('admin/admin_tambahan') ?>">Kelola Admin</a>
            </li>
            <li>
                <a href="<?= base_url('admin/gambar') ?>">Kelola Gambar</a>
            </li>
            <li>
                <a href="<?= base_url('admin/kontak') ?>">Kelola Kontak</a>
            </li>
            <li>
                <a id="keluar" href="<?= base_url('admin/logout') ?>" onclick="return confirm('Apakah Anda yakin ingin keluar?')">Logout</a>
            </li>
        </ul>
    </div>

    <div class="main">
        <div class="header">
            <h1>Dashboard Admin</h1>
        </div>
        <div class="content">
            <p>Selamat datang di panel admin Pantai Pecaron.</p>
        </div>
    </div>

</body>

</html>