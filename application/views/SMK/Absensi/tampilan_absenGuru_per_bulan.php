<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">absen guru</h4>
</div>
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase font-weight-bold">
                                <th scope="col">#</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">perhari</th>
                                <th scope="col">perbulan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($absen_guru_perbulan as $row) {
                                ?>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['bulan']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['tahun']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama_jenjang']; ?> (<?= $row['kode_jenjang']; ?>)</td>
                                    <td class="text-center text-uppercase"><a class="btn btn-primary btn-sm" href="<?= base_url() ?>Dashboard_smk/data_absen_guru_perhari/<?= $row['bulan_tahun'] ?>"><i class="fas fa-search"></i> details</a></td>
                                    <td class="text-center text-uppercase"><a class="btn btn-danger btn-sm" href="<?= base_url() ?>Dashboard/print_absen_guru_perbulan/<?= $row['bulan_tahun'] ?>" target="_blank"><i class="fas fa-print"></i> print</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>