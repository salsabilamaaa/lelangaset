<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<br><br>

<main class="container-fluid">
    <div class="m-4 mt-5">
        <div class="row justify-content-between">
            <!-- Info Paket -->
            <div class="d-none d-lg-block col-lg-4 mx-auto">
                <div class="my-3 mx-auto text-center">
                    <a href="" data-bs-toggle="modal" data-bs-target="#previewImage">
                        <img src="../asset/image/item-1.jpg" class="img-thumbnail rounded" style="object-fit: cover;" alt="Kursi">
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
                        <p class="fw-bold">Lelang Selesai</p>
                        <p>20 Agustus 2022</p>
                    </div>
                    <p class="fw-bold">Deskripsi</p>
                    <p>Deskripsi barang</p>
                </div>
            </div>
            <!-- Info Paket -->

            <!-- Form Daftar -->
            <div class="col-lg-6 my-4 mx-auto">
                <h4 class="txt-bold">Unggah Bukti Jaminan</h4>
                <p>Anda sudah terdaftar paket lelang ini, silahkan unggah bukti transfer uang jaminan. Cek kembali data dibawah sebelum disubmit.</p>
                <form id="bukti-form" class="needs-validation" action="<?= base_url('lelang-saya') ?>" method="" enctype="multipart/form-data" novalidate>
                    <?= csrf_field(); ?>
                    <div class="form-group mb-3">
                        <label for="inputNama" class="form-label txt-md">Nama</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Nama Pengguna" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kodeRegistrasi" class="form-label txt-md">Kode Registrasi</label>
                        <input type="text" class="form-control" id="kodeRegistrasi" placeholder="Kode Registrasi" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="uangJaminan" class="form-label txt-md">Uang Jaminan</label>
                        <input type="text" class="form-control" id="uangJaminan" placeholder="Rp. 300.000" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label for="bank" class="form-label txt-md">Bank</label>
                        <input type="text" class="form-control" id="bank" placeholder="Rp. 300.000" disabled>
                    </div>
                    <div class="form-group mb-4">
                        <label for="noRekening" class="form-label txt-md">Nomor Rekening</label>
                        <input type="text" class="form-control" id="noRekening" aria-describedby="rekeningDesc" disabled>
                        <div id="rekeningDesc" class="form-text">Nomor rekening digunakan untuk pengembalian. Pastikan nomor rekening benar.</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nomorBukti" class="form-label txt-md">Nomor Bukti Transfer</label>
                        <input type="text" class="form-control" id="nomorBukti" placeholder="12341245134512" required>
                        <div class="invalid-feedback">
                            Isi Nomor Bukti Transfer Uang Jaminan Anda
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="formFile" class="form-label txt-md">Unggah Bukti</label>
                        <input class="dropify" type="file" id="formFile" name="bukti" data-allowed-file-extensions="jpg png jpeg" required>
                        <div class="invalid-feedback">
                            Unggah Bukti
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" onclick="ValidationForm()" class="btn btn-primary">Simpan Bukti</button>
                    </div>
                </form>
            </div>
            <!-- Form Daftar -->
        </div>
    </div>
    <!-- Modal Preview Image -->
    <div class="modal fade" id="previewImage" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
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
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container text-center p-4">
                        <img src="/asset/image/Success.png" alt="success" style="height: 300px; width: 300px">
                        <h4 class="mt-4 txt-bold" style="color: black;">Berhasil Menyimpan Bukti</h4>
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