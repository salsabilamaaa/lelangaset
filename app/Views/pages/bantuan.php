<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<br><br>

<main class="container-fluid">
    <!-- <div class="m-4">
        <h4 class="my-4 txt-bold">Tata cara mengikuti LelangAset</h4>
        <p class="my-4">1. Lengkapi Data Profil dan Dokumen <br>
            2. Pilih paket lelang barang <br>
            3. Daftar paket lelang <br>
            4. Unggah bukti pembayaran jaminan <br>
            5. Tunggu konfirmasi dari admin <br>
            6. Tawar harga lelang <br>
            7. Jika lelang sudah selesai, akan terdapat notifikasi pemenang lelang. Jika Anda mendapatkan lelang, Anda dapat melanjutkan pembayaran lelang <br>
            8. Unggah bukti pembayaran pelunasan lelang</p>
    </div> -->
    <div class="m-4 accordion mt-5" id="accordionExample">
        <h4 class="my-4 txt-bold">Frequently Asked Question</h4>
        <div class="accordion-item">
            <!-- Question 1 -->
            <h2 class="accordion-header" id="ask1">
                <button class="accordion-button collapsed txt-md" ctype="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    Q: Lorem Ipsum
                </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="ask1" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Lorem Ipsum</p>
                </div>
            </div>

            <!-- Question 2 -->
            <h2 class="accordion-header" id="ask2">
                <button class="accordion-button collapsed txt-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Q: Lorem Ipsum
                </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="ask2" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Lorem Ipsum</p>
                </div>
            </div>

            <!-- Question 3 -->
            <h2 class="accordion-header" id="ask3">
                <button class="accordion-button collapsed txt-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    Q: Lorem Ipsum
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="ask3" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>