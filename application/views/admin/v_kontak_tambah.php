<div class="page-header">
    <h1>Tambah Kontak</h1>
    <p>Masukkan data kontak yang ingin dikelola di sistem.</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/tambah_kontak_aksi') ?>" method="post">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="pengirim" style="font-weight: bold;">Nama Pengirim</label>
                <input type="text" name="pengirim" id="pengirim" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px; display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <div>
                    <label for="email" style="font-weight: bold;">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                </div>
                <div>
                    <label for="no_hp" style="font-weight: bold;">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="isi_pesan" style="font-weight: bold;">Isi Pesan</label>
                <textarea name="isi_pesan" id="isi_pesan" class="form-control" rows="6" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"></textarea>
            </div>

            <div class="form-group" style="margin-bottom: 15px; display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                <div>
                    <label for="tanggal" style="font-weight: bold;">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                </div>
                <div>
                    <label for="status" style="font-weight: bold;">Status</label>
                    <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                        <option value="unread">Unread</option>
                        <option value="read">Read</option>
                    </select>
                </div>
            </div>

            <div style="margin-top: 25px; display: flex; gap: 10px; flex-wrap: wrap;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan Kontak</button>
                <a href="<?= base_url('admin/kontak') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-flex; align-items: center; justify-content: center;">Batal</a>
            </div>
        </form>
    </div>
</div>