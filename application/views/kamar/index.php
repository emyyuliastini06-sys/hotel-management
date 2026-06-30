<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Kamar</h3>

    <a href="<?= site_url('kamar/tambah'); ?>" class="btn btn-primary">
        + Tambah Kamar
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nomor Kamar</th>
            <th>Tipe Kamar</th>
            <th>Status</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php $no=1; foreach($kamar as $row): ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $row->nomor_kamar; ?></td>

            <td><?= $row->nama_tipe; ?></td>

            <td><?= $row->status; ?></td>

            <td>

                <a href="<?= site_url('kamar/edit/'.$row->id_kamar); ?>" class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a href="<?= site_url('kamar/hapus/'.$row->id_kamar); ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus data?')">

                    Hapus

                </a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>