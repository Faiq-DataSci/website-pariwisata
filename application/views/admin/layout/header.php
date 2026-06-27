<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - Admin Pantai Pecaron' : 'Admin Pantai Pecaron' ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <h2>Pantai Pecaron</h2>
            <p>Admin</p>
        </div>

        <nav class="sidebar-menu">
            <div class="menu-label">Menu Utama</div>
            <ul>
                <li>
                    <a href="<?= base_url('admin/index') ?>" class="<?= isset($active_menu) && $active_menu == 'dashboard' ? 'active' : '' ?>">
                        <div class="menu-icon icon-dashboard"><span></span></div>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/wisata') ?>" class="<?= isset($active_menu) && $active_menu == 'wisata' ? 'active' : '' ?>">
                        <div class="menu-icon icon-wisata"></div>
                        Kelola Wisata
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/artikel') ?>" class="<?= isset($active_menu) && $active_menu == 'artikel' ? 'active' : '' ?>">
                        <div class="menu-icon icon-artikel"></div>
                        Kelola Artikel
                    </a>
                </li>
            </ul>

            <div class="menu-label">Pengaturan</div>
            <ul>
                <li>
                    <a href="<?= base_url('admin/akun') ?>" class="<?= isset($active_menu) && $active_menu == 'akun' ? 'active' : '' ?>">
                        <div class="menu-icon icon-akun"></div>
                        Kelola Akun
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/gambar') ?>" class="<?= isset($active_menu) && $active_menu == 'gambar' ? 'active' : '' ?>">
                        <div class="menu-icon icon-gambar"></div>
                        Kelola Gambar
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/kontak') ?>" class="<?= isset($active_menu) && $active_menu == 'kontak' ? 'active' : '' ?>">
                        <div class="menu-icon icon-kontak"></div>
                        Kelola Kontak
                    </a>
                </li>
            </ul>

            <div class="menu-logout">
                <a id="keluar" href="<?= base_url('auth1/logout') ?>" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                    <div class="menu-icon icon-logout"></div>
                    Logout
                </a>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <!-- Topbar -->
        <header class="topbar">
            <div class="topbar-left">
                <button class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="topbar-title"><?= isset($title) ? $title : 'Dashboard' ?></div>
            </div>
            <div class="topbar-right">
                <div class="topbar-user">
                    <div class="topbar-avatar">A</div>
                    <span>Akun Admin</span>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="page-content">