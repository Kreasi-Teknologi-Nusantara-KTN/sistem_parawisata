    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url(
                                                                            'login/register'
                                                                        ) ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="nama" value="<?= set_value(
                                                                                                                                                    'nama'
                                                                                                                                                ) ?>">
                                    <?= form_error(
                                        'nama',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ) ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value(
                                                                                                                                                                'email'
                                                                                                                                                            ) ?>">

                                    <?= form_error(
                                        'email',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ) ?>

                                </div>
                                <div class="form-group form-control-select ">
                                    <select class="form-control selectBox" name="jenkel">
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value(
                                                                                                                                                        'alamat'
                                                                                                                                                    ) ?>">
                                    <?= form_error(
                                        'alamat',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ) ?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="kontak" name="kontak" placeholder="No Wa" value="<?= set_value(
                                                                                                                                                            'kontak'
                                                                                                                                                        ) ?>">
                                    <?= form_error(
                                        'kontak',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ) ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error(
                                            'password1',
                                            '<small class="text-danger pl-3">',
                                            '</small>'
                                        ) ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div class="form-group form-control-select ">
                                    <select class="form-control selectBox" name="role">
                                        <option value="2">Pengelola</option>
                                        <option value="3">Pengujung</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url(
                                                            'login'
                                                        ) ?>">Already have an account? Login!</a>
                            </div>
                            <br>
                            <div class="text-center">
                                <a class="small" href="<?= base_url(
                                                            'home'
                                                        ) ?>">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>