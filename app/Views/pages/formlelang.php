<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<br><br>

<main class="container-fluid">
    <div class="m-4 mt-5">
        <h2 class="txt-bold">Paket Produk Lelang</h2>
    </div>
    <div class="d-flex m-4">
        <div class="row justify-content-between">
            <div class="col-lg-3 my-2 text-center">
                <a href="" data-bs-toggle="modal" data-bs-target="#previewImage">
                    <img src="../asset/image/item-3.jpg" class="rounded" style="object-fit: cover; width: 300px; height: 300px" alt="item-1">
                </a>
            </div>
            <div class="col-lg-4 my-2">
                <h4>Kursi Kantor</h4>
                <h1>Rp.3.000.000</h1>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="fw-bold">Jaminan</p>
                    <p>Rp. 300.000</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="fw-bold">Lelang Selesai</p>
                    <p>20 Agustus 2022</p>
                </div>
                <p class="fw-bold">Deskripsi</p>
                <p>Deskripsi barang</p>
            </div>
            <div class="col-lg-4 my-2">
                <p>Proses lelang anda sudah diverifikasi, silahkan masukkan penawaran anda</p>
                <p class="fw-bold">
                    Penawaran Anda
                </p>
                <div class="mb-3">
                    <input type="text" class="form-control" id="hargapenawaran" placeholder="Rp. 1.000.000" required>
                </div>
                <div class="text-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modalSuccess">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </a>
                </div>
            </div>
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

    <!-- Modal Success -->
    <div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container text-center">
                        <img src="/asset/image/Success.png" alt="success" style="height: 300px; width: 300px">
                        <h4 class="mt-4" style="color: black;">Anda Berhasil Melakukan Penawaran</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('lelang-saya'); ?>">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Success -->
</main>

<?= $this->endSection(); ?>