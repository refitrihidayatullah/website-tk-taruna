<!-- <?php var_dump($total_info); ?> -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-9">
                        <h4 class="card-title">Keg Pembelajaran</h4>
                        <h6 class="card-subtitle">Berisi informasi kegiatan pembelajaran yang akan ditampilkan ke user.
                        </h6>

                        <?php if ($this->session->flashdata('flashinfo')) : ?>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        Data profile <strong></strong> <?= $this->session->flashdata('flashinfo'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>


                    </div>

                    <!-- <?php
                            if ($total_info == 0) { ?> -->

                    <div class="table-responsive col-3 float-right mt-1">
                        <button type="button" data-toggle="modal" data-target="#tambah_info" class="btn btn-success btn-circle">
                            <i class="fa fa-plus"></i>
                        </button></a>
                    </div>

                    <!-- <?php } else { ?>

                    <?php } ?> -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">Informasi</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php foreach ($tampil_info as $info) { ?>
                                    <tr>
                                        <th scope="row"><?= $info['informasi'];  ?></th>
                                        <td><button type="button" data-toggle="modal" data-target="#ubah_info<?= $info['id_info']; ?>" class="btn btn-outline-info btn-rounded"><i class="far fa-edit"></i></button></td>

                                        <td><a href="<?= base_url(); ?>AdminProfile/delete_info/<?= $info['id_info']; ?>"><button type="button" class="btn btn-outline-info btn-rounded"><i class="fas fa-trash"></i></button></a></td>


                                    </tr>
                                <?php } ?> -->

                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col-9">
                        <h4 class="card-title ">Content Keg Pembelajaran</h4>
                        <h6 class="card-subtitle">Berisi informasi Content Keg Pembelajaran yang akan ditampilkan ke user.
                        </h6>

                        <?php if ($this->session->flashdata('flash')) : ?>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        Data profile <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>

                    <!-- <?php if ($total >= 4) { ?>

                    <?php } else { ?> -->
                    <div class="table-responsive col-3">
                        <a href="<?= base_url(''); ?>AdminProfile/tambah"> <button type="button" class="btn btn-success btn-circle">
                                <i class="fa fa-plus"></i>
                            </button></a>
                    </div>
                    <!-- <?php } ?> -->




                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" width="300px">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <?php $i = 1;
                                    foreach ($tampil_content as $dt) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><img style="width: 200px;height:100px;" src="<?= base_url(); ?>uploads/<?= $dt['foto']; ?>"><button type="button" data-toggle="modal" data-target="#ubah_foto<?= $dt['id_profile']; ?>" class="btn btn-outline-info btn-rounded"><i class="far fa-edit"></i></button></a></td>
                                    <td><?= $dt['judul_profile']; ?></td>
                                    <td><?= $dt['deskripsi_profile']; ?></td>
                                    <td><a href="<?= base_url(); ?>AdminProfile/ubah/<?= $dt['id_profile']; ?>"><button type="button" class="btn btn-outline-info btn-rounded"><i class="far fa-edit"></i></button></a></td>
                                    <td><a href="<?= base_url(); ?>AdminProfile/delete/<?= $dt['id_profile']; ?>"><button type="button" class="btn btn-outline-info btn-rounded"><i class="fas fa-trash"></i></button></a></td>
                                </tr>

                            <?php } ?> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
<!-- Signup modal edit foto content -->
<!-- <?php $no = 1;
        foreach ($tampil_content as $dt) {
            $no++;  ?>
    <div id="ubah_foto<?= $dt['id_profile']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index.html" class="text-success">
                            <span><img class="mr-2" src="assets/assets/images/logo-icon.png" alt="" height="18"><img src="assets/assets/images/logo-text.png" alt="" height="18"></span>
                        </a>
                    </div>


                    <?php echo form_open_multipart('AdminProfile/proses_edit_foto'); ?>

                    <input type="hidden" name="id_profile" value="<?= $dt['id_profile']; ?>">
                    <label for="foto">Image Upload</label>
                    <h6 class="card-subtitle">upload your image
                    </h6>
                    <fieldset class="form-group">
                        <input type="file" class="form-control-file" id="userfile" value="<?= $dt['foto']; ?>" name="userfile">
                    </fieldset>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-success">Simpan
                        </button>
                    </div>


                    <?php echo form_close() ?>
                </div>
            </div> -->
<!-- /.modal-content -->
<!-- </div> -->
<!-- /.modal-dialog -->
<!-- </div> -->
<!-- /.modal -->
<!-- <?php } ?> -->
<!-- end modal edit foto -->



<!-- Signup modal tambah informasi content -->
<!-- <div id="tambah_info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img class="mr-2" src="<?= base_url(); ?>assets/assets/images/logo-icon.png" alt="" height="18"><img src="<?= base_url(); ?>assets/assets/images/logo-text.png" alt="" height="18"></span>
                    </a>
                </div>

                <form class="pl-3 pr-3" method="POST" action="<?= base_url('AdminProfile/tambah_info'); ?>">


                    <div class="form-group">
                        <label for="informasi">Informasi</label>
                        <textarea name="informasi" id="informasi" cols="47" rows="10" placeholder="Enter data Information.."></textarea>
                        <label><?= form_error('informasi'); ?></label>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-success">Simpan
                        </button>
                    </div>


                </form>

            </div>
        </div> -->
<!-- /.modal-content -->
<!-- </div> -->
<!-- /.modal-dialog -->
<!-- </div> -->
<!-- /.modal -->



<!-- Signup modal edit informasi content -->
<!-- <?php $no = 1;
        foreach ($tampil_info as $info) {
            $no++;  ?>
    <div id="ubah_info<?= $info['id_info']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index.html" class="text-success">
                            <span><img class="mr-2" src="assets/assets/images/logo-icon.png" alt="" height="18"><img src="assets/assets/images/logo-text.png" alt="" height="18"></span>
                        </a>
                    </div>


                    <?php echo form_open_multipart('AdminProfile/proses_edit_info'); ?>

                    <input type="hidden" name="id_info" value="<?= $info['id_info']; ?>">

                    <div class="form-group">
                        <label for="informasi">Informasi</label>
                        <textarea name="informasi" id="informasi" cols="47" rows="10" placeholder="Enter data Information..""><?= $info['informasi']; ?></textarea>
                        <label><?= form_error('informasi'); ?></label>
                    </div>


                    <div class=" modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-success">Simpan
                        </button>
                    </div>


                    <?php echo form_close() ?>
                </div>
            </div> -->
<!-- /.modal-content -->
<!-- </div> -->
<!-- /.modal-dialog -->
<!-- </div> -->
<!-- /.modal -->
<!-- <?php } ?> -->
<!-- end modal edit informasi -->