<div class="container-fluid">
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile Pengelola</h6>
    </div>
    <div class="card-body">
        <div class="img rounded-circle text-center">
            <img src="<?= base_url('assets/admin/img/undraw_profile.svg') ?>" width="140" alt="">
        </div>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
        </div>
        <div class="list ">
        <div class="form-group">
                 <label for="namaAdmin">Nama Pengelola : </label>
                 <input type="text" class="form-control" name="nama" placeholder="">
        </div>
        <div class="form-group">
                 <label for="email">Email :</label>
                 <input type="text" class="form-control" name="email" placeholder="">
        </div>
        <label for="jenkel">Jenkel</label>
        <select class="form-control" name="jenkel">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
        </select>
        <br>
        <div class="form-group">
                 <label for="alamat">Alamat :</label>
                 <input type="text" class="form-control" name="alamat" placeholder="">
        </div>
        <div class="form-group">
                 <label for="password">Password :</label>
                 <input type="text" class="form-control" name="password" placeholder="">
        </div>
        <button type="button" class="btn btn-success">Simpan Perubahan</button>
    </div>
</div>

</div>
</div>
</div>