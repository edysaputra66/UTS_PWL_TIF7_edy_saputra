<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Form Input Mahasiswa</h3>
                </div>

                <div class="card-body">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim">
                                <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat">
                                <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nope">No. Hp</label>
                                <input type="text" class="form-control" name="nope" id="nope">
                                <small class="form-text text-danger"><?= form_error('nope'); ?></small>
                            </div>
                            <a class="btn btn-primary" href="<?= base_url(); ?>mahasiswa">kembali</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>