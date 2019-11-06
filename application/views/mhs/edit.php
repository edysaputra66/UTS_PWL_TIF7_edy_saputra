<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-primary">
                    <h3>Form Edit Mahasiswa</h3>
                </div>

                <div class="card-body">

                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mhs['id_mhs']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $mhs['nama_mhs']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim" value="<?= $mhs['nim_mhs']; ?>">
                                <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control" name="gender" id="gender">
                                    <?php foreach ($gender as $jk) : ?>
                                        <?php if ($jk == $mhs['jenis_kelamin']) : ?>
                                            <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $mhs['alamat']; ?>">
                                <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nope">No. Hp</label>
                                <input type="text" class="form-control" name="nope" id="nope" value="<?= $mhs['no_hp']; ?>">
                                <small class="form-text text-danger"><?= form_error('nope'); ?></small>
                            </div>
                            <a class="btn btn-primary" href="<?= base_url(); ?>mahasiswa">kembali</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>