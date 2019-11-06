<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data No.Hp <strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?> .
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Histori No.Hp</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <ul class="list-group">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">No.Hp Lama</th>
                                        <th scope="col">No.Hp Baru</th>
                                        <th scope="col">Datetime</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($log as $m) { ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $m->nama_mhs; ?></td>
                                            <td><?= $m->nim_mhs; ?></td>
                                            <td><?= $m->nope_lama; ?></td>
                                            <td><?= $m->nope_baru; ?></td>
                                            <td><?= $m->tgl_update; ?></td>
                                            <td><a href="<?= base_url(); ?>log/hapus/<?= $m->id_log; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </ul>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>