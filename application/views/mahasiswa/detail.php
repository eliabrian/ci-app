<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nim'] ?></h5>
                    <p class="card-text"><?= $mahasiswa['nama'] ?></p>
                    <p class="card-text"><?= $mahasiswa['email'] ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan'] ?></p>
                    <a href="<?= base_url();?>mahasiswa">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>