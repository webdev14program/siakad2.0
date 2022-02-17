<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Master Guru</h4>
    <h4 class="text-center font-weight-bold text-uppercase"><?= $header['nama_jenjang'] ?> (<?= $header['kode_jenjang'] ?>)</h4>
</div>
<a class="btn btn-primary font-weight-bold text-uppercase mb-3" href="<?= base_url() ?>Dashboard_yayasan/master_guru">KEMBALI</a>
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase font-weight-bold">
                                <th scope="col">#</th>
                                <th scope="col">ID Guru</th>
                                <th scope="col">Kode Guru</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Jenis GUru</th>
                                <th scope="col">Janjang</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_guru as $row) {
                                ?>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class=" text-center"><?= $row['id']; ?></td>
                                    <td class=" text-center"><?= $row['kode']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama']; ?></td>
                                    <td class=" text-center"><?= $row['guru']; ?></td>
                                    <td class=" text-center"><?= $row['jenis_guru']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $header['nama_jenjang'] ?> (<?= $header['kode_jenjang'] ?>)</td>
                                    <td class="text-center"> <a class="btn btn-danger btn-sm disabled" href="#"><i class="fas fa-trash-alt"></i> Hapus</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>