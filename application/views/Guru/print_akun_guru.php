<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>SIAKAD PERGURUAN TUNAS HARAPAN</title>
    <link rel="icon" href="https://smkth-jakbar.com/assets/images/logo.png">
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <img src="https://smkth-jakbar.com/assets/images/logo.png" style="width: 200px;height: 200px;margin-top: 20px;">
            <div class="col-md mt-4">
                <table class="table border">
                    <tbody>
                        <tr>
                            <td>NAMA APLIKASI</td>
                            <td class="font-weight-bold text-uppercase">: siakad V2.0 perguruan tunas harapan swadharma </td>
                        </tr>
                        <tr>
                            <td>JENJANG</td>
                            <td class="font-weight-bold">: <?= $header['jenjang'] ?> (<?= $header['kode_jenjang'] ?>)</td>
                        </tr>

                        <tr>
                            <td>SEKOLAH</td>
                            <td class="font-weight-bold">: SMK TUNAS HARAPAN JAKARTA BARAT</td>
                        </tr>
                        <tr>
                            <td>DAFTAR DATA</td>
                            <td class="font-weight-bold">: AKUN GURU (<?= $header['kode_jenjang'] ?>)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><br>
        <hr style="border-top: 2px dashed black;">

        <div class="row">
            <div class="col-md">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase font-weight-bold">
                                <th scope="col">#</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">username</th>
                                <th scope="col">Password</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_guru as $row) {
                                ?>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama']; ?></td>
                                    <td class=" text-center"><?= $row['username']; ?></td>
                                    <td class=" text-center"><?= $row['password']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>