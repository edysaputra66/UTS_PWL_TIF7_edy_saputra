<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title> <?php echo $judul; ?> </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                AKADEMIK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logger</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="<?= base_url(); ?>log">No.Hp</a>
                            <a class="dropdown-item" href="<?= base_url(); ?>">Alamat</a>
                        </div>
                    </li>
                    <a class="nav-item nav-link" href="<?= base_url(); ?>v_mhs">View</a>
                    <a class="py-2 d-none d-md-inline" href="<?= base_url(); ?>">About</a>
                </div>
            </div>
        </div>
    </nav>