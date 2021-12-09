<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Master Kelas</h4>
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
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">ID Kelas</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">Jurusan </h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">Kelas</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold" style="text-transform: uppercase;">Jenjang</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($kelas as $row) {
                                ?>
                                    <td class="text-centers">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['id']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['kode']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['kelas']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['jenjang']; ?></h6>
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