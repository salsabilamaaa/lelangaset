<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main class="container-fluid">
    <!-- Banner -->
    <section>
        <div class="m-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../asset/image/banner-1.png" class="d-block w-100 rounded" alt="banner-1">
                    </div>
                    <div class="carousel-item">
                        <img src="../asset/image/banner-1.png" class="d-block w-100 rounded" alt="banner-2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Banner -->

    <!-- Lelang Product -->
    <section>
        <div class="m-4 mt-5">
            <h2 class="mb-4 txt-bold">Produk Lelang</h2>
            <div class="row">
                <!-- Filter -->
                <div class="col-lg-3 mb-4 accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed txt-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
                                Filter Produk
                            </button>
                        </h2>
                        <div id="collapseFilter" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                        Simpan
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
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="Item 1" />
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-1.jpg" class="card-img-top p-2 img-4" alt="Item 2" />
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="item-1">
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title txt-bold">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="item-1">
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="item-1">
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="item-1">
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="item-1">
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="item-1">
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <a href="<?= base_url('detail-produk'); ?>" class="stretched-link"></a>
                                <img src="../asset/image/item-3.jpg" class="card-img-top p-2 img-4" alt="item-1">
                                <div class="card-body">
                                    <p class="txt-md">Barang Kantor</p>
                                    <h5 class="card-title">Kursi</h5>
                                    <h4>Rp. 500.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>

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
                <!-- Product Item -->
            </div>
        </div>
    </section>
    <!-- Lelang Product -->
</main>

<?= $this->endSection(); ?>