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
                        <a href="<?= base_url('supplier') ?>" class="btn btn-secondary btn-sm">
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="id_data_masuk">ID Transaksi Data Masuk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= $id_data_masuk; ?>" name="id_data_masuk" id="id_data_masuk" type="text" readonly="readonly" class="form-control has-feedback-left" placeholder="ID Transaksi Data Masuk...">
                            <span class="fa fa-fw fa-circle-o-notch form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('id_data_masuk', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal_masuk">Tanggal Masuk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input value="<?= set_value('tanggal_masuk', date('Y-m-d')); ?>" name="tanggal_masuk" id="tanggal_masuk" type="text" class="form-control has-feedback-left" placeholder="Nomor Telepon...">
                            <span class="fa fa-fw fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            <?= form_error('tanggal_masuk', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="supplier_id">Supplier <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 input-group">
                            <select name="supplier_id" id="supplier_id" class="form-control has-feedback-left">
                                <option value="" selected disabled>Pilih Supplier</option>
                                <?php foreach ($supplier as $s) : ?>
                                    <option <?= set_select('supplier_id', $s['id_supplier']) ?> value="<?= $s['id_supplier'] ?>"><?= $s['nama_supplier'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="fa fa-fw fa-users form-control-feedback left" aria-hidden="true"></span>
                            <span class="input-group-btn">
                                <!-- <button type="button" class="btn btn-primary">Go!</button> -->
                                <a class="btn btn-primary" href="<?= base_url('supplier/add'); ?>"><i class="fa fa-plus"></i></a>
                            </span>

                            <?= form_error('supplier_id', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="barang_id">Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 input-group">
                            <select name="barang_id" id="barang_id" class="form-control has-feedback-left">
                                <option value="" selected disabled>Pilih Barang</option>
                                <?php foreach ($barang as $b) : ?>
                                    <option <?= $this->uri->segment(3) == $b['id_barang'] ? 'selected' : '';  ?> <?= set_select('barang_id', $b['id_barang']) ?> value="<?= $b['id_barang'] ?>"><?= $b['id_barang'] . ' | ' . $b['nama_barang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="fa fa-fw fa-users form-control-feedback left" aria-hidden="true"></span>
                            <span class="input-group-btn">
                                <a class="btn btn-primary" href="<?= base_url('barang/add'); ?>"><i class="fa fa-plus"></i></a>
                            </span>
                            <?= form_error('barang_id', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="stok">Stok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 form-group">
                            <input readonly="readonly" id="stok" type="number" class="form-control">
                            <!-- <span class="fa fa-fw fa-archive form-control-feedback left" aria-hidden="true"></span> -->
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="jumlah_masuk">Jumlah Masuk <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 input-group">
                            <input value="<?= set_value('jumlah_masuk'); ?>" name="jumlah_masuk" id="jumlah_masuk" type="number" class="form-control" placeholder="Jumlah Masuk...">
                            <!-- <span class="fa fa-fw fa-users form-control-feedback left" aria-hidden="true"></span> -->
                            <span class="input-group-btn">
                                <a class="btn btn-secondary" href="#" id="satuan">Satuan</a>
                            </span>
                            <?= form_error('jumlah_masuk', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div data-parsley-validate class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="total_stok">Total Stok</label>
                        <div class="col-md-6 col-sm-6 input-group">
                            <input readonly="readonly" id="total_stok" type="number" class="form-control">
                            <!-- <span class="fa fa-fw fa-archive form-control-feedback left" aria-hidden="true"></span> -->
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