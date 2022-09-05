<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main class="container-fluid">
    <div class="row my-4">
        <!-- Profil -->
        <div class="container col-lg-6 my-3 mx-auto">
            <h4 class="txt-bold mb-4">Data Profil</h4>
            <form>
                <div class="mb-3">
                    <label for="inputNama" class="form-label txt-md">Nama</label>
                    <input type="text" class="form-control" id="inputNama" placeholder="Nama Pengguna" disabled>
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label txt-md">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="NIK" disabled>
                </div>
                <div class="mb-3">
                    <label for="idjss" class="form-label txt-md">ID JSS</label>
                    <input type="text" class="form-control" id="idjss" placeholder="JSS-1312" disabled>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label txt-md">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" placeholder="Pegawai, Mahasiswa">
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
                <div class="mb-3">
                    <label for="npwp" class="form-label txt-md">Nomor NPWP</label>
                    <input type="text" class="form-control" id="npwp" placeholder="12312415213">
                </div>
            </form>
        </div>
        <!-- Profil -->
        <div class="container col-lg-4 my-3 mx-auto">
            <h4 class="txt-bold mb-4">Unggah Dokumen</h4>
            <div class="mb-3">
                <label for="formFile" class="form-label txt-md">Unggah KTP</label>
                <input class="dropify" type="file" id="formFile" data-allowed-file-extensions="jpg jpeg png" aria-describedby="KTPDesc">

                <div id="KTPDesc" class="form-text">Unggah foto KTP Anda</div>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label txt-md">Unggah NPWP</label>
                <input class="dropify" type="file" id="formFile" data-allowed-file-extensions="jpg jpeg png" aria-describedby="NPWPDesc">

                <div id="NPWPDesc" class="form-text">Unggah foto kartu NPWP Anda</div>
            </div>
        </div>
    </div>
    <div class="text-center my-4">
        <a href="<?= base_url('/') ?>">
            <button type="button" class="btn btn-primary">Simpan Profil</button>
        </a>
    </div>
</main>

<?= $this->endSection(); ?>