<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Master Guru</h4>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">#</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">id jenjang</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">Jenjang</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">Jumlah Guru</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">Detail guru</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">Print Akun</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($guru_per_jenjang as $row) {
                                ?>
                                    <td class="text-centers">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center font-weight-bold"><?= $row['id_jenjang']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase font-weight-bold"><?= $row['nama_jenjang']; ?> (<?= $row['kode_jenjang'] ?>)</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center font-weight-bold"><?= $row['jumlah_guru']; ?> Guru</h6>
                                    </td>
                                    <td class="text-center"><a class="btn btn-primary btn-sm " href="<?= base_url() ?>Dashboard_yayasan/detail_master_guru/<?= $row['kode_jenjang'] ?>"><i class="fas fa-search"></i> Detail</a></td>
                                    <td class="text-center"><a class="btn btn-danger btn-sm " href="<?= base_url() ?>Dashboard/print_master_guru/<?= $row['kode_jenjang'] ?>" target="_blank"><i class="fas fa-print"></i> Print</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>