<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main class="container-fluid ">
    <div class="m-4">
        <h2 class="txt-bold">Paket Produk Lelang</h2>
    </div>
    <div class="m-4">
        <div class="row justify-content-between">
            <div class="col-lg-3 my-2 text-center">
                <a href="" data-bs-toggle="modal" data-bs-target="#previewImage">
                    <img src="../asset/image/item-3.jpg" class="img-thumbnail rounded" style="object-fit: cover; width: 300px; height: 300px" alt="item-1">
                </a>
            </div>
            <div class="col-lg-5 my-2">
                <h4>Kursi Kantor</h4>
                <h1>Rp.3.000.000</h1>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="fw-bold">Jaminan</p>
                    <p>Rp. 300.000</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="fw-bold">Selesai</p>
                    <p>20 Agustus 2022</p>
                </div>
                <p class="fw-bold">Deskripsi</p>
                <p>Deskripsi barang</p>
            </div>
            <div class="col-lg-3 my-2">
                <p>Selamat, anda dapat melakukan pelunasan paket lelang</p>
                <div class="text-center">
                    <a href="<?= base_url('pembayaran') ?>">
                        <button type="button" class="btn btn-primary">
                            Bayar Lelang
                        </button></a>
                </div>
            </div>
            <div class="table-responsive my-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>IDJSS</th>
                            <th>Penawaran</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12 September 2022, 12.15</td>
                            <td>A1009</td>
                            <td>Rp. 3.700.000</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>12 September 2022, 12.15</td>
                            <td>A1006</td>
                            <td>Rp. 3.565.000</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>12 September 2022, 12.15</td>
                            <td>A1004</td>
                            <td>Rp. 3.560.000</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>12 September 2022, 12.15</td>
                            <td>A1001</td>
                            <td>Rp. 3.555.000</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>12 September 2022, 12.15</td>
                            <td>A1002</td>
                            <td>Rp. 3.550.000</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>12 September 2022, 12.15</td>
                            <td>A1005</td>
                            <td>Rp. 3.500.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal Preview Image -->
        <div class="modal fade" id="previewImage" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Gambar Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="carousel slide" data-ride="carousel" id="image-carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../asset/image/item-3.jpg" class="img-fluid rounded" style="object-fit: cover;" alt="item-1">
                                </div>
                                <div class="carousel-item active">
                                    <img src="../asset/image/item-2.jpg" class="img-fluid rounded" style="object-fit: cover;" alt="item-1">
                                </div>
                                <div class="carousel-item active">
                                    <img src="../asset/image/item-1.jpg" class="img-fluid rounded" style="object-fit: cover;" alt="item-1">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#image-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#image-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Preview Image -->
    </div>

</main>

<?= $this->endSection(); ?>