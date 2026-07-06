<div class="page-header">
    <h1>Tambah Wisata</h1>
    <p>Tambahkan destinasi atau fasilitas wisata baru</p>
</div>

<div class="content-card">
    <div class="content-card-body" style="padding: 20px;">
        <form action="<?= base_url('admin/tambah_wisata_aksi') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="nama_wisata" style="font-weight: bold;">Nama Wisata</label>
                <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="deskripsi" style="font-weight: bold;">Deskripsi Singkat</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;"></textarea>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="kategori" style="font-weight: bold;">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="file_gambar" style="font-weight: bold;">Foto/Gambar</label>
                <div style="display: flex; align-items: center; justify-content: center; width: 100%; max-width: 250px; aspect-ratio: 1; background: #f9f9f9; border: 2px dashed #ddd; border-radius: 8px; overflow: hidden; cursor: pointer; margin-bottom: 10px;" id="image-preview-container" onclick="document.getElementById('file_gambar').click();">
                    <img id="image-preview" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                    <span id="preview-placeholder" style="color: #999; text-align: center; font-size: 12px; padding: 15px;">Klik untuk upload<br>atau drag & drop</span>
                </div>
                <input type="file" name="file_gambar" id="file_gambar" class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif" style="display: none;">
                <small style="color: #666; margin-top: 10px; display: block;">Format: JPG, PNG, GIF. Ukuran maksimal: 2MB</small>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="status" style="font-weight: bold;">Status</label>
                <select name="status" id="status" class="form-control" required style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    <option value="Aktif">Aktif</option>
                    <option value="Nonaktif">Nonaktif</option>
                    <option value="Renovasi">Renovasi</option>
                </select>
            </div>

            <div style="margin-top: 25px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Simpan</button>
                <a href="<?= base_url('admin/wisata') ?>" class="btn" style="background: #e2e8f0; color: #475569; text-decoration: none; padding: 10px 20px; display: inline-block;">Batal</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('file_gambar').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const preview = document.getElementById('image-preview');
                const placeholder = document.getElementById('preview-placeholder');
                preview.src = event.target.result;
                preview.style.display = 'block';
                if (placeholder) placeholder.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    });

    // Drag and drop
    const container = document.getElementById('image-preview-container');
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        container.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        container.addEventListener(eventName, () => {
            container.style.background = '#e8f0ff';
            container.style.borderColor = '#0066cc';
        }, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        container.addEventListener(eventName, () => {
            container.style.background = '#f9f9f9';
            container.style.borderColor = '#ddd';
        }, false);
    });

    container.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        document.getElementById('file_gambar').files = files;
        const event = new Event('change', {
            bubbles: true
        });
        document.getElementById('file_gambar').dispatchEvent(event);
    }
</script>