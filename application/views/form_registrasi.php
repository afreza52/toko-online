<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
                            </div>
                            <form method="post" action="<?= base_url('auth/registrasi'); ?>" class="user">

                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user"
                                        placeholder="Nama Lengkap">
                                    <?= form_error('nama', '<div class="text-danger small ml-3">', '</div>'); ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user"
                                        placeholder="Username">
                                    <?= form_error('usename', '<div class="text-danger small ml-3">', '</div>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password1" class="form-control form-control-user"
                                            placeholder="Password">
                                        <?= form_error('password1', '<div class="text-danger small ml-3">', '</div>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password2" class="form-control form-control-user"
                                            placeholder="Ulangi Password">
                                        <?= form_error('password2', '<div class="text-danger small ml-3">', '</div>'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/login'); ?>">Sudah Punya Akun? Silahkan
                                    Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>