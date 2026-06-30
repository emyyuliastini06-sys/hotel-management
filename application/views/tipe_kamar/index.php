<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Tipe Kamar</h2>

    <a href="<?= site_url('tipe_kamar/tambah'); ?>" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i>
        Tambah Data
    </a>

</div>

<div class="card shadow">

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

                <tr>

                    <th width="60">No</th>

                    <th>Nama Tipe</th>

                    <th>Harga</th>

                    <th>Kapasitas</th>

                    <th>Keterangan</th>

                    <th width="170">Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php $no=1; foreach($tipe_kamar as $row): ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td><?= $row->nama_tipe; ?></td>

                    <td>Rp <?= number_format($row->harga,0,',','.'); ?></td>

                    <td><?= $row->kapasitas; ?> Orang</td>

                    <td><?= $row->keterangan; ?></td>

                    <td>

                        <a href="<?= site_url('tipe_kamar/edit/'.$row->id_tipe); ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?= site_url('tipe_kamar/hapus/'.$row->id_tipe); ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus data?')">
                            Hapus
                        </a>

                    </td>

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>