<div class="page-header">
    <h1>Unggah Gambar</h1>
    <p>Tambahkan gambar baru ke galeri destinasi wisata</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <!-- Penambahan multipart/form-data sangat penting untuk upload file -->
        <form action="<?= base_url('admin/tambah_gambar_aksi') ?>" method="post" enctype="multipart/form-data">
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="keterangan" style="font-weight: bold;">Keterangan Gambar (Judul/Alt text)</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Contoh: Pemandangan Pantai Pecaron dari bukit" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="file_gambar" style="font-weight: bold;">Pilih File Gambar</label>
                <input type="file" name="file_gambar" id="file_gambar" class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; background-color: #f8fafc;">
                <small style="color: #64748b; display: block; margin-top: 5px;">Format yang didukung: JPG, JPEG, PNG, GIF. Ukuran maksimal: 2MB.</small>
            </div>
            
            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Unggah Gambar</button>
                <a href="<?= base_url('admin/gambar') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>
