<!-- <?php var_dump($total_kegiatan); ?> -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col-9">
                        <h4 class="card-title  p-1">Keg Pembelajaran</h4>
                        <h6 class="card-subtitle ml-1">Berisi informasi kegiatan pembelajaran yang akan ditampilkan ke user.
                        </h6>

                        <?php if ($this->session->flashdata('flashkeg')) : ?>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        Data kegiatan <strong></strong> <?= $this->session->flashdata('flashkeg'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>


                    </div>

                    <?php
                    if ($total_kegiatan == 0) { ?>

                        <div class="table-responsive col-3 float-right mt-1">
                            <button type="button" data-toggle="modal" data-target="#tambah_kegiatan" class="btn btn-success btn-circle">
                                <i class="fa fa-plus"></i>
                            </button></a>
                        </div>

                    <?php } else { ?>

                    <?php } ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Judul Kegiatan</th>
                                    <th scope="col">Deskripsi Kegiatan</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($tampil as $keg) { ?>
                                    <tr>
                                        <td scope="row"><?= $keg['judul_menu'];  ?></td>
                                        <td scope="row"><?= $keg['deskripsi_menu'];  ?></td>
                                        <td><button type="button" data-toggle="modal" data-target="#ubah_keg<?= $keg['id_menu']; ?>" class="btn btn-outline-info btn-rounded"><i class="far fa-edit"></i></button></td>

                                        <td><a href="<?= base_url(); ?>AdminKegiatan/delete_kegiatan/<?= $keg['id_menu']; ?>"><button type="button" class="btn btn-outline-info btn-rounded"><i class="fas fa-trash"></i></button></a></td>


                                    </tr>
                                <?php } ?>

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



                    </div>






                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" width="150px">Judul Content</th>
                                <th scope="col">Deskripsi Content</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($tampil as $keg) { ?>
                                <tr>


                                    <td><?= $i++; ?></td>
                                    <td><?= $keg['judul_content']; ?></td>
                                    <td><?= $keg['deskripsi_content']; ?></td>
                                    <td><a href="<?= base_url(); ?>AdminProfile/ubah/<?= $keg['id_kegiatan']; ?>"><button type="button" class="btn btn-outline-info btn-rounded"><i class="far fa-edit"></i></button></a></td>
                                    <td><a href="<?= base_url(); ?>AdminProfile/delete/<?= $keg['id_kegiatan']; ?>"><button type="button" class="btn btn-outline-info btn-rounded"><i class="fas fa-trash"></i></button></a></td>
                                </tr>

                            <?php } ?>
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



<!-- Signup modal tambah kegiatan -->
<div id="tambah_kegiatan" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img class="mr-2" src="<?= base_url(); ?>assets/assets/images/logo-icon.png" alt="" height="18"><img src="<?= base_url(); ?>assets/assets/images/logo-text.png" alt="" height="18"></span>
                    </a>
                </div>

                <form class="pl-3 pr-3" method="POST" action="<?= base_url('AdminKegiatan/tambah_kegiatan'); ?>">
                    <input type="hidden" name="kode_menu" value="keg">
                    <div class="form-group">
                        <label for="judul_menu">Judul Kegiatan</label>
                        <input class="form-control" type="text" id="judul_menu" name="judul_menu" placeholder="Enter Title content">
                        <small class="form-text text-danger"><?= form_error('judul_menu'); ?></small>

                    </div>
                    <div class="form-group">
                        <label for="deskripsi_menu">Deskripsi Kegiatan</label>
                        <textarea name="deskripsi_menu" id="deskripsi_menu" cols="47" rows="5" placeholder="Enter data Information..""></textarea>
                        <label><?= form_error('deskripsi_menu'); ?></label>
                    </div>
        



                    <div class=" modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-success">Simpan
                        </button>
                    </div>


                </form>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- Signup modal edit kegiatan -->
<?php $no = 1;
foreach ($tampil as $inf) {
    $no++;  ?>

    <div id="ubah_keg<?= $inf['id_menu']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">

                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index.html" class="text-success">
                            <span><img class="mr-2" src="<?= base_url(); ?>assets/assets/images/logo-icon.png" alt="" height="18"><img src="<?= base_url(); ?>assets/assets/images/logo-text.png" alt="" height="18"></span>
                        </a>
                    </div>


                   <form method="POST" action="<?= base_url('AdminKegiatan/ubah_kegiatan'); ?>">

                    <input type="hidden" name="id_menu" value="<?= $inf['id_menu']; ?>">
                    <div class="form-group">
                        <label for="judul_menu">Judul Kegiatan</label>
                        <input class="form-control" type="text" value="<?= $inf['judul_menu']; ?>" id="judul_menu" name="judul_menu" placeholder="Enter Title content">
                        <small class="form-text text-danger"><?= form_error('judul_menu'); ?></small>

                    </div>
                    <div class="form-group">
                        <label for="deskripsi_menu">deskripsi_menu</label>
                        <textarea name="deskripsi_menu" id="deskripsi_menu" cols="47" rows="10" placeholder="Enter data deskripsi..""><?= $inf['deskripsi_menu']; ?></textarea>
                        <small class="form-text text-danger"><?= form_error('deskripsi_menu'); ?></small>
                    </div>


                    <div class=" modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-success">Simpan
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>
<!-- end modal edit kegiatan -->