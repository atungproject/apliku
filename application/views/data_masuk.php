<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('template/header'); ?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a onClick="document.location.reload(true)" class="site_title"><i class="fa fa-paw"></i> <span></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $user_nama; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php $this->load->view('template/menu'); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('auth/logout'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $user_nama; ?>  <img src="<?php echo base_url();?>assets/production/images/img.jpg" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="<?php echo site_url('auth/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row" style="display: inline-block;" >
            </div>
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                    <div class="x_title">
                        <h2>Transaksi<small>Data Masuk</small></h2>
                        <!-- <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                        </ul> -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                        <!-- <p class="text-muted font-13 m-b-30">
                        Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                        </p> -->
                        
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Nomer Transaksi</th>
                            <th>Tanggal</th>
                            <th>Nama Akun</th>
                            <th>Saldo</th>
                            <th>Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1; 
                                foreach($tbl_datamasuk as $m): ?>
                            <tr>
                                <td> <?php echo $no++;?> </td>
                                <td> <?php echo $u->id_akunmasuk;?> </td>
                                <td> <?php echo $u->tgl;?> </td>
                                <td> <?php echo $u->saldo;?> </td>
                                <td> <?php echo $u->pem;?> </td>
                                <td> <?php echo $u->ket;?> </td>
                            </tr>
                                <?php endforeach; ?>
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
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Aplikasi Keuangan - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

<?php $this->load->view('template/footer'); ?>
</body>
</html>