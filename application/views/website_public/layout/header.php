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

                <?php if (!$this->session->userdata('user_login')) : ?>

                    <li>
                        <a href="<?= site_url('website/blog') ?>">Blog</a>
                    </li>

                    <li>
                        <a href="<?= site_url('website/about') ?>">About Us</a>
                    </li>

                    <li>
                        <a class="btn-login" href="<?= site_url('userauth/login') ?>">
                            Login
                        </a>
                    </li>

                <?php else : ?>

                    <li>
                        <a href="<?= site_url('website/blog') ?>">Blog</a>
                    </li>

                    <li>
                        <a href="<?= site_url('website/about') ?>">About Us</a>
                    </li>

                    <li style="position: relative;">
                        <a href="#" class="btn-login" onclick="event.preventDefault(); document.getElementById('user-menu').classList.toggle('show');">
                            <?= htmlspecialchars($this->session->userdata('nama_lengkap')) ?> ▼
                        </a>
                        <div id="user-menu" style="position: absolute; top: 100%; right: 0; background: white; border: 1px solid #ddd; border-radius: 5px; min-width: 150px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); z-index: 1000; display: none;">
                            <a href="<?= site_url('userauth/logout') ?>" style="display: block; padding: 10px 15px; color: #333; text-decoration: none; border-top: 1px solid #eee;">
                                Logout
                            </a>
                        </div>
                    </li>

                <?php endif; ?>

            </ul>

        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var userMenu = document.getElementById('user-menu');
            if (!userMenu) return;

            // Cari tombol toggle yang ada di dalam li yang sama
            var toggle = userMenu.parentElement.querySelector('a.btn-login');
            if (!toggle) return;

            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                // Toggle visibility
                userMenu.style.display = (userMenu.style.display === 'block') ? 'none' : 'block';
            });

            // Tutup menu ketika klik di luar
            document.addEventListener('click', function(e) {
                if (!userMenu.contains(e.target) && !toggle.contains(e.target)) {
                    userMenu.style.display = 'none';
                }
            });
        });
    </script>