<h2>Ganti Gambar Halaman Depan</h2>

<img src="<?= base_url('assets/upload/' . $gambar->gambar_header); ?>"
    width="300">

<br><br>

<form action="<?= base_url('admin/upload_gambar') ?>"
    method="post"
    enctype="multipart/form-data">

    <input type="file" name="gambar">

    <br><br>

    <button type="submit">
        Simpan
    </button>

</form>