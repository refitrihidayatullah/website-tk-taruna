        <!-- Signup modal content -->
        <div id="tambah_data" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content ">

                    <div class="modal-body">
                        <div class="text-center mt-2 mb-4">
                            <a href="index.html" class="text-success">
                                <span><img class="mr-2" src="assets/images/logo-icon.png" alt="" height="18"><img src="assets/images/logo-text.png" alt="" height="18"></span>
                            </a>
                        </div>

                        <form class="pl-3 pr-3" method="POST" action="<?= base_url('admin/tambah'); ?>">
                            <?= form_open_multipart('admin/tambah');  ?>

                            <div class="form-group">
                                <label for="nama_user">Nama Lengkap</label>
                                <input class="form-control" type="text" id="nama_user" name="nama_user" required="required" placeholder="Enter your name">
                                <label><?= form_error('nama_user'); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="email_user">Email address</label>
                                <input class="form-control" type="email" id="email_user" name="email_user" required="" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="password_user">Password</label>
                                <input class="form-control" type="password_user" name="password_user" required="" id="password" placeholder="Enter your password">
                            </div>
                            <div class="form-group mb-4">
                                <label class="mr-sm-2" for="nilai_status">Status</label>
                                <select class="custom-select mr-sm-2" id="nilai_status" name="nilai_status">
                                    <option selected>Pilih...</option>
                                    <?php foreach ($status as $sts) { ?>
                                        <option value="<?= $sts['nilai_status']; ?>"><?= $sts['nama_status']; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mr-sm-2" for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="custom-select mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                                    <option selected>Pilih...</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input class="form-control" type="number" required="" id="no_hp" name="no_hp" placeholder="Enter your number">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" required="" id="alamat" name="alamat" placeholder="Enter your address">
                            </div>
                            <div class="card">
                                <div class="card-body">

                                    <label for="foto">Image Upload</label>
                                    <h6 class="card-subtitle">upload your image
                                    </h6>
                                    <form class="mt-3">
                                        <fieldset class="form-group">
                                            <input type="file" class="form-control-file" id="foto" name="foto">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-outline-success">Simpan
                                </button>
                            </div>
                            <?= form_close();  ?>

                        </form>

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <!-- Start Top Leader Table -->
        <!-- *************************************************************** -->

        <div class="table-responsive">
            <table class="table no-wrap v-middle mb-0">
                <thead>
                    <button type="button" class="btn btn-success btn-circle" data-toggle="modal" data-target="#tambah_data">
                        <i class="fa fa-plus"></i>
                    </button>
                    <tr class="border-0">
                        <th class="border-0 font-14 font-weight-medium text-muted">Team Lead
                        </th>
                        <th class="border-0 font-14 font-weight-medium text-muted px-2">Status
                        </th>
                        <th class="border-0 font-14 font-weight-medium text-muted">Hak Akses</th>
                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                            Alamat
                        </th>
                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                            Jenis Kelamin
                        </th>
                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $adm) { ?>
                        <tr>

                            <td class="border-top-0 px-2 py-4 d-block">
                                <div class="d-flex no-block align-items-center">
                                    <div class="mr-3"><img src="assets/images/users/widget-table-pic1.jpg" alt="user" class="rounded-circle" width="45" height="45" /></div>
                                    <div class="">
                                        <h5 class="text-dark mb-0 font-16 font-weight-medium"><?= $adm['nama_guru']; ?></h5>
                                        <span class="text-muted font-14"><?= $adm['email_user']; ?></span>
                                    </div>
                                </div>
                            </td>
                            <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $adm['nama_status']; ?></td>
                            <td class="border-top-0 px-2 py-4">
                                <div class="popover-icon">
                                    <span class="text-muted px-2 py-4 font-14"><?= $adm['hak_status']; ?></span>
                                </div>
                            </td>
                            <td class="border-top-0 text-center px-2 py-4"><span class="text-muted px-2 py-4 font-14"><?= $adm['alamat']; ?></span></td>
                            <td class="border-top-0 text-center font-14 text-muted px-2 py-4">
                                <?= $adm['jenis_kelamin']; ?>
                            </td>


                        </tr>
                    <?php  } ?>
                    <!-- <tr>
                <td class="px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                        <div class="mr-3"><img src="assets/images/users/widget-table-pic2.jpg" alt="user" class="rounded-circle" width="45" height="45" /></div>
                        <div class="">
                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Uni Yanah
                            </h5>
                            <span class="text-muted font-14">Uniyanah@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td class="text-muted px-2 py-4 font-14">Kepala Sekolah</td>
                <td class="px-2 py-4">
                    <span class="text-muted px-2 py-4 font-14">Unlimited</span>
                </td>
                <td class="text-center px-2 py-4">
                    <span class="text-muted px-2 py-4 font-14">Jl.Basuki Rahmad</span>
                </td>
                <td class="text-center text-muted font-14 px-2 py-4">Wanita</td>

            </tr>
            <tr>
                <td class="px-2 py-4">
                    <div class="d-flex no-block align-items-center">
                        <div class="mr-3"><img src="assets/images/users/widget-table-pic3.jpg" alt="user" class="rounded-circle" width="45" height="45" /></div>
                        <div class="">
                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Guru1
                            </h5>
                            <span class="text-muted font-14">Guru1@gmail.com</span>
                        </div>
                    </div>
                </td>
                <td class="text-muted px-2 py-4 font-14">Guru</td>
                <td class="px-2 py-4">
                    <div class="popover-icon">
                        <span class="text-muted px-2 py-4 font-14">limited</span>
                    </div>
                </td>
                <td class="text-center px-2 py-4">
                    <span class="text-muted px-2 py-4 font-14">Jl.Mastrip 21</span>
                </td>
                <td class="text-center text-muted font-14 px-2 py-4">Wanita</td>
            </tr> -->

                </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->