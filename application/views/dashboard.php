<div class="right_col" role="main">
    <div class="">
        <!-- <div class="page-title">
            <div class="title_left">
                <h3>Widget Designs</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="x_content">
                        <div class="row">
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-tasks"></i>
                                    </div>
                                    <div class="count"><?= $supplier; ?></div>

                                    <h3>Tota Supplier</h3>
                                    <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-suitcase"></i>
                                    </div>
                                    <div class="count"><?= $alokasi; ?></div>

                                    <h3>Total Alokasi</h3>
                                    <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-download"></i>
                                    </div>
                                    <div class="count"><?= $data_masuk; ?></div>

                                    <h3>Total Data Masuk</h3>
                                    <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-upload"></i>
                                    </div>
                                    <div class="count"><?= $data_keluar; ?></div>

                                    <h3>Total Data Keluar</h3>
                                    <!-- <p>Lorem ipsum psdea itgum rixt.</p> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="dashboard_graph">

                    <div class="row x_title">
                        <div class="col-md-7">
                            <h3> Total Transaksi<small> Perbulan pada Tahun <?= date('Y'); ?></small></h3>
                        </div>
                        <!-- <div class="col-md-5">
                            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                            </div>
                        </div> -->
                    </div>

                    <div class="col-md-9 col-sm-9 ">
                        <canvas id="myAreaChart" width="669" height="320" class="chartjs-render-monitor" style="display: block; width: 669px; height: 320px;"></canvas>

                        <!-- <div id="myAreaChart" class="chartjs-render-monitor" style="display: block; width: 669px; height: 320px;"></div> -->
                    </div>
                    <div class="col-md-3 col-sm-3  bg-white">
                        <div class="x_title">
                            <h2>Data Transaksi</h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <canvas id="myPieChart" width="250" height="250" class="chartjs-render-monitor" style="display: block; width: 200px; height: 200px;"></canvas>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
</div>