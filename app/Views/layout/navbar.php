<nav class="navbar navbar-expand-lg bg-light navbar-scroll" aria-label="Ninth navbar example">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="../asset/image/Logo.png" alt="eLelang Kota Jogja" height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbaritem" aria-controls="navbaritem" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbaritem">
            <!-- Left elements -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-4">
                    <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>">Produk Lelang</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="<?= base_url('/lelang-saya'); ?>">Lelang Saya</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="<?= base_url('/bantuan'); ?>">Bantuan</a>
                </li>
            </ul>
            <!-- Left elements -->

            <!-- Right elements -->
            <div class=" d-flex align-items-center">
                <!-- Notification -->
                <div class="btn btn-icon position-relative mx-4" id="">
                    <i class="bi bi-bell"></i>
                </div>

                <!-- Avatar -->
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fs-2 bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="<?= base_url('profil') ?>">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
    </div>
</nav>