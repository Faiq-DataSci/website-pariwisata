<div class="page-header">
    <h1>Kelola Gambar</h1>
    <p>Galeri foto pariwisata Pantai Pecaron</p>
</div>

<a href="<?= base_url('admin/tambah_gambar') ?>" class="upload-area" style="text-decoration: none; display: block; color: inherit; cursor: pointer;">
    <div class="empty-state-icon" style="background: transparent;">
        <div class="menu-icon icon-gambar" style="width: 32px; height: 32px; color: #0b5ed7;"></div>
    </div>
    <span class="upload-label">Klik untuk unggah</span> gambar destinasi baru
    <p>Mendukung format JPG, PNG maksimal 2MB per gambar</p>
</a>

<div class="content-card">
    <div class="content-card-header">
        <h3>Galeri Destinasi</h3>
    </div>
    <div class="content-card-body">
        <div class="gallery-grid">
            <?php foreach ($gambar as $g) : ?>
            <div class="gallery-item" style="position: relative;">
                <img src="<?= base_url('assets/images/gallery/' . $g->file_gambar) ?>" alt="<?= htmlspecialchars($g->keterangan) ?>" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                <div class="gallery-item-overlay" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                    <span style="margin-bottom: 10px;"><?= htmlspecialchars($g->keterangan) ?></span>
                    <a href="<?= base_url('admin/hapus_gambar/' . $g->id_gambar) ?>" class="btn btn-sm btn-delete" style="text-decoration: none;" onclick="return confirm('Yakin ingin menghapus gambar ini?')">Hapus</a>
                </div>
            </div>
            <?php endforeach; ?>
            
            <?php if(empty($gambar)): ?>
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b;">
                <p>Belum ada gambar yang diunggah.</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
