<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main class="container-fluid">
    <div class="m-4">
        <div class="row justify-content-between">
            <!-- Info Paket -->
            <div class="d-none d-lg-block col-lg-3 mx-auto">
                <div class="my-3 mx-auto text-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#previewImage">
                        <img src="../asset/image/item-1.jpg" class="img-thumbnail rounded" style="object-fit: cover; width: 300px; height: 300px" alt="Kursi">
                    </a>
                </div>
                <div class="my-3 mx-auto">
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
            </div>
            <!-- Info Paket -->

            <!-- Info Pembayaran -->
            <div class="col-lg-8 my-4 mx-auto">
                <h4 class="txt-bold">Daftar Paket Lelang Berhasil</h4>
                <br>
                <p>Silahkan lanjut pembayaran uang jaminan dengan sebelum lelang berakhir.</p>
                <br>
                <div class="container text-center">
                    <h2>Rp. 300.002</h2>
                    <p style="color: grey;">Pembayaran uang jaminan sesuai dengan nominal yang tertera untuk keperluan validasi</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Transfer uang jaminan ke nomor rekening</p>
                    <p class="fw-bold">1234124512345154</p>
                </div>
                <div class="text-center my-4">
                    <a href="<?= base_url('unggah-bukti'); ?>">
                        <button type="button" class="btn btn-primary">Unggah Bukti</button>
                    </a>
                </div>

                <!-- Tata Cara Pembayaran -->
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Melalui Bank
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Tata Cara Melalui Bank</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Melalui ATM
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Tata Cara Melalui ATM</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Melalui mBanking
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Tata Cara Melalui mBanking</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tata Cara Pembayaran -->
            </div>
            <!-- Info Pembayaran -->
        </div>
        <!-- Modal Preview Image -->
        <div class="modal fade" id="previewImage" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Gambar Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
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