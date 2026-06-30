<div class="d-flex justify-content-between align-items-center mb-3">

    <h3>Data Tamu</h3>

    <a href="<?= site_url('tamu/tambah'); ?>" class="btn btn-primary">
        + Tambah Tamu
    </a>

</div>

<table class="table table-bordered table-striped">

    <thead class="table-dark">

        <tr>

            <th>No</th>

            <th>NIK</th>

            <th>Nama Tamu</th>

            <th>Jenis Kelamin</th>

            <th>No HP</th>

            <th>Alamat</th>

            <th width="180">Aksi</th>

        </tr>

    </thead>

    <tbody>

    <?php $no=1; foreach($tamu as $row): ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $row->nik; ?></td>

            <td><?= $row->nama_tamu; ?></td>

            <td><?= $row->jenis_kelamin; ?></td>

            <td><?= $row->no_hp; ?></td>

            <td><?= $row->alamat; ?></td>

            <td>

                <a href="<?= site_url('tamu/edit/'.$row->id_tamu); ?>" class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a href="<?= site_url('tamu/hapus/'.$row->id_tamu); ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus data?')">

                    Hapus

                </a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>