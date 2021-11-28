<div class="card ml-5 mr-5">
    <div class="modal-header modal-colored-header bg-primary mt-0">
        <h4 class="modal-title" id="primary-header-modalLabel">Ubah Data
        </h4>

    </div>
    <div class="card-body">
        <form class="pl-5 pr-5 mt-2" method="POST" action="">

            <input type="hidden" name="id_profile" value="<?= $tampilall['id_profile']; ?>">
            <div class="form-group">
                <label for="judul_profile">Judul Content</label>
                <input class="form-control" type="text" id="judul_profile" name="judul_profile" placeholder="Enter Title content" value="<?= $tampilall['judul_profile']; ?>">
                <small class="form-text text-danger"><?= form_error('judul_profile'); ?></small>

            </div>

            <div class="form-group">
                <label for="deskripsi_profile">Deskripsi Content</label>
                <input class="form-control" type="text" id="deskripsi_profile" name="deskripsi_profile" placeholder=" Enter deskripsi" value="<?= $tampilall['deskripsi_profile']; ?> ">
                <small class="form-text text-danger"><?= form_error('deskripsi_profile'); ?></small>
            </div>

            <div class="footer float-sm-right">
                <a href="<?= base_url('AdminProfile'); ?>"><button type="button" class="btn btn-light">Batal</button></a>
                <button type="submit" name="ubah" class="btn btn-success">Simpan
                </button>

            </div>

        </form>
    </div>
</div>