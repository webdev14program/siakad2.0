<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Data Kelas</h4>
</div>



<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">ID Kelas</th>
                                <th scope="col">Jurusan </th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jenjang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_kelas as $row) {
                                ?>
                                    <td class="text-center">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['id_kelas']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase "><?php echo $row['jurusan']; ?></h6>
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