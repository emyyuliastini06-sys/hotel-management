<h3>Tambah Pembayaran</h3>

<form method="post">

    <div class="mb-3">
        <label>Pemesanan</label>

        <select name="id_pemesanan" class="form-control" required>

            <option value="">-- Pilih Pemesanan --</option>

            <?php foreach($pemesanan as $p): ?>

                <option value="<?= $p->id_pemesanan; ?>">

                    <?= $p->nama_tamu; ?> - Kamar <?= $p->nomor_kamar; ?>

                </option>

            <?php endforeach; ?>

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal Bayar</label>

        <input
            type="date"
            name="tanggal_bayar"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label>Total Bayar</label>

        <input
            type="number"
            name="total_bayar"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label>Metode Pembayaran</label>

        <select name="metode_pembayaran" class="form-control">

            <option>Cash</option>
            <option>Transfer</option>
            <option>QRIS</option>

        </select>

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status" class="form-control">

            <option>Belum Lunas</option>
            <option>Lunas</option>

        </select>

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

    <a href="<?= site_url('pembayaran'); ?>" class="btn btn-secondary">

        Kembali

    </a>

</form>