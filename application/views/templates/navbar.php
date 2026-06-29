<nav class="navbar navbar-expand-lg navbar-dark" style="background:#587492;">

    <div class="container-fluid">

        <a class="navbar-brand fw-bold" href="<?= site_url('dashboard'); ?>">
            🏨 Hotel Management System
        </a>

        <div class="ms-auto">

            <span class="text-white me-3">

                <i class="bi bi-person-circle"></i>

                <?= ucfirst($this->session->userdata('username')); ?>

            </span>

            <a href="<?= site_url('login/logout'); ?>" class="btn btn-light btn-sm">

                Logout

            </a>

        </div>

    </div>

</nav>