<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data mahasiswa <strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?> .
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari data mahasiswa...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Mahasiswa</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <?php if (empty($mhs)) : ?>
                            <div class="alert alert-danger" role="alert">
                                data mahasiswa tidak ditemukan.
                            </div>
                        <?php endif; ?>
                        <ul class="list-group">
                            <?php foreach ($mhs as $m) : ?>
                                <li class="list-group-item">
                                    <?= $m['nama_mhs']; ?>
                                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $m['id_mhs']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
                                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $m['id_mhs']; ?>" class="badge badge-primary float-right">Detail</a>
                                    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $m['id_mhs']; ?>" class="badge badge-success float-right">Edit</a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>