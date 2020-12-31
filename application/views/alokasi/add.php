<div class="right_col" role="main">
    <!-- top tiles -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /top tiles -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Tambah <?= $title; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="<?= base_url('Alokasi') ?>" class="btn btn-secondary btn-sm">
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="dep">ID <?= $title; ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input readonly value="<?= set_value('id_alokasi', $id_alokasi); ?>" name="id_alokasi" id="id_alokasi" type="text" class="form-control has-feedback-left" placeholder="ID Alokasi...">
                            <span class="fa fa-fw fa-circle-o-notch form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('dep', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="dep"><?= $title; ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('dep'); ?>" name="dep" id="dep" type="text" class="form-control has-feedback-left" placeholder="Alokasi...">
                            <span class="fa fa-fw fa-user form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('dep', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div data-parsley-validate class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success"><span class="icon"><i class="fa fa-save"></i></span> Simpan</button>
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