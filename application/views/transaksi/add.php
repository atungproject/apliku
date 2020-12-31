<?= $this->session->flashdata('pesan'); ?>
<div class="right_col" role="main">
    <!-- top tiles -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Data Keluar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="<?= base_url('datakeluar') ?>" class="btn btn-secondary btn-sm">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </ul>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>

    </div>
    <br />

</div>