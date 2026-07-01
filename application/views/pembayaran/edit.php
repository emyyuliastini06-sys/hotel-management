<h3>Edit Pembayaran</h3>

<form method="post">

    <div class="mb-3">
        <label>Pemesanan</label>

        <select name="id_pemesanan" class="form-control" required>

            <?php foreach($pemesanan as $p): ?>

                <option value="<?= $p->id_pemesanan; ?>"
                    <?= ($p->id_pemesanan == $pembayaran->id_pemesanan) ? 'selected' : ''; ?>>

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
            value="<?= $pembayaran->tanggal_bayar; ?>"
            required>
    </div>

    <div class="mb-3">
        <label>Total Bayar</label>

        <input
            type="number"
            name="total_bayar"
            class="form-control"
            value="<?= $pembayaran->total_bayar; ?>"
            required>
    </div>

    <div class="mb-3">
        <label>Metode Pembayaran</label>

        <select name="metode_pembayaran" class="form-control">

            <option value="Cash"
                <?= ($pembayaran->metode_pembayaran == 'Cash') ? 'selected' : ''; ?>>
                Cash
            </option>

            <option value="Transfer"
                <?= ($pembayaran->metode_pembayaran == 'Transfer') ? 'selected' : ''; ?>>
                Transfer
            </option>

            <option value="QRIS"
                <?= ($pembayaran->metode_pembayaran == 'QRIS') ? 'selected' : ''; ?>>
                QRIS
            </option>

        </select>

    </div>

    <div class="mb-3">
        <label>Status</label>

        <select name="status" class="form-control">

            <option value="Belum Lunas"
                <?= ($pembayaran->status == 'Belum Lunas') ? 'selected' : ''; ?>>
                Belum Lunas
            </option>

            <option value="Lunas"
                <?= ($pembayaran->status == 'Lunas') ? 'selected' : ''; ?>>
                Lunas
            </option>

        </select>

    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="<?= site_url('pembayaran'); ?>" class="btn btn-secondary">
        Kembali
    </a>

</form>