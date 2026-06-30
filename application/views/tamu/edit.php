<h3>Edit Tamu</h3>

<form method="post">

    <div class="mb-3">

        <label>NIK</label>

        <input type="text"
               name="nik"
               class="form-control"
               value="<?= $tamu->nik; ?>">

    </div>

    <div class="mb-3">

        <label>Nama Tamu</label>

        <input type="text"
               name="nama_tamu"
               class="form-control"
               value="<?= $tamu->nama_tamu; ?>"
               required>

    </div>

    <div class="mb-3">

        <label>Jenis Kelamin</label>

        <select name="jenis_kelamin" class="form-control">

            <option value="L"
                <?= ($tamu->jenis_kelamin=='L')?'selected':''; ?>>

                Laki-laki

            </option>

            <option value="P"
                <?= ($tamu->jenis_kelamin=='P')?'selected':''; ?>>

                Perempuan

            </option>

        </select>

    </div>

    <div class="mb-3">

        <label>No HP</label>

        <input type="text"
               name="no_hp"
               class="form-control"
               value="<?= $tamu->no_hp; ?>">

    </div>

    <div class="mb-3">

        <label>Alamat</label>

        <textarea name="alamat" class="form-control"><?= $tamu->alamat; ?></textarea>

    </div>

    <button class="btn btn-primary">

        Update

    </button>

    <a href="<?= site_url('tamu'); ?>" class="btn btn-secondary">

        Kembali

    </a>

</form>