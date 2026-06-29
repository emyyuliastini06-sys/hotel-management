
<h2 class="mb-4">
    Dashboard
</h2>

<div class="alert shadow-sm border-0" style="background:#AFBED1;">

    <h5 class="mb-1">
        Selamat Datang, <?= ucfirst($this->session->userdata('username')); ?> 👋
    </h5>

    <small>
        Gunakan menu di sebelah kiri untuk mengelola data hotel.
    </small>

</div>

<div class="row">

    <div class="col-md-3 mb-4">

        <div class="card shadow card-dashboard" style="background:#587492;color:white;">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <h2><?= $jumlah_kamar ?></h2>

                        <p>Jumlah Kamar</p>

                    </div>

                    <i class="bi bi-door-open icon-card"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card shadow card-dashboard" style="background:#899FB8;color:white;">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <h2><?= $jumlah_tipe ?></h2>

                        <p>Tipe Kamar</p>

                    </div>

                    <i class="bi bi-grid icon-card"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

        <div class="card shadow card-dashboard" style="background:#AFBED1;color:#19324B;">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <h2><?= $jumlah_tamu ?></h2>

                        <p>Tamu</p>

                    </div>

                    <i class="bi bi-people icon-card"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-3 mb-4">

       <div class="card text-white shadow card-dashboard" style="background:#CC8B5E;">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <h2><?= $jumlah_booking ?></h2>

                        <p>Booking</p>

                    </div>

                    <i class="bi bi-calendar-check icon-card"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="card shadow">

    <div class="card-header text-white" style="background:#587492;">

        <h5 class="mb-0">
            Informasi Sistem
        </h5>

    </div>

    <div class="card-body">

        <p>
            Sistem Informasi Manajemen Hotel ini digunakan untuk mengelola data kamar,
            tamu, booking, pembayaran, dan laporan hotel.

            Aplikasi dikembangkan menggunakan CodeIgniter 3 dan Bootstrap 5.
        </p>

        <hr>

        <p class="mb-0">
            Gunakan menu di sebelah kiri untuk mengelola seluruh data hotel.
        </p>

    </div>

</div>