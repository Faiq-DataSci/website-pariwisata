<div class="page-header">
    <h1>Edit Wisata</h1>
    <p>Ubah data destinasi atau fasilitas wisata</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/edit_wisata_aksi') ?>" method="post">
            <input type="hidden" name="id_wisata" value="<?= $wisata->id_wisata ?>">
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama_wisata" style="font-weight: bold;">Nama Wisata</label>
                <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" value="<?= htmlspecialchars($wisata->nama_wisata) ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="deskripsi" style="font-weight: bold;">Deskripsi Singkat</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"><?= htmlspecialchars($wisata->deskripsi) ?></textarea>
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="kategori" style="font-weight: bold;">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= htmlspecialchars($wisata->kategori) ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="font-weight: bold;">Status</label>
                <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Aktif" <?= $wisata->status == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
                    <option value="Nonaktif" <?= $wisata->status == 'Nonaktif' ? 'selected' : '' ?>>Nonaktif</option>
                    <option value="Renovasi" <?= $wisata->status == 'Renovasi' ? 'selected' : '' ?>>Renovasi</option>
                </select>
            </div>
            
            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan Perubahan</button>
                <a href="<?= base_url('admin/wisata') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>
