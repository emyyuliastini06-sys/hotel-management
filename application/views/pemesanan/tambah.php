<h3 class="mb-4">Tambah Pemesanan</h3>

<form action="" method="post">

    <div class="mb-3">
        <label>Nama Tamu</label>
        <select name="id_tamu" class="form-control" required>
            <option value="">-- Pilih Tamu --</option>
            <?php foreach($tamu as $t): ?>
                <option value="<?= $t->id_tamu ?>">
                    <?= $t->nama_tamu ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Nomor Kamar</label>
        <select name="id_kamar" class="form-control" required>
            <option value="">-- Pilih Kamar --</option>
            <?php foreach($kamar as $k): ?>
                <option value="<?= $k->id_kamar ?>">
                    <?= $k->nomor_kamar ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Check In</label>
        <input type="date" name="tanggal_checkin" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tanggal Check Out</label>
        <input type="date" name="tanggal_checkout" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Jumlah Tamu</label>
        <input type="number" name="jumlah_tamu" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="Booking">Booking</option>
            <option value="Check In">Check In</option>
            <option value="Check Out">Check Out</option>
        </select>
    </div>

    <button class="btn btn-primary">
        Simpan
    </button>

    <a href="<?= site_url('pemesanan'); ?>" class="btn btn-secondary">
        Kembali
    </a>

</form>