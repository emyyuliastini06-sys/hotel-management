<h3>Edit Kamar</h3>

<form method="post">

    <div class="mb-3">

        <label>Nomor Kamar</label>

        <input type="text"
               name="nomor_kamar"
               class="form-control"
               value="<?= $kamar->nomor_kamar; ?>"
               required>

    </div>

    <div class="mb-3">

        <label>Tipe Kamar</label>

        <select name="id_tipe"
                class="form-control">

            <?php foreach($tipe as $t): ?>

                <option value="<?= $t->id_tipe; ?>"
                    <?= ($t->id_tipe==$kamar->id_tipe)?'selected':''; ?>>

                    <?= $t->nama_tipe; ?>

                </option>

            <?php endforeach; ?>

        </select>

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status"
                class="form-control">

            <option value="Kosong"
                <?= ($kamar->status=='Kosong')?'selected':''; ?>>

                Kosong

            </option>

            <option value="Terisi"
                <?= ($kamar->status=='Terisi')?'selected':''; ?>>

                Terisi

            </option>

        </select>

    </div>

    <button class="btn btn-primary">

        Update

    </button>

    <a href="<?= site_url('kamar'); ?>"
       class="btn btn-secondary">

        Kembali

    </a>

</form>