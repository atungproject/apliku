<?= $this->session->flashdata('pesan'); ?>
<div class="right_col" role="main">
    <!-- top tiles -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Riwayat <?= $title; ?></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="<?= base_url('datakeluar/add') ?>" class="btn btn-success btn-sm">
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>Input <?= $title; ?>
                        </a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>No. Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Alokasi</th>
                                            <th>Keterangan</th>
                                            <th>Pemasukan</th>
                                            <th>Pengeluaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if ($transaksi) :
                                            foreach ($transaksi as $t) :
                                        ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $t['kode_id']; ?></td>
                                                    <td><?= $t['tgl']; ?></td>
                                                    <td><?= $t['dep']; ?></td>
                                                    <td><?= $t['ket']; ?> </td>
                                                    <td align="right">Rp. <?= $t['pemasukan']; ?></td>
                                                    <td align="right">Rp.<?= $t['pengeluaran']; ?></td>
                                                    <td>
                                                        <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('transaksi/delete/') . $t['id_transaksi'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <tr>
                                                <td colspan="10" class="text-center">
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