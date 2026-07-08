<div class="page-header">
    <h1>Kelola Testimoni</h1>
    <p>Kelola pesan pengalaman pengunjung di halaman depan</p>
</div>

<div class="content-card">
    <div class="content-card-header">
        <h3>Daftar Testimoni</h3>
        <a href="<?= base_url('admin/tambah_testimoni') ?>" class="btn btn-primary">Tambah Testimoni</a>
    </div>
    <div class="content-card-body" style="padding: 0;">
        <div style="overflow-x: auto;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="18%">Nama</th>
                        <th width="30%">Isi Testimoni</th>
                        <th width="10%">Rating</th>
                        <th width="15%">Status</th>
                        <th width="22%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($testimoni as $t) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><strong><?= htmlspecialchars($t->nama) ?></strong></td>
                            <td><?= htmlspecialchars(strlen($t->isi) > 60 ? substr($t->isi, 0, 60) . '...' : $t->isi) ?></td>
                            <td><?= intval($t->rating) ?> / 5</td>
                            <td>
                                <?php if (strtolower($t->status) == 'aktif') : ?>
                                    <span class="badge badge-success"><?= htmlspecialchars($t->status) ?></span>
                                <?php else : ?>
                                    <span class="badge badge-warning"><?= htmlspecialchars($t->status) ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="action-btns">
                                    <?php if (strtolower($t->status) == 'menunggu') : ?>
                                        <a href="<?= base_url('admin/approve_testimoni/' . $t->id_testimoni) ?>" class="btn btn-sm btn-success" style="text-decoration: none;">Approve</a>
                                    <?php endif; ?>
                                    <a href="<?= base_url('admin/edit_testimoni/' . $t->id_testimoni) ?>" class="btn btn-sm btn-edit" style="text-decoration: none;">Edit</a>
                                    <a href="<?= base_url('admin/hapus_testimoni/' . $t->id_testimoni) ?>" class="btn btn-sm btn-delete" style="text-decoration: none;" onclick="return confirm('Yakin ingin menghapus testimoni ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if (empty($testimoni)) : ?>
                        <tr>
                            <td colspan="6" style="text-align: center; padding: 20px; color: #64748b;">Belum ada testimoni.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>