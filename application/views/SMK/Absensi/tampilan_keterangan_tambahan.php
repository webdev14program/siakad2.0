<div class="alert alert-success" role="alert">
    <h4 class="text-center font-weight-bold text-uppercase">Keterangan Tambahan</h4>
</div>

<button type="button" class="btn btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal">
    tambah keterangan absen
</button>

<div class="row mt-3">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-uppercase font-weight-bold text-white" id="exampleModalLabel">tambah keterangan absen</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>GURU</label>
                        <select class="form-control" name="mapel">
                            <OPtion class="bg-info text-white" disabled>PILIH GURU</OPtion>
                            <?php foreach ($guru as $row) { ?>
                                <option value="<?= $row['kode']; ?>"><?= $row['id']; ?> | <?= $row['nama']; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>STATUS TIDAK MASUK</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>SAKIT</option>
                            <option>IJIN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>TANGGAL</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>BUKTI FISIK</label>
                        <input type="file" class="form-control-file">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>