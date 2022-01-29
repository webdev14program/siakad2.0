<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">absen guru per hari <br> <?= $header['hari'] ?> <?= $header['bulan'] ?> <?= $header['tahun'] ?></h4>
</div>

<a class="btn btn-success btn-sm text-uppercase" href="<?= base_url() ?>Dashboard/data_absen_guru_perbulan">kembali</a>

<div class="row mt-3">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase font-weight-bold">
                                <th scope="col">#</th>
                                <th scope="col">ID Guru</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">status absen</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data as $row) {
                                ?>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['id']; ?></td>
                                    <td class=" text-center font-weight-bold text-uppercase"><?= $row['nama']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['jenjang']; ?></td>
                                    <td class=" text-center font-weight-bold text-uppercase"><?= $row['ket']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['jam']; ?></td>
                                    <td>
                                        <h5 class="text-center"><a class="btn btn-danger btn-sm text-uppercase font-weight-bold" href="<?= base_url() ?>Dashboard/delete_absen_guru/<?= $row['id_absenGuru'] ?>"><i class="fas fa-trash-alt"></i> Delete</a></h5>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>