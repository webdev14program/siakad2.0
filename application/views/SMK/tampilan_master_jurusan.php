<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Master Jurusan</h4>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">
                                    <h6 class="font-weight-bold">#</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">ID Jurusan</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Kode Jurusan</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Jurusan</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">jenjang</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($jurusan as $row) {
                                ?>
                                    <td class="text-centers">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?= $row['id']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center font-weight-bold"><?= $row['kode']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase"><?= $row['jurusan']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center font-weight-bold"><?= $row['jenjang']; ?></h6>
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