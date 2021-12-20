<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Master siswa</h4>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-uppercase">
                                <th scope="col">
                                    <h6 class="font-weight-bold">#</h6>
                                </th>
                                <th scope="col">ID Siswa</h6>
                                </th>
                                <th scope="col">Nama Siswa</h6>
                                </th>
                                <th scope="col">Nama Jurusan</h6>
                                </th>
                                <th scope="col">Kelas</h6>
                                </th>
                                <th scope="col">Jenjang</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-uppercase">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_siswa as $row) {
                                ?>
                                    <td class="text-center">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td class=" text-center"><?= $row['id_siswa']; ?></td>
                                    <td class=""><?= $row['nama_siswa']; ?></td>
                                    <td class=" text-center"><?= $row['nama_jurusan']; ?></td>
                                    <td class=" text-center"><?= $row['nama_kelas']; ?></td>
                                    <td class=" text-center"><?= $row['nama_jenjang']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>