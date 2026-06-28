<div class="page-header">
    <h1>Kelola Kontak</h1>
    <p>Pesan dan pertanyaan dari pengunjung website</p>
</div>

<div class="content-card">
    <div class="content-card-header">
        <h3>Kotak Masuk</h3>
        <a href="<?= base_url('admin/tambah_kontak') ?>" class="btn btn-primary">Tambah Kontak</a>
    </div>
    <div class="content-card-body" style="padding: 0;">
        <div style="overflow-x: auto;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th width="20%">Pengirim</th>
                        <th width="20%">Email / No HP</th>
                        <th width="35%">Isi Pesan</th>
                        <th width="15%">Tanggal</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kontak as $k) : ?>
                    <tr class="<?= strtolower($k->status) == 'unread' ? 'msg-unread' : 'msg-read' ?>">
                        <td>
                            <?php if (strtolower($k->status) == 'unread') : ?>
                                <span class="status-dot status-dot-unread"></span>
                            <?php else : ?>
                                <span class="status-dot status-dot-read"></span>
                            <?php endif; ?>
                            <strong><?= htmlspecialchars($k->pengirim) ?></strong>
                        </td>
                        <td><?= htmlspecialchars($k->email) ?><br><?= htmlspecialchars($k->no_hp) ?></td>
                        <td><?= htmlspecialchars(strlen($k->isi_pesan) > 80 ? substr($k->isi_pesan, 0, 80) . '...' : $k->isi_pesan) ?></td>
                        <td><?= date('d M Y', strtotime($k->tanggal)) ?></td>
                        <td>
                            <div class="action-btns" style="display: flex; gap: 5px;">
                                <a href="<?= base_url('admin/edit_kontak/' . $k->id_kontak) ?>" class="btn btn-sm btn-edit" style="text-decoration: none;">Edit</a>
                                <a href="<?= base_url('admin/hapus_kontak/' . $k->id_kontak) ?>" class="btn btn-sm btn-delete" style="text-decoration: none;" onclick="return confirm('Yakin ingin menghapus pesan ini?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
