<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-users"></i> Data RW</h1>
    <ul class="breadcrumb side">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li class="active"><a href="#">Data RW</a></li>
    </ul>
  </div>
  <div>
  	<a class="btn btn-primary btn-flat" href="<?php echo base_url('Data_RW/form'); ?>"><i class="fa fa-lg fa-plus"></i></a>
  </div>
</div>

<div class="col-md-12">
    <div class="card">
      <div class="row">
        <div class="col-lg-12">
          <div class="well bs-component">
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama RW</th>
                      <th>No RW</th>
                      <th>Kecamatan</th>
                      <th>Kelurahan</th>
                      <th></th>
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
                      <td><?php echo $value['rw_nama']; ?></td>
                      <td><?php echo $value['rw_no']; ?></td>
                      <td><?php echo $value['kecamatan_nama']; ?></td>
                      <td><?php echo $value['kelurahan_nama']; ?></td>
                      <td>
                      	<a class="btn btn-primary btn-flat" href="<?php echo base_url('Data_RW/form/'.$value['rw_id']); ?>"><i class="fa fa-lg fa-refresh"></i></a>
                      	<a class="btn btn-warning btn-flat demoSwal" data-id="<?php echo $value["rw_id"] ?>"><i class="fa fa-lg fa-trash"></i></a>

                      </td>
                    </tr>
                   	<?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

          </div>
        </div>
        
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
     <script type="text/javascript">
      
      $('.demoSwal').click(function(){
        var id = $(this).data("id");
      	swal({
      		title: "Apakah Anda Yakin?",
      		text: "Anda Tidak Bisa Mengembalikan Data ini kembali ",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Ya, Hapus ini!",
      		cancelButtonText: "Tidak, Batalkan!",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Terhapus!", "Data Anda Berhasil di Hapus", "success");
            
      			window.location.href = "<?php echo base_url('Data_RW/delete/'); ?>"+id;
      		} else {
      			swal("Dibatalkan", "Data Anda Aman", "error");
      		}
      	});
      });
    </script>>