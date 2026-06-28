<div class="page-header">
    <h1>Kelola Artikel</h1>
    <p>Informasi, berita, dan blog wisata Pantai Pecaron</p>
</div>

<div class="content-card">
    <div class="content-card-header">
        <h3>Daftar Artikel</h3>
        <a href="<?= base_url('admin/tambah_artikel') ?>" class="btn btn-primary">Tulis Artikel Baru</a>
    </div>
    <div class="content-card-body" style="padding: 0;">
        <div style="overflow-x: auto;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="35%">Judul Artikel</th>
                        <th width="15%">Penulis</th>
                        <th width="15%">Tanggal</th>
                        <th width="15%">Status</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($artikel as $a) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><strong><?= htmlspecialchars($a->judul) ?></strong></td>
                        <td><?= htmlspecialchars($a->penulis) ?></td>
                        <td><?= date('d M Y', strtotime($a->tanggal)) ?></td>
                        <td>
                            <?php if (strtolower($a->status) == 'publikasi' || strtolower($a->status) == 'aktif') : ?>
                                <span class="badge badge-success"><?= htmlspecialchars($a->status) ?></span>
                            <?php else : ?>
                                <span class="badge badge-warning"><?= htmlspecialchars($a->status) ?></span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="action-btns">
                                <a href="<?= base_url('admin/edit_artikel/' . $a->id_artikel) ?>" class="btn btn-sm btn-edit" style="text-decoration: none;">Edit</a>
                                <a href="<?= base_url('admin/hapus_artikel/' . $a->id_artikel) ?>" class="btn btn-sm btn-delete" style="text-decoration: none;" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
