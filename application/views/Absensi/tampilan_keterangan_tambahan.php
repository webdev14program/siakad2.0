<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Keterangan Tambahan</h4>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-uppercase text-center">
                                <th scope="col">#</th>
                                <th scope="col">ID Guru</th>
                                <th scope="col">Kode Guru</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">jenjang</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($keterangan_tambahan as $row) {
                                ?>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['id']; ?></td>
                                    <td class=" text-center"><?= $row['kode']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama']; ?></td>
                                    <td class=" text-center"><?= $row['jenjang']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama_keterangan']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['hari']; ?> <?= $row['bulan']; ?> <?= $row['tahun']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>