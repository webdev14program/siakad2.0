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
            <img src="https://smkth-jakbar.com/assets/images/logo.png" style="width: 160px;height: 160px;margin-top: 20px;">
            <div class="col-md mt-4">
                <table class="table border">
                    <tbody class="text-uppercase">
                        <tr class="">
                            <td>JENIS Aplikasi</td>
                            <td class="font-weight-bold">: absensi V2.0 perguruan tunas harapan swadharma </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td class="font-weight-bold">: <?= $header['hari'] ?> <?= $header['bulan'] ?> <?= $header['tahun'] ?></td>
                        </tr>

                        <tr>
                            <td>SEKOLAH</td>
                            <td class="font-weight-bold">: perguruan tunas harapan swadharma (<?= $header['jenjang'] ?>)</td>
                        </tr>
                        <tr>
                            <td>STATUS ABSEN</td>
                            <td class="font-weight-bold">: ABSENSI <?= $header['ket'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-uppercase text-center font-weight-bold">
                        <th scope="col">#</th>
                        <th scope="col">id guru</th>
                        <th scope="col">nama guru</th>
                        <th scope="col">Jam</th>
                        <th scope="col">status absen</th>
                        <th scope="col">status lewat terlambat</th>
                    </tr>
                </thead>
                <tbody class="text-uppercase font-weight-bold">
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($data as $row) {
                        ?>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td class=" text-center"><?= $row['id']; ?></td>
                            <td class=" "><?= $row['nama']; ?></td>
                            <td class="text-center "><?= $row['jam']; ?></td>
                            <td class="text-center "><?= $row['status_absen_masuk']; ?></td>
                            <td class="text-center "><?= $row['status_lewat_absen_masuk']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script>
        window.print();
    </script>
</body>

</html>