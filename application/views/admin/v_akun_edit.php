<div class="page-header">
    <h1>Edit Akun</h1>
    <p>Ubah informasi akun administrator</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/edit_akun_aksi') ?>" method="post">
            <input type="hidden" name="id_admin" value="<?= $akun->id_admin ?>">
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama_lengkap" style="font-weight: bold;">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= htmlspecialchars($akun->nama_lengkap) ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="username" style="font-weight: bold;">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= htmlspecialchars($akun->username) ?>" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="password" style="font-weight: bold;">Password (Kosongkan jika tidak ingin mengubah)</label>
                <input type="password" name="password" id="password" class="form-control" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>
            
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="role" style="font-weight: bold;">Role</label>
                <select name="role" id="role" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Admin" <?= strtolower($akun->role) == 'admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="Super Admin" <?= strtolower($akun->role) == 'super admin' ? 'selected' : '' ?>>Super Admin</option>
                </select>
            </div>
            
            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan Perubahan</button>
                <a href="<?= base_url('admin/akun') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>
