<h3 class="mb-4">Edit Pemesanan</h3>

<form action="" method="post">

    <div class="mb-3">
        <label>Nama Tamu</label>

        <select name="id_tamu" class="form-control">

            <?php foreach($tamu as $t): ?>

            <option value="<?= $t->id_tamu ?>"
                <?= ($pemesanan->id_tamu==$t->id_tamu)?'selected':'' ?>>

                <?= $t->nama_tamu ?>

            </option>

            <?php endforeach; ?>

        </select>

    </div>

    <div class="mb-3">
        <label>Nomor Kamar</label>

        <select name="id_kamar" class="form-control">

            <?php foreach($kamar as $k): ?>

            <option value="<?= $k->id_kamar ?>"
                <?= ($pemesanan->id_kamar==$k->id_kamar)?'selected':'' ?>>

                <?= $k->nomor_kamar ?>

            </option>

            <?php endforeach; ?>

        </select>

    </div>

    <div class="mb-3">
        <label>Tanggal Check In</label>

        <input
            type="date"
            name="tanggal_checkin"
            class="form-control"
            value="<?= $pemesanan->tanggal_checkin ?>">
    </div>

    <div class="mb-3">
        <label>Tanggal Check Out</label>

        <input
            type="date"
            name="tanggal_checkout"
            class="form-control"
            value="<?= $pemesanan->tanggal_checkout ?>">
    </div>

    <div class="mb-3">
        <label>Jumlah Tamu</label>

        <input
            type="number"
            name="jumlah_tamu"
            class="form-control"
            value="<?= $pemesanan->jumlah_tamu ?>">
    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status" class="form-control">

            <option value="Booking"
                <?= ($pemesanan->status=='Booking')?'selected':'' ?>>

                Booking

            </option>

            <option value="Check In"
                <?= ($pemesanan->status=='Check In')?'selected':'' ?>>

                Check In

            </option>

            <option value="Check Out"
                <?= ($pemesanan->status=='Check Out')?'selected':'' ?>>

                Check Out

            </option>

        </select>

    </div>

    <button class="btn btn-success">

        Update

    </button>

    <a href="<?= site_url('pemesanan'); ?>" class="btn btn-secondary">

        Kembali

    </a>

</form>