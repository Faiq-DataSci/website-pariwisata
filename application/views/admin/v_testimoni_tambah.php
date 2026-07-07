<div class="page-header">
    <h1>Tambah Testimoni</h1>
    <p>Tambahkan testimoni baru untuk konten Voice of Paradise</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/tambah_testimoni_aksi') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama" style="font-weight: bold;">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="isi" style="font-weight: bold;">Isi Testimoni</label>
                <textarea name="isi" id="isi" class="form-control" rows="5" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"></textarea>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="rating" style="font-weight: bold;">Rating</label>
                <select name="rating" id="rating" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <?php for ($i = 5; $i >= 1; $i--) : ?>
                        <option value="<?= $i ?>"><?= $i ?> bintang</option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="foto" style="font-weight: bold;">Foto Profil (opsional)</label>
                <input type="file" name="foto" id="foto" class="form-control" accept="image/png, image/jpeg, image/jpg" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                <small style="color: #666; display: block; margin-top: 5px;">Ukuran maksimal 2MB. Format JPG/PNG.</small>
            </div>
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="font-weight: bold;">Status</label>
                <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Aktif">Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                </select>
            </div>
            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan</button>
                <a href="<?= base_url('admin/testimoni') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>