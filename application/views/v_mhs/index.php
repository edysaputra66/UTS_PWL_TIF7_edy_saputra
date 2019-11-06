<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data view mahasiswa<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?> .
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
                    <h3>View All DATA Mahasiswa</h3>
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
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No.Hp Lama</th>
                                        <th scope="col">No.Hp Baru</th>
                                        <th scope="col">Datetime</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($view as $v) { ?>
                                        <tr>
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $v->nama_mhs; ?></td>
                                            <td><?= $v->nim_mhs; ?></td>
                                            <td><?= $v->alamat; ?></td>
                                            <td><?= $v->no_hp; ?></td>
                                            <td><?= $v->nope_baru; ?></td>
                                            <td><?= $v->tgl_update; ?></td>
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