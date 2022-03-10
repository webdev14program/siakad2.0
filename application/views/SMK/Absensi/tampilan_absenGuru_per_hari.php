<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">absen guru per hari <br> <?= $header['bulan'] ?></h4>
</div>
<a class="btn btn-success btn-sm text-uppercase" href="<?= base_url() ?>Dashboard_smk/data_absen_guru_perbulan">Kembali</a>
<div class="row mt-3">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase font-weight-bold">
                                <th scope="col">#</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">perhari (masuk)</th>
                                <th scope="col">perhari (keluar)</th>
                                <th scope="col">absen link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data as $row) {
                                ?>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['tanggal']; ?> <?= $row['bulan']; ?> <?= $row['tahun']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama_jenjang']; ?> (<?= $row['kode_jenjang']; ?>)</td>
                                    <td class="text-center text-uppercase">
                                        <a class="btn btn-danger btn-sm" href="<?= base_url() ?>Dashboard_smk/print_absen_guru_hari_masuk/<?= $row['tanggal_bulan_tahun'] ?>" target="_blank"><i class="fas fa-print"></i> print</a>
                                        <!-- <a class="btn btn-primary btn-sm disabled" href="<?= base_url() ?>Dashboard_smk/print_absen_guru_hari_masuk/<?= $row['tanggal_bulan_tahun'] ?>" target="_blank"><i class="fas fa-search"></i> Detail</a> -->
                                    </td>
                                    <td class="text-center text-uppercase">
                                        <a class="btn btn-warning btn-sm" href="<?= base_url() ?>Dashboard_smk/print_absen_guru_hari_keluar/<?= $row['tanggal_bulan_tahun'] ?>" target="_blank"><i class="fas fa-print"></i> print</a>
                                        <!-- <a class="btn btn-primary btn-sm disabled" href="<?= base_url() ?>Dashboard_smk/print_absen_guru_hari_masuk/<?= $row['tanggal_bulan_tahun'] ?>" target="_blank"><i class="fas fa-search"></i> Detail</a> -->
                                    </td>
                                    <td class="text-center text-uppercase">
                                        <a class="btn btn-success btn-sm" href="<?= base_url() ?>Dashboard_smk/print_absen_guru_hari_link/<?= $row['tanggal_bulan_tahun'] ?>" target="_blank"><i class="fas fa-print"></i> print</a>
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