<div class="page-header">
    <h1>Tulis Artikel Baru</h1>
    <p>Tambahkan informasi atau berita wisata Pantai Pecaron</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/tambah_artikel_aksi') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="judul" style="font-weight: bold;">Judul Artikel</label>
                <input type="text" name="judul" id="judul" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="penulis" style="font-weight: bold;">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control" value="Admin" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="tanggal" style="font-weight: bold;">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="konten" style="font-weight: bold;">Isi Artikel</label>
                <textarea name="konten" id="konten" class="form-control" rows="8" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"></textarea>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="font-weight: bold;">Status</label>
                <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Publikasi">Publikasi</option>
                    <option value="Draft">Draft</option>
                </select>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="gambar_artikel" style="font-weight: bold;">Gambar Artikel</label>
                <input type="file" name="gambar_artikel" id="gambar_artikel" accept="image/*" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan Artikel</button>
                <a href="<?= base_url('admin/artikel') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>