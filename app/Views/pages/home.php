<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- Banner -->
    <!-- Hero Section -->
    <section>
        <div class="bg-image vh-75 d-flex justify-content-center align-items-center p-5">
            <div id="carouselIndicators" class="carousel slide text-center" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner m-5 g-5">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="../asset/image/banner-1.png" class="img-fluid">
                            </div>
                            <div class="col-lg-6 d-flex flex-column justify-content-center">
                                <h4 class="txt-bold lh-1 my-3" style="color: white;">Heading Text</h4>
                                <p style="color: white;">Content Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="../asset/image/hero-image.png" class="img-fluid">
                            </div>
                            <div class="col-lg-6 d-flex flex-column justify-content-center">
                                <h4 class="txt-bold my-3" style="color: white;">Heading Text</h4>
                                <p style="color: white;">Content Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section -->

    <br><br>

    <!-- Lelang Product -->
    <section>
        <div class="m-4 mt-3" id="contentProduk">
            <h2 class="mb-4 txt-bold">Produk Lelang</h2>
            <div class="row">
                <!-- Filter -->
                <div class="col-lg-3 mb-4 accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFilter">
                            <button class="accordion-button collapsed txt-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
                                Filter Produk
                            </button>
                        </h2>
                        <div id="collapseFilter" class="accordion-collapse collapse show" aria-labelledby="headingFilter" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Category -->
                                <h6>Kategori</h6>
                                <p>
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Kursi
                                </p>
                                <p>
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Meja
                                </p>
                                <p>
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Kardus
                                </p>
                                <p>
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Alat Tulis
                                </p>
                                <!-- Category -->

                                <!-- Cost -->
                                <h6 class="mb-2">Harga</h6>
                                <div class="row mb-4">
                                    <div class="col w-auto">
                                        <label for="MinCost" class="form-label">Minimal</label>
                                        <input type="text" class=form-control placeholder="0" id="MinCost">
                                    </div>
                                    <div class="col w-auto">
                                        <label for="MaxCost" class="form-label">Maksimal</label>
                                        <input type="text" class=form-control placeholder="10000000" id="MaxCost">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary">
                                        Cari
                                    </button>
                                </div>
                                <!-- Cost -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filter -->

                <!-- Product Item -->
                <div class="col-lg-9">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <!-- Card Product Item -->
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-custom" alt="Item 1" />
                                <p class="status-img-blue p-2">Berlangsung</p>
                                <div class="card-body">
                                    <p class="cat-box rounded px-2 py-1">Barang Kantor</p>
                                    <h5 class="card-title txt-bold">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p style="font-size: small">Lelang Selesai</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="font-size: small">30 Sept 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Product Item -->

                        <!-- Card Product Item -->
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-1.jpg" class="card-img-top p-2 img-custom" alt="Item 2" />
                                <p class="status-img-grey p-2">Lelang Selesai</p>
                                <div class="card-body">
                                    <p class="cat-box rounded px-2 py-1">Barang Kantor</p>
                                    <h5 class="card-title txt-bold">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p style="font-size: small">Lelang Selesai</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="font-size: small">30 Sept 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Product Item -->

                        <!-- Card Product Item -->
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-custom" alt="item-1">
                                <p class="status-img-yellow p-2">Akan Datang</p>
                                <div class="card-body">
                                    <p class="cat-box rounded px-2 py-1">Barang Kantor</p>
                                    <h5 class="card-title txt-bold">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p style="font-size: small">Lelang Selesai</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="font-size: small">30 Sept 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Product Item -->
                    </div>
                    <!-- Product Item -->

                    <!-- Pagination -->
                    <nav aria-label="Page navigation example" class="my-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pagination -->
                </div>
            </div>
    </section>
    <!-- Lelang Product -->
</main>

<?= $this->endSection(); ?>