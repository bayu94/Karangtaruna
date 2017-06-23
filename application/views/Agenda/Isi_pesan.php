<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
    <title>Vali Admin</title>
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
           
            
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title hidden-print">
          <div>
            <h1><i class="fa fa-book"></i> Agenda </h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li>Isi Agenda</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <section class="invoice">
                <div class="row">
                  <div class="col-xs-12">
                    <h2 class="page-header"><i class="fa fa-book"></i> Agenda <small class="pull-right">Tanggal: <?php echo date("d-m-Y",strtotime($list[0]['tanggal'])); ?></small></h2>
                  </div>
                </div>
              <!--   <?php
                	var_dump($list);
                ?> -->
                <div class="row invoice-info">
                  <div class="col-xs-4"><strong> From </strong>

                    <address>
                    	<table>
                    		<tr>
                    			<td>Nama</td>
                    			<td>:</td>
                    			<td><strong><?php echo $list[0]['user_nama']; ?></strong></td>
                    		</tr>
                    		<tr>
                    			<td>Kecamatan</td>
                    			<td>:</td>
                    			<td><strong><?php echo $list[0]['kecamatan_nama']; ?></strong></td>
                    		</tr>
                    		<tr>
                    			<td>Kelurahan</td>
                    			<td>:</td>
                    			<td><strong><?php echo $list[0]['kelurahan_nama']; ?></strong></td>
                    		</tr>
                    		<tr>
                    			<td>RW</td>
                    			<td>:</td>
                    			<td><strong><?php echo $list[0]['rw_no']; ?></strong></td>
                    		</tr>
                    		<tr>
                    			<td>RT</td>
                    			<td>:</td>
                    			<td><strong><?php echo $list[0]['rt_no']; ?></strong></td>
                    		</tr>
                    	</table>
                    </address>
                  </div>
                  <div class="col-xs-4">
                    <address>
                    	<table>
	                    	<tr>
	                    		<td>Judul Agenda</td>
	                    		<td>:</td>
	                    		<td><strong><?php echo $list[0]['pesan_judul']; ?></strong></td>
	                    	</tr>
	                    	<tr>
	                    		<td>Tema Agenda</td>
	                    		<td>:</td>
	                    		<td><strong><?php echo $list[0]['pesan_tema']; ?></strong></td>
	                    	</tr>
                    	</table>
                    </address>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-xs-12 table-responsive">
                    <?php echo $list[0]['pesan_isi'];	?>
                  </div>
                </div>
                <div class="row hidden-print mt-20">
                  <div class="col-xs-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script>
  </body>
</html>