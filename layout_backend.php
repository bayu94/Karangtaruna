<!DOCTYPE html>
<html ng-app="App">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daqu &raquo; <?php echo @$title ? $title : 'Dashboard'?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminLTE/dist/css/AdminLTE.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminLTE/dist/css/skins/_all-skins.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/css/dataTables.bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/css/dataTables.responsive.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/jquery.datetimepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">

    <!-- JQUERY -->
    <script src="<?php echo base_url('assets/js/jquery-latest.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/angular.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/knob/jquery.knob.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/adminLTE/dist/js/app.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/js/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datepicker/jquery.datetimepicker.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/ckeditor/ckeditor.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/ckeditor/adapters/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/ckeditor/styles.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/ckeditor/plugins/justify/plugin.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div id="preload">
        <i class="fa fa-spinner fa-spin fa-5x"></i>
        <p class="text-center">
            <em>Memuat data...</em>
        </p>
    </div>
    <div class="wrapper">
        <header class="main-header">
            <a href="<?php echo site_url('home') ?>" class="logo">
                <span class="logo-mini"><b>D</b>q</span>
                <span class="logo-lg"><b>D</b>aqu</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                            <a href="<?php echo site_url('user/profile') ?>">
                                <i class="fa fa-user"></i> Profil Saya
                            </a>
                        </li>
                        <li class="dropdown messages-menu">
                            <a href="<?php echo site_url('home/logout') ?>">
                                <i class="fa fa-sign-out"></i> Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url('assets/adminLTE/dist/img/admin.png') ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Admin,</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                
                 <ul class="sidebar-menu">
                    <?php if($_SESSION['role_name'] == 'ROLE_ADMIN'): ?>
                    <li class="treeview" id="tree-1">
                      <a href="#">
                        <i class="fa fa-wrench"></i> <span>DATA MASTER</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('user')?>">Pengguna</a></li>
                        <li><a href="<?php echo site_url('student') ?>"> Siswa</a></li>
                        <li><a href="<?php echo site_url('category') ?>"> Jenis Pembayaran</a></li>
                        <li><a href="<?php echo site_url('keringanan') ?>"> Keringanan</a></li>
                      </ul>
                    </li>
                    <?php endif; ?>
                    <li class="treeview" id="tree-2">
                      <a href="#">
                        <i class="fa fa-edit"></i> <span>TRANSAKSI</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('transaksi/form')?>">Pembayaran Siswa</a></li>
                        <li><a href="<?php echo site_url('pengajuan/form')?>">Pengajuan Dana</a></li>
                        <li><a href="<?php echo site_url('pengajuan')?>">Daftar Pengajuan Dana</a></li>
                      </ul>
                    </li>
                    <li class="treeview" id="tree-3">
                      <a href="#">
                        <i class="fa fa-bar-chart"></i> <span>LAPORAN</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <!-- <li><a href="<?php echo site_url('report/transaksi_payment')?>">Histori Pembayaran</a></li> -->
                        <li><a href="<?php echo site_url('report/transaksi_in') ?>"> Kas Masuk</a></li>
                        <li><a href="<?php echo site_url('report/transaksi_out') ?>"> Kas Keluar</a></li>
                        <li><a href="<?php echo site_url('report/transaksi_tunggakan') ?>"> Tunggakan Santri</a></li>
                        <li><a href="<?php echo site_url('report/transaksi_account') ?>"> Penerimaan Per Akun</a></li>
                      </ul>
                    </li>
                    <?php if($_SESSION['role_name'] == 'ROLE_ADMIN'): ?>
                    <li class="treeview" id="tree-4">
                      <a href="#">
                        <i class="fa fa-gear"></i> <span>PENGATURAN &amp; ALAT</span> <i class="fa fa-angle-left pull-right"></i>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('backup')?>">Percadangan Data</a></li>
                      </ul>
                    </li>
                    <?php endif; ?>
                </ul>
                
            </section>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    <?php echo isset($data['title']) ? $data['title'] : 'Selamat datang.';?>
                    <small>
                    <?php echo isset($data['subtitle']) ? $data['subtitle'] : '';?>
                    </small>
                </h1>
            </section>
            <section class="content" id="#main-content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            &nbsp;
                            <?php 
                                if(isset($data['buttons']) && $data['buttons']) {
                                    rsort($data['buttons']);
                                    foreach ($data['buttons'] as $button) {
                                        echo '<a href="'.site_url(@$button['url']).'" 
                                        class="btn btn-info btn-sm pull-right" style="color:#fff"
                                        '.@$button['attr'].'>
                                        '.@$button['title'].'
                                        </a>';
                                    }
                                }
                            ?>
                        </h4>
                    </div>
                    <div class="panel-body" id="main-body">
                        <?php echo $view;?>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; <?php echo date('Y') ?> <a href="#">Daqu</a>.</strong> All rights reserved.
        </footer>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
