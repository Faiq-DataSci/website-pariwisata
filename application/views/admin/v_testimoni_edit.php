<div class="page-header">
    <h1>Edit Testimoni</h1>
    <p>Ubah konten testimoni pengunjung</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/edit_testimoni_aksi') ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_testimoni" value="<?= htmlspecialchars($testimoni->id_testimoni) ?>">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama" style="font-weight: bold;">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= htmlspecialchars($testimoni->nama) ?>" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="isi" style="font-weight: bold;">Isi Testimoni</label>
                <textarea name="isi" id="isi" class="form-control" rows="5" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"><?= htmlspecialchars($testimoni->isi) ?></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="rating" style="font-weight: bold;">Rating</label>
                <select name="rating" id="rating" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <?php for ($i = 5; $i >= 1; $i--) : ?>
                        <option value="<?= $i ?>" <?= intval($testimoni->rating) === $i ? 'selected' : '' ?>><?= $i ?> bintang</option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="foto" style="font-weight: bold;">Foto Profil (opsional)</label>
                <?php if (!empty($testimoni->foto) && file_exists(FCPATH . 'assets/images/testimoni/' . $testimoni->foto)) : ?>
                    <div style="margin-bottom: 10px;">
                        <img src="<?= base_url('assets/images/testimoni/' . $testimoni->foto) ?>" alt="<?= htmlspecialchars($testimoni->nama) ?>" style="max-width: 150px; border-radius: 8px;">
                    </div>
                <?php endif; ?>
                <input type="file" name="foto" id="foto" class="form-control" accept="image/png, image/jpeg, image/jpg" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                <small style="color: #666; display: block; margin-top: 5px;">Unggah foto baru untuk mengganti foto saat ini.</small>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="font-weight: bold;">Status</label>
                <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Aktif" <?= $testimoni->status === 'Aktif' ? 'selected' : '' ?>>Aktif</option>
                    <option value="Nonaktif" <?= $testimoni->status === 'Nonaktif' ? 'selected' : '' ?>>Nonaktif</option>
                </select>
            </div>
            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan Perubahan</button>
                <a href="<?= base_url('admin/testimoni') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>