<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
    <title>Karang Taruna Jaksel</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Karang Taruna</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
            <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i><?php echo $this->session->userdata('user_nama'); ?></i></a>
                
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="<?php echo base_url('Login/keluar'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="<?php echo base_url('Ketua_jaksel'); ?>"><i class="fa fa-dashboard"></i><span>Halaman Utama</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>Master Data</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('Pengguna'); ?>"><i class="fa fa-circle-o"></i> Data Pengguna</a></li>
                 <li><a href="<?php echo base_url('Data_kecamatan'); ?>"><i class="fa fa-circle-o"></i> Data Kecamatan</a></li>
                <li><a href="<?php echo base_url('Data_kelurahan'); ?>"><i class="fa fa-circle-o"></i> Data Kelurahan</a></li>
                <li><a href="<?php echo base_url('Data_RW'); ?>"><i class="fa fa-circle-o"></i> Data RW</a></li>
                <li><a href="<?php echo base_url('Data_RT'); ?>"><i class="fa fa-circle-o"></i> Data RT</a></li>
               
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Agenda</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('AgendaJaksel'); ?>"><i class="fa fa-circle-o"></i> Data Agenda</a></li>
                <li><a href="<?php echo base_url('AgendaJaksel/setuju'); ?>"><i class="fa fa-circle-o"></i> Agenda Sudah Di Persetujui</a></li>
                <li><a href="<?php echo base_url('AgendaJaksel/tidak_setuju'); ?>"><i class="fa fa-circle-o"></i> Agenda Tidak Di Persetujui</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
    <div class="content-wrapper">