<div class="d-flex justify-content-between align-items-center mb-3">

    <h3>Data Pembayaran</h3>

    <a href="<?= site_url('pembayaran/tambah'); ?>" class="btn btn-primary">
        + Tambah Pembayaran
    </a>

</div>

<table class="table table-bordered table-striped">

    <thead class="table-dark">

        <tr>

            <th>No</th>
            <th>Nama Tamu</th>
            <th>No Kamar</th>
            <th>Tanggal Bayar</th>
            <th>Total Bayar</th>
            <th>Metode</th>
            <th>Status</th>
            <th width="180">Aksi</th>

        </tr>

    </thead>

    <tbody>

        <?php $no=1; foreach($pembayaran as $row): ?>

        <tr>

            <td><?= $no++; ?></td>
            <td><?= $row->nama_tamu; ?></td>
            <td><?= $row->nomor_kamar; ?></td>
            <td><?= $row->tanggal_bayar; ?></td>
<td>Rp <?= number_format($row->total_bayar,0,',','.'); ?></td>
<td><?= $row->metode_pembayaran; ?></td>

            <td>
                <?php if($row->status=='Lunas'): ?>

                    <span class="badge bg-success">
                        Lunas
                    </span>

                <?php else: ?>

                    <span class="badge bg-warning text-dark">
                        Belum Lunas
                    </span>

                <?php endif; ?>
            </td>

            <td>

                <a href="<?= site_url('pembayaran/edit/'.$row->id_pembayaran); ?>"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="<?= site_url('pembayaran/hapus/'.$row->id_pembayaran); ?>"
                   onclick="return confirm('Yakin ingin menghapus data?')"
                   class="btn btn-danger btn-sm">
                    Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </tbody>

</table>