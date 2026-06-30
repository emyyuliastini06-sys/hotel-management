<h3>Tambah Tamu</h3>

<form method="post">

    <div class="mb-3">

        <label>NIK</label>

        <input type="text" name="nik" class="form-control">

    </div>

    <div class="mb-3">

        <label>Nama Tamu</label>

        <input type="text" name="nama_tamu" class="form-control" required>

    </div>

    <div class="mb-3">

        <label>Jenis Kelamin</label>

        <select name="jenis_kelamin" class="form-control">

            <option value="L">Laki-laki</option>

            <option value="P">Perempuan</option>

        </select>

    </div>

    <div class="mb-3">

        <label>No HP</label>

        <input type="text" name="no_hp" class="form-control">

    </div>

    <div class="mb-3">

        <label>Alamat</label>

        <textarea name="alamat" class="form-control"></textarea>

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

    <a href="<?= site_url('tamu'); ?>" class="btn btn-secondary">

        Kembali

    </a>

</form>