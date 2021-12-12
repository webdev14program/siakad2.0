<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Master Siswa</h4>
    <h4 class="text-center font-weight-bold text-uppercase"><?= $header['nama_kelas'] ?> (<?= $header['id_kelas'] ?>)</h4>
</div>

<a class="btn btn-primary font-weight-bold text-uppercase mb-3" href="<?= base_url() ?>Dashboard/master_siswa">KEMBALI</a>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase font-weight-bold">
                                <th scope="col">#</th>
                                <th scope="col">ID Siswa</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Janjang</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_siswa as $row) {
                                ?>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class=" text-center"><?= $row['id_siswa']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama_siswa']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama_jurusan']; ?></td>
                                    <td class=" text-center font-weight-bold"><?= $row['nama_kelas']; ?></td>
                                    <td class=" text-center"><?= $row['nama_jenjang']; ?></td>
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