<h2 class="mb-4">Edit Tipe Kamar</h2>

<div class="card shadow">
    <div class="card-body">

        <form method="post">

            <div class="mb-3">
                <label>Nama Tipe</label>
                <input type="text" name="nama_tipe"
                    class="form-control"
                    value="<?= $tipe->nama_tipe; ?>" required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga"
                    class="form-control"
                    value="<?= $tipe->harga; ?>" required>
            </div>

            <div class="mb-3">
                <label>Kapasitas</label>
                <input type="number" name="kapasitas"
                    class="form-control"
                    value="<?= $tipe->kapasitas; ?>" required>
            </div>

            <div class="mb-3">
                <label>Keterangan</label>
                <textarea name="keterangan"
                    class="form-control"><?= $tipe->keterangan; ?></textarea>
            </div>

            <button class="btn btn-warning">
                Update
            </button>

            <a href="<?= site_url('tipe_kamar'); ?>" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>