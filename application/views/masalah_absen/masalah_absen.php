<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAKAD PERGURUAN TUNAS HARAPAN</title>
    <link rel="icon" href="https://smkth-jakbar.com/assets/images/logo.png">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/Admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class=" col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-md">
                                <div class="p-5">
                                    <h5 class="text-center font-weight-bold">
                                        <h5 class="text-center text-uppercase font-weight-bold">
                                            <?php
                                            date_default_timezone_set("Asia/Jakarta");
                                            echo "Tanggal " . date("Y-m-d");
                                            ?>
                                        </h5>
                                        <?= $this->session->flashdata('pesan'); ?>
                                    </h5>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 ">JIKA MASALAH ABSERN QRCODE</h1>
                                    </div>
                                    <form class="user" action="<?= base_url() ?>Dashboard/simpan_masalah_absen" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control " name="kode_guru" placeholder="Masukan Kode Guru">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="status">
                                                <option disabled>Masukan Stastus Absen</option>
                                                <option value="Masuk">Masuk (Masalah Infrastruktur)</option>
                                                <option value="Keluar">Keluar (Masalah Infrastruktur)</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Absen</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>