<div class="page-header">
    <h1>Kelola Wisata</h1>
    <p>Daftar destinasi dan fasilitas wisata Pantai Pecaron</p>
</div>

<div class="content-card">
    <div class="content-card-header">
        <h3>Daftar Destinasi</h3>
        <a href="<?= base_url('admin/tambah_wisata') ?>" class="btn btn-primary">Tambah Wisata</a>
    </div>
    <div class="content-card-body" style="padding: 0;">
        <div style="overflow-x: auto;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Nama Wisata</th>
                        <th width="30%">Deskripsi Singkat</th>
                        <th width="15%">Kategori</th>
                        <th width="15%">Status</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($wisata as $w) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><strong><?= htmlspecialchars($w->nama_wisata) ?></strong></td>
                        <td><?= htmlspecialchars(strlen($w->deskripsi) > 50 ? substr($w->deskripsi, 0, 50) . '...' : $w->deskripsi) ?></td>
                        <td><?= htmlspecialchars($w->kategori) ?></td>
                        <td>
                            <?php if (strtolower($w->status) == 'aktif') : ?>
                                <span class="badge badge-success"><?= htmlspecialchars($w->status) ?></span>
                            <?php else : ?>
                                <span class="badge badge-warning"><?= htmlspecialchars($w->status) ?></span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="action-btns">
                                <a href="<?= base_url('admin/edit_wisata/' . $w->id_wisata) ?>" class="btn btn-sm btn-edit" style="text-decoration: none;">Edit</a>
                                <a href="<?= base_url('admin/hapus_wisata/' . $w->id_wisata) ?>" class="btn btn-sm btn-delete" style="text-decoration: none;" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
