<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<br><br>

<main>
    <div class="mt-5">
        <h2 class="m-5 txt-bold">Lelang yang saya ikuti</h2>
        <ul class="mt-4 mx-5 nav nav-tabs justify-content-start px-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="berlangsung-tab" data-bs-toggle="tab" data-bs-target="#berlangsung-tab-pane" type="button" role="tab" aria-controls="berlangsun-tab-pane" aria-selected="true">Lelang Berlangsung</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="riwayat-tab" data-bs-toggle="tab" data-bs-target="#riwayat-tab-pane" type="button" role="tab" aria-controls="riwayat-tab-pane" aria-selected="false">Riwayat Lelang</button>
            </li>
        </ul>
        <div class="tab-content tab-bg" id="myTabContent">
            <div class="tab-pane fade show active py-3" id="berlangsung-tab-pane" role="tabpanel" aria-labelledby="berlangsung-tab" tabindex="0">
                <div class="container">
                    <div class="card mb-3">
                        <a href="<?= base_url('unggah-bukti'); ?>" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 text-center">
                                    <img src="../asset/image/item-3.jpg" class="rounded" style="object-fit: cover; width: 250px; height: 250px" alt="Kursi">
                                </div>
                                <div class="col-lg-5">
                                    <h5 class="txt-bold my-3">Kursi</h5>
                                    <div class="row justify-content-start">
                                        <div class="col-6">
                                            <div class="card-text">
                                                <p class="txt-md lh-1">Kode Lelang</p>
                                                <p class="txt-md lh-1">Harga Lelang</p>
                                                <p class="txt-md lh-1">Lelang Selesai</p>
                                                <p class="txt-md lh-1">Penawaran</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="lh-1">A008</p>
                                            <p class="lh-1">3.000.000</p>
                                            <p class="lh-1">20 Agustus 2022</p>
                                            <p class="lh-1">3.500.000</p>
                                        </div>
                                        <p><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="status-box-yellow rounded mb-4">
                                        <p class="p-2 txt-md text-center">Unggah Bukti</p>
                                    </div>
                                    <p>Silahkan unggah bukti pembayaran jaminan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <a href="<?= base_url('pelelangan'); ?>" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 text-center">
                                    <img src="../asset/image/item-3.jpg" class="rounded" style="object-fit: cover; width: 250px; height: 250px" alt="Kursi">
                                </div>
                                <div class="col-lg-5">
                                    <h5 class="txt-bold my-3">Kursi</h5>
                                    <div class="row justify-content-start">
                                        <div class="col-6">
                                            <div class="card-text">
                                                <p class="txt-md lh-1">Kode Lelang</p>
                                                <p class="txt-md lh-1">Harga Lelang</p>
                                                <p class="txt-md lh-1">Lelang Selesai</p>
                                                <p class="txt-md lh-1">Penawaran</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="lh-1">A008</p>
                                            <p class="lh-1">3.000.000</p>
                                            <p class="lh-1">20 Agustus 2022</p>
                                            <p class="lh-1">3.500.000</p>
                                        </div>
                                        <p><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="status-box-green rounded mb-4">
                                        <p class="p-2 txt-md text-center">Penawaran</p>
                                    </div>
                                    <p>Dokumen Anda sudah diverifikasi. Anda dapat melanjutkan penawaran</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <a href="<?= base_url('pelelangan'); ?>" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 text-center">
                                    <img src="/asset/image/item-1.jpg" class="rounded" style="object-fit: cover; width: 250px; height: 250px" alt="Kursi">
                                </div>
                                <div class="col-lg-5">
                                    <h5 class="txt-bold my-3">Kursi</h5>
                                    <div class="row justify-content-start">
                                        <div class="col-6">
                                            <div class="card-text">
                                                <p class="txt-md lh-1">Kode Lelang</p>
                                                <p class="txt-md lh-1">Harga Lelang</p>
                                                <p class="txt-md lh-1">Lelang Selesai</p>
                                                <p class="txt-md lh-1">Penawaran</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="lh-1">A008</p>
                                            <p class="lh-1">3.000.000</p>
                                            <p class="lh-1">20 Agustus 2022</p>
                                            <p class="lh-1">3.500.000</p>
                                        </div>
                                        <p><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="status-box-blue rounded mb-4">
                                        <p class="p-2 txt-md text-center">Menunggu Lelang Berakhir</p>
                                    </div>
                                    <p>Anda berhasil melakukan penawaran. Tunggu hingga lelang berakhir atau lakukan penawaran kembali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade py-3" id="riwayat-tab-pane" role="tabpanel" aria-labelledby="riwayat-tab" tabindex="0">
                <div class="container">
                    <div class="card mb-3">
                        <a href="<?= base_url('hasil-lelang'); ?>" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 text-center">
                                    <img src="/asset/image/item-2.jpg" class="rounded" style="object-fit: cover; width: 250px; height: 250px" alt="Kursi">
                                </div>
                                <div class="col-lg-5">
                                    <h5 class="txt-bold my-3">Kursi</h5>
                                    <div class="row justify-content-start">
                                        <div class="col-6">
                                            <div class="card-text">
                                                <p class="txt-md lh-1">Kode Lelang</p>
                                                <p class="txt-md lh-1">Harga Lelang</p>
                                                <p class="txt-md lh-1">Lelang Selesai</p>
                                                <p class="txt-md lh-1">Penawaran</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="lh-1">A008</p>
                                            <p class="lh-1">3.000.000</p>
                                            <p class="lh-1">20 Agustus 2022</p>
                                            <p class="lh-1">3.500.000</p>
                                        </div>
                                        <p><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="status-box-grey rounded mb-4">
                                        <p class="p-2 txt-md text-center">Lelang Selesai</p>
                                    </div>
                                    <p>Anda berhasil mendaftar pelelangan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <a href="<?= base_url('unggah-bukti'); ?>" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-3 text-center">
                                    <img src="/asset/image/item-3.jpg" class="rounded" style="object-fit: cover; width: 250px; height:250px" alt="Kursi">
                                </div>
                                <div class="col-lg-5">
                                    <h5 class="txt-bold my-3">Kursi</h5>
                                    <div class="row justify-content-start">
                                        <div class="col-6">
                                            <div class="card-text">
                                                <p class="txt-md lh-1">Kode Lelang</p>
                                                <p class="txt-md lh-1">Harga Lelang</p>
                                                <p class="txt-md lh-1">Lelang Selesai</p>
                                                <p class="txt-md lh-1">Penawaran</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="lh-1">A008</p>
                                            <p class="lh-1">3.000.000</p>
                                            <p class="lh-1">20 Agustus 2022</p>
                                            <p class="lh-1">3.500.000</p>
                                        </div>
                                        <p><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="status-box-red rounded mb-4">
                                        <p class="p-2 txt-md text-center">Ditolak</p>
                                    </div>
                                    <p>Gambar bukti transfer tidak jelas, silahkan unggah kembali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>