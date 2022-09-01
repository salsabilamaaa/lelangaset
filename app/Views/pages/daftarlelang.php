<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main class="container-fluid">
    <div class="m-4">
        <div class="row justify-content-between">
            <!-- Info Paket -->
            <div class="col-lg-3 my-3 mx-auto">
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

            <!-- Form Daftar -->
            <div class="col-lg-8 my-5 mx-auto">
                <h2 class="mb-4">Daftar Paket Lelang</h2>
                <p>Anda belum terdaftar paket lelang ini, silakan cek kembali data dibawah sebelum daftar lelang.</p>
                <form>
                    <div class="mb-3">
                        <label for="inputNama" class="form-label txt-md">Nama</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Nama Pengguna" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="kodeRegistrasi" class="form-label txt-md">Kode Registrasi</label>
                        <input type="text" class="form-control" id="kodeRegistrasi" placeholder="Kode Registrasi" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="uangJaminan" class="form-label txt-md">Uang Jaminan</label>
                        <input type="text" class="form-control" id="uangJaminan" placeholder="Rp. 300.000" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="selectBank" class="form-label txt-md">Bank</label>
                        <select class="form-select form-select-md" id="selectBank" aria-label=".form-select-lg example">
                            <option selected>Pilih Bank</option>
                            <option value="1">BRI</option>
                            <option value="2">BNI</option>
                            <option value="3">Mandiri</option>
                            <option value="4">BPD DIY</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="noRekening" class="form-label txt-md">Nomor Rekening</label>
                        <input type="text" class="form-control" id="noRekening" aria-describedby="rekeningDesc">
                        <div id="rekeningDesc" class="form-text">Nomor rekening digunakan untuk pengembalian. Pastikan nomor rekening benar.</div>
                    </div>
                    <div class="text-center">
                        <a href="<?= base_url('pembayaran'); ?>">
                            <button type="button" class="btn btn-primary">Daftar Lelang</button>
                        </a>
                    </div>
                </form>
            </div>
            <!-- Form Daftar -->
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