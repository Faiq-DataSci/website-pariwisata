<div class="page-header">
    <h1>Edit Artikel</h1>
    <p>Ubah informasi atau berita wisata Pantai Pecaron</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/edit_artikel_aksi') ?>" method="post">
            <input type="hidden" name="id_artikel" value="<?= $artikel->id_artikel ?>">
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="judul" style="font-weight: bold;">Judul Artikel</label>
                <input type="text" name="judul" id="judul" class="form-control" value="<?= htmlspecialchars($artikel->judul) ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="penulis" style="font-weight: bold;">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="<?= htmlspecialchars($artikel->penulis) ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="tanggal" style="font-weight: bold;">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= htmlspecialchars($artikel->tanggal) ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="konten" style="font-weight: bold;">Isi Artikel</label>
                <textarea name="konten" id="konten" class="form-control" rows="8" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"><?= htmlspecialchars($artikel->konten) ?></textarea>
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="font-weight: bold;">Status</label>
                <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Publikasi" <?= strtolower($artikel->status) == 'publikasi' ? 'selected' : '' ?>>Publikasi</option>
                    <option value="Draft" <?= strtolower($artikel->status) == 'draft' ? 'selected' : '' ?>>Draft</option>
                </select>
            </div>
            
            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan Perubahan</button>
                <a href="<?= base_url('admin/artikel') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>
