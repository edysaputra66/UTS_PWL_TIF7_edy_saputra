<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-warning">
                    <h3>Detail Data Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <h5 class="card-title"><?= $mhs['nama_mhs']; ?></h5>
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM</label>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $mhs['nim_mhs']; ?></h6>
                        </div>
                        <div class="form-group">
                            <label for="nama">No. HP</label>
                            <p class="card-text"><?= $mhs['no_hp']; ?></p>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <p class="card-text"><?= $mhs['alamat']; ?></p>
                        </div>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">kembali</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>