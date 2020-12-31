<div class="right_col" role="main">
    <!-- top tiles -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- /top tiles -->
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Data Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="<?= base_url('user/add') ?>" class="btn btn-success btn-sm">
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>Input Data Users
                        </a>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <!-- <th>
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th> -->
                                            <th class="column-title">No. </th>
                                            <th class="column-title">Foto </th>
                                            <th class="column-title">Nama </th>
                                            <th class="column-title">Username </th>
                                            <th class="column-title">Email </th>
                                            <th class="column-title">No. Telpon </th>
                                            <th class="column-title">Role </th>
                                            <th class="column-title">Aksi </th>
                                            <!-- <th class="bulk-actions" colspan="7">
                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if ($users) :
                                            foreach ($users as $user) :
                                        ?>
                                                <tr class="even pointer">
                                                    <td><?= $no++; ?></td>
                                                    <td>
                                                        <img width="30" src="<?= base_url() ?>assets/img/avatar/<?= $user['foto'] ?>" alt="<?= $user['nama']; ?>" class="img-thumbnail rounded-circle">
                                                    </td>
                                                    <td><?= $user['nama']; ?></td>
                                                    <td><?= $user['username']; ?></td>
                                                    <td><?= $user['email']; ?></td>
                                                    <td><?= $user['no_telp']; ?></td>
                                                    <td><?= $user['role']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('user/toggle/') . $user['id_user'] ?>" class="btn btn-circle btn-sm <?= $user['is_active'] ? 'btn-secondary' : 'btn-success' ?>" title="<?= $user['is_active'] ? 'Nonaktifkan User' : 'Aktifkan User' ?>"><i class="fa fa-fw fa-power-off"></i></a>
                                                        <a href="<?= base_url('user/edit/') . $user['id_user'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                                        <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('user/delete/') . $user['id_user'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach;
                                        else : ?>
                                            <tr>
                                                <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>

                                    <!-- <tbody>
                                        <tr class="even pointer"> -->
                                    <!-- <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td> -->
                                    <!-- <td class=" ">121000040</td>
                                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                                            <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                            <td class=" ">John Blank L</td>
                                            <td class=" ">Paid</td>
                                            <td class="a-right a-right ">$7.45</td>
                                            <td class=" last"><a href="#">View</a>
                                            </td> -->
                                    <!-- </tr>
                                    </tbody> -->
                                </table>
                            </div>
                            <!-- <div class="card-box table-responsive">

                                <table class="table table-striped dt-responsive nowrap" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th width="30">No.</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>No. telp</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if ($users) :
                                            foreach ($users as $user) :
                                        ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td>
                                                        <img width="30" src="<?= base_url() ?>assets/img/avatar/<?= $user['foto'] ?>" alt="<?= $user['nama']; ?>" class="img-thumbnail rounded-circle">
                                                    </td>
                                                    <td><?= $user['nama']; ?></td>
                                                    <td><?= $user['username']; ?></td>
                                                    <td><?= $user['email']; ?></td>
                                                    <td><?= $user['no_telp']; ?></td>
                                                    <td><?= $user['role']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('user/toggle/') . $user['id_user'] ?>" class="btn btn-circle btn-sm <?= $user['is_active'] ? 'btn-secondary' : 'btn-success' ?>" title="<?= $user['is_active'] ? 'Nonaktifkan User' : 'Aktifkan User' ?>"><i class="fa fa-fw fa-power-off"></i></a>
                                                        <a href="<?= base_url('user/edit/') . $user['id_user'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                                        <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('user/delete/') . $user['id_user'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach;
                                        else : ?>
                                            <tr>
                                                <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>

                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <br />

</div>