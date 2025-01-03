<?php include 'app/templates/header.php'; ?>

<h4 class="text-center my-4">Tambah Kamar</h4>

<div class="container">
    <form method="POST" action="<?php echo BASE_URL; ?>kamar/tambah">
        <div class="mb-3">
            <label for="nomor_kamar" class="form-label">Nomor Kamar</label>
            <input type="text" id="nomor_kamar" name="nomor_kamar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
            <input type="text" id="tipe_kamar" name="tipe_kamar1" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status_kamar" class="form-label">Status Kamar</label>
            <input type="text" id="status_kamar" name="status_kamar" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo BASE_URL; ?>kamar" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include 'app/templates/footer.php'; ?>
