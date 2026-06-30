<div class="d-flex justify-content-between align-items-center mb-3">

    <h3>Data Pemesanan</h3>

    <a href="<?= site_url('pemesanan/tambah'); ?>" class="btn btn-primary">

        + Tambah Pemesanan

    </a>

</div>

<table class="table table-bordered table-striped">

    <thead class="table-dark">

        <tr>

            <th>No</th>

            <th>Nama Tamu</th>

            <th>No Kamar</th>

            <th>Check In</th>

            <th>Check Out</th>

            <th>Jumlah Tamu</th>

            <th>Status</th>

            <th width="180">Aksi</th>

        </tr>

    </thead>

    <tbody>

        <?php $no=1; foreach($pemesanan as $row): ?>

        <tr>

            <td><?= $no++; ?></td>

            <td><?= $row->nama_tamu; ?></td>

            <td><?= $row->nomor_kamar; ?></td>

            <td><?= $row->tanggal_checkin; ?></td>

            <td><?= $row->tanggal_checkout; ?></td>

            <td><?= $row->jumlah_tamu; ?></td>

            <td>

                <?php if($row->status=='Booking'): ?>

                    <span class="badge bg-primary">

                        Booking

                    </span>

                <?php elseif($row->status=='Check In'): ?>

                    <span class="badge bg-success">

                        Check In

                    </span>

                <?php else: ?>

                    <span class="badge bg-secondary">

                        Check Out

                    </span>

                <?php endif; ?>

            </td>

            <td>

                <a href="<?= site_url('pemesanan/edit/'.$row->id_pemesanan); ?>" class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a href="<?= site_url('pemesanan/hapus/'.$row->id_pemesanan); ?>"
                   onclick="return confirm('Hapus data?')"
                   class="btn btn-danger btn-sm">

                    Hapus

                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </tbody>

</table>