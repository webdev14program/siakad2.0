<div class="row">
    <div class="col-md">
        <div class="card bg-primary">
            <div class="card-body">
                <h5 class="text-white font-weight-bold text-uppercase">siakad V2.0 perguruan tunas harapan swadharma (Kurikulum sma)</h5>
            </div>
        </div>
    </div>
</div>
<div class="row mt-2 mb-2">
    <div class="col-md-6">
        <div class="card bg-success">
            <div class="card-body">
                <h5 class="text-center text-uppercase text-white font-weight-bold">guru</h5>
                <h5 class="text-center text-uppercase text-white font-weight-bold"><?= $guru_sma ?> guru </h5>
            </div>
        </div>
    </div>
    <!-- <div class="col-md">
        <div class="card bg-danger">
            <div class="card-body">
                <h5 class="text-center text-uppercase text-white font-weight-bold">siswa</h5>
                <h5 class="text-center text-uppercase text-white font-weight-bold">0 siswa </h5>
            </div>
        </div>
    </div> -->

    <!-- <div class="col-md">
        <div class="card bg-warning">
            <div class="card-body">
                <h5 class="text-center text-uppercase text-white font-weight-bold">kelas</h5>
                <h5 class="text-center text-uppercase text-white font-weight-bold">0 Kelas</h5>
            </div>
        </div>
    </div> -->
</div>

<div class="row">
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-header bg-primary">
                <h5 class="font-weight-bolder text-white" style="text-transform: uppercase;">Identitas Sekolah</h5>
            </div>
            <div class="card-body">
                <table class="table table-border">
                    <tbody>
                        <tr>
                            <td>Nama Sekolah </td>
                            <td class="text-uppercase">: SMA Tunas Harapan</td>
                        </tr>
                        <tr>
                            <td>NPSN </td>
                            <td>: 20101606</td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td>: JL. KOMP. BNI 46 PESING</td>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <td>: stunasharapan@yahoo.com</td>
                        </tr>
                        <tr>
                            <td>Website </td>
                            <td>: stunasharapan.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-header bg-primary">
                <h5 class="font-weight-bolder text-white" style="text-transform: uppercase;">Detail Aplikasi</h5>
            </div>
            <div class="card-body">
                <table class="table table-border">
                    <tbody>
                        <tr>
                            <td>Versi Aplikasi </td>
                            <td>: Siakad V2.0</td>
                        </tr>
                        <tr>
                            <td>Versi PHP </td>
                            <td>: PHP 7.3.23</td>
                        </tr>
                        <tr>
                            <td>Database </td>
                            <td>: MySqli 5.0.12</td>
                        </tr>
                        <tr>
                            <td>Web Server </td>
                            <td>: Apache</td>
                        </tr>
                        <tr>
                            <td>Contact Developer </td>
                            <td>: <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    List Contact
                                </button></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white text-uppercase font-weight-bold " id="exampleModalLabel">List Developer</h5>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Specialis</th>
                                <th scope="col">Contact WA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Vishnu Isvara, S. Kom</td>
                                <td>Infrastruktur 1</td>
                                <td><a class="btn btn-primary btn-sm btn-block" href="https://api.whatsapp.com/send?phone=62 81383814312&text=Assalamu'alaikum Selamat Pagi Siang Sore malam, Admin Pak Vishnu, Saya ingin bertanya tentang pengisian INFRASTRUKTUR ABSENSI TUNAS HARAPAN" target="_blank">DEVELOPER (INFRA 1)</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Usup Raharjo, S.Kom</td>
                                <td>Infrastruktur 1</td>
                                <td><a class="btn btn-primary btn-sm btn-block" href="https://api.whatsapp.com/send?phone=62 81383814312&text=Assalamu'alaikum Selamat Pagi Siang Sore malam, Admin Pak Usup, Saya ingin bertanya tentang pengisian INFRASTRUKTUR ABSENSI TUNAS HARAPAN" target="_blank">DEVELOPER (INFRA 2)</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Rahmadika S Setiawan, S.Kom</td>
                                <td>System 1</td>
                                <td><a class="btn btn-primary btn-sm btn-block" href="https://api.whatsapp.com/send?phone=62 81383814312&text=Assalamu'alaikum Selamat Pagi Siang Sore malam, Admin Pak Usup, Saya ingin bertanya tentang pengisian INFRASTRUKTUR ABSENSI TUNAS HARAPAN" target="_blank">DEVELOPER (SYSTEM 1)</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>