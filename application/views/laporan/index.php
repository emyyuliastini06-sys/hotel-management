<div class="d-flex justify-content-between align-items-center mb-4">

    <h3>Laporan Hotel</h3>

    <button onclick="window.print()" class="btn btn-success">
        Cetak Laporan
    </button>

</div>

<div class="row">

    <div class="col-md-3 mb-3">
        <div class="card border-primary shadow-sm">
            <div class="card-body text-center">
                <h5>Total Tamu</h5>
                <h2><?= $total_tamu; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card border-success shadow-sm">
            <div class="card-body text-center">
                <h5>Total Kamar</h5>
                <h2><?= $total_kamar; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card border-warning shadow-sm">
            <div class="card-body text-center">
                <h5>Total Pemesanan</h5>
                <h2><?= $total_pemesanan; ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card border-info shadow-sm">
            <div class="card-body text-center">
                <h5>Total Pembayaran</h5>
                <h2><?= $total_pembayaran; ?></h2>
            </div>
        </div>
    </div>

</div>

<div class="card shadow mb-4">

    <div class="card-body text-center">

        <h4>Total Pendapatan</h4>

        <h2 class="text-success">
            Rp <?= number_format($total_pendapatan,0,',','.'); ?>
        </h2>

    </div>

</div>

<div class="card shadow">

    <div class="card-header bg-dark text-white">

        Riwayat Pembayaran

    </div>

    <div class="card-body">

        <table class="table table-bordered table-striped">

            <thead class="table-secondary">

                <tr>

                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>No Kamar</th>
                    <th>Tanggal Bayar</th>
                    <th>Total Bayar</th>
                    <th>Status</th>

                </tr>

            </thead>

            <tbody>

                <?php
                $no=1;
                foreach($laporan as $row):
                ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td><?= $row->nama_tamu; ?></td>

                    <td><?= $row->nomor_kamar; ?></td>

                    <td><?= $row->tanggal_bayar; ?></td>

                    <td>
                        Rp <?= number_format($row->total_bayar,0,',','.'); ?>
                    </td>

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

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>