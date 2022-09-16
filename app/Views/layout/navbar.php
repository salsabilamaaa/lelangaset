<nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5 bg-nav-scroll" aria-label="Navbar Lelang Aset">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="/asset/image/Logo-white.png" alt="eLelang Kota Jogja" height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbaritem" aria-controls="navbaritem" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbaritem">
            <!-- Left elements -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-4" role="presentation">
                    <a class="nav-link active" aria-current="page" role="tab" aria-selected="true" href="<?= base_url('/'); ?>">Produk Lelang</a>
                </li>
                <li class="nav-item mx-4" role="presentation">
                    <a class="nav-link" role="tab" aria-selected="false" href="<?= base_url('/lelang-saya'); ?>">Lelang Saya</a>
                </li>
                <li class="nav-item mx-4" role="presentation">
                    <a class="nav-link" role="tab" aria-selected="false" href="<?= base_url('/bantuan'); ?>">Bantuan</a>
                </li>
            </ul>
            <!-- Left elements -->
        </div>

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Before Validate Login -->

            <!-- Login -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link d-flex flex-column align-items-center" href="" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <span><i class="bi bi-box-arrow-in-right mx-2"></i>Masuk</span>
                    </a>
                </li>
            </ul>

            <!-- After Validate Login -->
            <!-- Notification -->
            <div class="btn btn-icon position-relative mx-4" data-bs-toggle="offcanvas" data-bs-target="#NotifikasiSidebar" aria-controls="NotifikasiSidebar">
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
</nav>

<!-- Sidebar Notif -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="NotifikasiSidebar" aria-labelledby="NotifikasiSidebarLabel">
    <div class="offcanvas-header">
        <h5 id="NotifikasiSidebarLabel">Notifikasi</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Card Notifikasi -->
        <div class="card mb-3" style="height: 100px;">
            <a href="<?= base_url('lelang-saya'); ?>" class="stretched-link"></a>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="/asset/image/item-3.jpg" class="rounded img-notif" alt="Kursi">
                    </div>
                    <div class="col-lg-9">
                        <h6 class="txt-bold">Title Notif</h6>
                        <p>Content Notif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Notif -->

<!-- Modal Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="nav nav-pills nav-fill nav-justified justify-content-between" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="berlangsung-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Masuk</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="riwayat-tab" data-bs-toggle="tab" data-bs-target="#registrasi-tab-pane" type="button" role="tab" aria-controls="registrasi-tab-pane" aria-selected="false">Registrasi</button>
                    </li>
                </ul>
                <hr>
                <div class="tab-content tab-bg" id="myTabContent">
                    <div class="tab-pane fade show active py-3" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="0">
                        <div class="container">
                            <form action="" method="" novalidate>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="Username/NIK" required>
                                    <label for="floatingInput">Username/NIK</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="text-center my-4">
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </div>
                                <div class="text-center">
                                    <a href="" style="color: #00957E;">Lupa Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade show py-3" id="registrasi-tab-pane" role="tabpanel" aria-labelledby="registrasi-tab" tabindex="0">
                        <div class="container">
                            <form action="" method="" novalidate>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="Username/NIK" required>
                                    <label for="floatingInput">Username/NIK</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingNoHP" placeholder="No. HP" required>
                                    <label for="floatingNoHP">No. HP</label>
                                </div>
                                <div class="text-center my-4">
                                    <button type="submit" class="btn btn-primary">Registrasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Login -->