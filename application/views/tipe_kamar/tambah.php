<h2 class="mb-4">Tambah Tipe Kamar</h2>

<div class="card shadow">

    <div class="card-body">

        <form method="post">

            <div class="mb-3">
                <label>Nama Tipe</label>
                <input type="text" name="nama_tipe" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kapasitas</label>
                <input type="number" name="kapasitas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">
                Simpan
            </button>

            <a href="<?= site_url('tipe_kamar'); ?>" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>

</div>