<h3>Tambah Kamar</h3>

<form method="post">

    <div class="mb-3">

        <label>Nomor Kamar</label>

        <input type="text"
               name="nomor_kamar"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label>Tipe Kamar</label>

        <select name="id_tipe"
                class="form-control"
                required>

            <?php foreach($tipe as $t): ?>

                <option value="<?= $t->id_tipe; ?>">

                    <?= $t->nama_tipe; ?>

                </option>

            <?php endforeach; ?>

        </select>

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status"
                class="form-control">

            <option value="Kosong">Kosong</option>

            <option value="Terisi">Terisi</option>

        </select>

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

    <a href="<?= site_url('kamar'); ?>"
       class="btn btn-secondary">

        Kembali

    </a>

</form>