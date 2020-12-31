<div class="right_col" role="main">
    <!-- top tiles -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /top tiles -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Data Supplier</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="<?= base_url('supplier/add') ?>" class="btn btn-success btn-sm">
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>Input Data Supplier
                        </a>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="50%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $num_char = 50;
                                        if ($supplier) :
                                            foreach ($supplier as $s) :
                                        ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $s['nama_supplier']; ?></td>
                                                    <td><?= $s['no_telp']; ?></td>
                                                    <td style="text-overflow: ellipsis !important; white-space: nowrap !important; overflow: hidden !important;"><?= $s['alamat']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('supplier/edit/') . $s['id_supplier'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                                        <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('supplier/delete/') . $s['id_supplier'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data Kosong
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <br />

</div>