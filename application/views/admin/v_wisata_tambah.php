<div class="page-header">
    <h1>Tambah Wisata</h1>
    <p>Tambahkan destinasi atau fasilitas wisata baru</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/tambah_wisata_aksi') ?>" method="post">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama_wisata" style="font-weight: bold;">Nama Wisata</label>
                <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="deskripsi" style="font-weight: bold;">Deskripsi Singkat</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"></textarea>
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="kategori" style="font-weight: bold;">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="font-weight: bold;">Status</label>
                <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Aktif">Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                    <option value="Renovasi">Renovasi</option>
                </select>
            </div>
            
            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan</button>
                <a href="<?= base_url('admin/wisata') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>
