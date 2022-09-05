<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main class="container-fluid">
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
                <div class="status-box-blue rounded mb-4">
                    <p class="p-2 txt-md text-center">Anda belum daftar paket lelang ini</p>
                </div>
                <h4 class="mb-5">Daftar Lelang Sekarang</h4>
                <form id="daftar-form" action="<?= base_url('daftar-lelang') ?>">
                    <p>
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Kirim notifikasi JSS untuk informasi terkait paket lelang ini
                    </p>
                    <p>
                        <input class="form-check-input me-1" type="checkbox" value="" required>
                        Saya menyetujui syarat dan ketentuan.
                        <a href="#">Baca syarat dan ketentuan</a>
                    </p>
                    <div class="text-center">
                        <div class="text-center">
                            <button type="submit" onclick="submitBtn()" class="btn btn-primary">Daftar Lelang</button>
                        </div>
                    </div>
                </form>
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
</main>

<?= $this->endSection(); ?>