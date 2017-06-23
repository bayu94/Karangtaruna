<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Halaman Utama</h1>
  </div>
  <div>
    <ul class="breadcrumb">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li><a href="#">Halaman Utama</a></li>
    </ul>
  </div>
</div>
<div class="row">
	<div class="col-md-4">
        <div class="widget-small primary"><i class="icon fa fa-files-o fa-3x"></i>
          <div class="info">
            <h4>Agenda Masuk</h4>
            <p><b><?php echo $semua[0]['numrows']; ?></b></p>
          </div>
        </div>
     </div>
     <div class="col-md-4">
        <div class="widget-small info"><i class="icon fa fa-files-o fa-3x"></i>
          <div class="info">
            <h4>Agenda Di Persetujui</h4>
            <p><b><?php echo $AgendaSetuju[0]['setuju']; ?></b></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
          <div class="info">
            <h4>Agenda Tidak Di Persetujui</h4>
            <p><b><?php echo $AgendaTidakSetuju[0]['TidakSetuju']; ?></b></p>
          </div>
        </div>
      </div>

  <div class="col-md-12">
    <div class="card">
      <div class="row">
        <div class="row">
          <div class="col-xs-12">
              <h2 class="page-header"><i class="fa fa-book"></i> Data Agenda Yang Telah di Setujui</h2>
            </div>
          </div>

        <!--  <?php
          var_dump($AgendaSetuju);
          echo $this->db->last_query();
         ?> -->

                    <table class="table table-hover table-bordered" id="sampleTable">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Judul Agenda</th>
                                  <th>Tema Agenda</th>
                                  <th>Tanggal</th>
                                  <th>Status</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                    $no = 0; 
                    foreach ($list as $key => $value): 
                    // var_dump($value);
                    // die();
          ?>
                    <tr>
                      <td><?php echo $key+1; ?></td>
                      <td><?php echo $value['pesan_judul']; ?></td>
                      <td><?php echo $value['pesan_tema']; ?></td>
                      <td><?php echo date("Y-m-d",strtotime($value['tanggal'])); ?></td>
                      <td><?php echo $value['keterangan']; ?></td>
                      <td><a href="<?php echo base_url('Agenda/isipesan/'.$value['pesan_id']); ?>">Lihat Agenda</a></td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>


      </div>
    </div>
  </div>
</div>

<?php
	$this->load->view('Footer');
?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/sweetalert.min.js"></script>