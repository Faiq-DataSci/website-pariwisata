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
                        <th width="12%">Foto</th>
                        <th width="18%">Nama Wisata</th>
                        <th width="25%">Deskripsi Singkat</th>
                        <th width="12%">Kategori</th>
                        <th width="12%">Status</th>
                        <th width="16%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($wisata as $w) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <div style="width: 80px; height: 80px; background: #f0f0f0; border-radius: 4px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
                                    <?php if (!empty($w->file_gambar)) : ?>
                                        <img src="<?= base_url('assets/images/wisata/' . $w->file_gambar) ?>" alt="<?= htmlspecialchars($w->nama_wisata) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                    <?php else : ?>
                                        <span style="color: #999; font-size: 12px; text-align: center;">Belum ada foto</span>
                                    <?php endif; ?>
                                </div>
                            </td>
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