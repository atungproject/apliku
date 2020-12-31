<div class="right_col" role="main">
    <!-- top tiles -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /top tiles -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form <?= $title; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="<?= base_url('user') ?>" class="btn btn-secondary btn-sm">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span> Kembali
                        </a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <?= $this->session->flashdata('pesan'); ?>
                    <?= form_open(); ?>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('username'); ?>" name="username" id="username" type="text" class="form-control has-feedback-left" placeholder="Username...">
                            <span class="fa fa-fw fa-user form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('password'); ?>" name="password" id="password" type="password" class="form-control has-feedback-left" placeholder="Password...">
                            <span class="fa fa-fw fa-lock form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="password2">Konfirmasi Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('password2'); ?>" name="password2" id="password2" type="password" class="form-control has-feedback-left" placeholder="Konfirmasi Password...">
                            <span class="fa fa-fw fa-lock form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <hr>

                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('nama'); ?>" name="nama" id="nama" type="text" class="form-control has-feedback-left" placeholder="Nama Pengguna...">
                            <span class="fa fa-fw fa-user form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('email'); ?>" name="email" id="email" type="email" class="form-control has-feedback-left" placeholder="Email...">
                            <span class="fa fa-fw fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="no_telp">Nomer Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('no_telp'); ?>" name="no_telp" id="no_telp" type="number" class="form-control has-feedback-left" placeholder="Nomer Telepon...">
                            <span class="fa fa-fw fa-phone form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="role">Role <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <div class="custom-control custom-radio">
                                <input <?= set_radio('role', 'admin'); ?> value="admin" type="radio" id="admin" name="role" class="custom-control-input">
                                <label class="custom-control-label" for="admin">Admin</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input <?= set_radio('role', 'staff'); ?> value="staff" type="radio" id="staff" name="role" class="custom-control-input">
                                <label class="custom-control-label" for="staff">Staff</label>
                            </div>
                            <?= form_error('role', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div data-parsley-validate class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success"><span class="icon"><i class="fa fa-plus"></i></span> Simpan</button>
                            <button type="reset" class="btn btn-secondary"> <span class="icon"><i class="fa fa-refresh"></i></span> Reset</button>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>