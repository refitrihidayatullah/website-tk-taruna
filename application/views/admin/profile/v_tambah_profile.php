<div class="card ml-5 mr-5">
    <div class="modal-header modal-colored-header bg-primary mt-0">
        <h4 class="modal-title" id="primary-header-modalLabel">Tambah Data
        </h4>

    </div>
    <div class="card-body">
        <!-- <form class="pl-5 pr-5 mt-2" method="POST" action=""> -->
        <?= form_open_multipart('AdminProfile/tambah_aksi');  ?>


        <div class="form-group">
            <label for="judul_profile">Judul Content</label>
            <input class="form-control" type="text" id="judul_profile" name="judul_profile" placeholder="Enter Title content">
            <small class="form-text text-danger"><?= form_error('judul_profile'); ?></small>

        </div>

        <div class="form-group">
            <label for="deskripsi_profile">Deskripsi Content</label>
            <input class="form-control" type="text" id="deskripsi_profile" name="deskripsi_profile" placeholder="Enter deskripsi">
            <small class="form-text text-danger"><?= form_error('deskripsi_profile'); ?></small>
        </div>

        <label for="">Image Upload</label>
        <h6 class="card-subtitle">upload your image
        </h6>
        <fieldset class="form-group">
            <input type="file" name="userfile" size="20">
            <small class="form-text text-danger"><?= form_error('userfile'); ?></small>
        </fieldset>

        <div class="footer float-sm-right">
            <a href="<?= base_url('AdminProfile'); ?>"><button type="button" class="btn btn-light">Batal</button></a>
            <button type="submit" name="tambah" class="btn btn-success">Simpan
            </button>

        </div>


        <?= form_close(); ?>
    </div>
</div>