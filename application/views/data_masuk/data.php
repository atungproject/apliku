<div class="right_col" role="main">
    <!-- top tiles -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /top tiles -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Data <?= $title; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="<?= base_url('datamasuk/add') ?>" class="btn btn-success btn-sm">
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>Input Data <?= $title; ?>
                        </a>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>No Transaksi</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Supplier</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Masuk</th>
                                            <th>User</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if ($datamasuk) :
                                            foreach ($datamasuk as $bm) :
                                        ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $bm['id_data_masuk']; ?></td>
                                                    <td><?= $bm['tanggal_masuk']; ?></td>
                                                    <td><?= $bm['nama_supplier']; ?></td>
                                                    <td><?= $bm['nama_barang']; ?></td>
                                                    <td><?= $bm['jumlah_masuk'] . ' ' . $bm['nama_satuan']; ?></td>
                                                    <td><?= $bm['nama']; ?></td>
                                                    <td>
                                                        <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('datamasuk/delete/') . $bm['id_data_masuk'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="8" class="text-center">
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