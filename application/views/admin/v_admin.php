<div class="page-header">
    <h1>Dashboard</h1>
    <p>Ringkasan aktivitas dan data Pantai Pecaron</p>
</div>

<div class="welcome-banner">
    <h2>Selamat Datang, Admin!</h2>
    <p>Kelola Website pariwisata Pantai Pecaron. Yang Mengakses Admin Hanyalah Kelompok Sains Data.</p>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-card-header">
            <span class="stat-card-label">Total Wisata</span>
            <div class="stat-card-icon">
                <div class="menu-icon icon-wisata"></div>
            </div>
        </div>
        <div class="stat-card-value"><?= number_format($total_wisata ?? 0) ?></div>
        <div class="stat-card-desc">Destinasi terdaftar</div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <span class="stat-card-label">Total Artikel</span>
            <div class="stat-card-icon">
                <div class="menu-icon icon-artikel"></div>
            </div>
        </div>
        <div class="stat-card-value"><?= number_format($total_artikel_published ?? 0) ?></div>
        <div class="stat-card-desc">Artikel dipublikasi</div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <span class="stat-card-label">Akun Pengguna</span>
            <div class="stat-card-icon">
                <div class="menu-icon icon-akun"></div>
            </div>
        </div>
        <div class="stat-card-value"><?= number_format($total_akun ?? 0) ?></div>
        <div class="stat-card-desc">Pengguna aktif</div>
    </div>

    <div class="stat-card">
        <div class="stat-card-header">
            <span class="stat-card-label">Pesan Baru</span>
            <div class="stat-card-icon">
                <div class="menu-icon icon-kontak"></div>
            </div>
        </div>
        <div class="stat-card-value"><?= number_format($total_pesan_baru ?? 0) ?></div>
        <div class="stat-card-desc">Belum dibaca</div>
    </div>
</div>

<div class="quick-actions">
    <a href="<?= base_url('admin/wisata') ?>" class="quick-action-card">
        <div class="quick-action-dot" style="background: #0d6efd;"></div>
        Tambah Wisata Baru
    </a>
    <a href="<?= base_url('admin/artikel') ?>" class="quick-action-card">
        <div class="quick-action-dot" style="background: #8b5cf6;"></div>
        Tulis Artikel Baru
    </a>
    <a href="<?= base_url('admin/gambar') ?>" class="quick-action-card">
        <div class="quick-action-dot" style="background: #f59e0b;"></div>
        Upload Foto Galeri
    </a>
</div>