<!doctype html>
<html lang="en">

<head>
    <!-- readonly meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/DataTables/datatables.min.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/siswa">Siswa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/biodata">Biodata</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Biodata
                    </div>
                    <div class="card-body">
                        <?php
                        include '../database.php';
                        $biodata = new Biodata();
                        foreach ($biodata->edit($_GET['id']) as $data) {
                            $id = $data['id'];
                            $agama = $data['agama'];
                            $nama = $data['nama'];
                            $alamat = $data['alamat'];
                            $jenis_kelamin = $data['jenis_kelamin'];
                            $tgl_lahir = $data['tgl_lahir'];
                        }
                        ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea type="text" name="alamat" class="form-control" readonly><?php echo $alamat ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" value="<?php echo $jenis_kelamin ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control" value="<?php echo $agama ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="/biodata" name="save" class="btn btn-block btn-dark">Kembali</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
</body>

</html>