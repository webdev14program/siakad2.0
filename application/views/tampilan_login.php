<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAKAD PERGURUAN TUNAS HARAPAN SWADHARMA</title>
    <link rel="icon" href="https://smkth-jakbar.com/assets/images/logo.png">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/Admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url(https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-031.jpg); background-size: cover;">

    <div class="container" style=" margin-top: 80px;">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-12 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="text-center mt-3 text-uppercase font-weight-bold ">
                            <h4>Sistem Informasi Akademik</h4>
                            <h4>perguruan tunas harapan swadharma</h4>
                            <h4 class="text-white font-weight-bold bg-success">VERSION 1.0 PATCH 1.1</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block">
                                <img class="mt-2 ml-5" src="https://smkth-jakbar.com/assets/images/logo.png" style="width: 6cm; height: 6cm;">
                            </div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <form method="POST" action="<?= base_url() ?>Auth/proses_login" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Masukan ID Akun Anda">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Masukan Pasword Anda">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
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