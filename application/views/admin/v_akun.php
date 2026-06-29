<div class="page-header">
    <h1>Kelola Akun</h1>
    <p>Manajemen data akun administrator dan pengguna</p>
</div>

<div class="content-card">
    <div class="content-card-header">
        <h3>Daftar Pengguna Aktif</h3>
        <a href="<?= base_url('admin/tambah_akun') ?>" class="btn btn-primary">Tambah Akun</a>
    </div>
    <div class="content-card-body" style="padding: 0;">
        <div style="overflow-x: auto;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="25%">Nama Lengkap</th>
                        <th width="20%">Username</th>
                        <th width="15%">Role</th>
                        <th width="20%">Terakhir Login</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($akun as $a) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><strong><?= htmlspecialchars($a->nama_lengkap) ?></strong></td>
                            <td><?= htmlspecialchars($a->username) ?></td>
                            <td>
                                <?php if (strtolower($a->role) == 'admin') : ?>
                                    <span class="badge badge-info"><?= htmlspecialchars($a->role) ?></span>
                                <?php else : ?>
                                    <span class="badge badge-success"><?= htmlspecialchars($a->role) ?></span>
                                <?php endif; ?>
                            </td>
                            <td><?= $a->terakhir_login ? date('d M Y, H:i', strtotime($a->terakhir_login)) : '-' ?></td>
                            <td>
                                <div class="action-btns">
                                    <a href="<?= base_url('admin/edit_akun/' . $a->id_admin) ?>" class="btn btn-sm btn-edit" style="text-decoration: none;">Edit</a>
                                    <a href="<?= base_url('admin/hapus_akun/' . $a->id_admin) ?>" class="btn btn-sm btn-delete" style="text-decoration: none;" onclick="return confirm('Yakin ingin menghapus akun ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>