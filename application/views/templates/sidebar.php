<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 sidebar p-0">

            <h5 class="text-white text-center py-3 border-bottom">
                MENU
            </h5>

            <a href="<?= site_url('dashboard'); ?>">
                <i class="bi bi-house-door"></i>
                Dashboard
            </a>

            <hr class="text-white">

            <small class="text-white ms-3">MASTER DATA</small>

            <a href="<?= site_url('tipe_kamar'); ?>">
                <i class="bi bi-grid"></i>
                Tipe Kamar
            </a>

            <a href="<?= site_url('kamar'); ?>">
                <i class="bi bi-door-open"></i>
                Kamar
            </a>

            <a href="<?= site_url('tamu'); ?>">
                <i class="bi bi-people"></i>
                Tamu
            </a>

            <hr class="text-white">

            <small class="text-white ms-3">TRANSAKSI</small>

            <a href="<?= site_url('pemesanan'); ?>">
                <i class="bi bi-journal-bookmark"></i>
                Pemesanan
            </a>

            <a href="<?= site_url('pembayaran'); ?>">
                <i class="bi bi-cash-coin"></i>
                Pembayaran
            </a>

            <hr class="text-white">

            <a href="<?= site_url('login/logout'); ?>">
                <i class="bi bi-box-arrow-left"></i>
                Logout
            </a>

        </div>

        <div class="col-md-10 content">