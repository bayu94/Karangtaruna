<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-file-text"></i> Data Agenda Yang Tidak Di Setujui</h1>
    <ul class="breadcrumb side">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li class="active"><a href="#">Data Agenda Yang Tidak DI Setujui</a></li>
    </ul>
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
                      <th>Judul Agenda</th>
                      <th>Tema Agenda</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th></th>
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
                      <td><?php echo $value['pesan_judul']; ?></td>
                      <td><?php echo $value['pesan_tema']; ?></td>
                      <td><?php echo date("Y-m-d",strtotime($value['tanggal'])); ?></td>
                      <td><?php echo $value['keterangan']; ?></td>
                      <td><a href="<?php echo base_url('Agenda/isipesan/'.$value['pesan_id']); ?>">Lihat Agenda</a></td>
                      <?php if ($this->session->userdata('status')!="3"): ?>
                        <td style="display: none"></td>
                      <?php else: ?>
                        <td>
                        <a class="btn btn-warning btn-flat AgenDel" data-id="<?php echo $value['pesan_id']; ?>" ><i class="fa fa-lg fa-trash"></i></a>
                        
                      </td>
                      <?php endif ?>
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

<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ubah status</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('AgendaJaksel/edit'); ?> " method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Status Agenda</label>
                    <div class="col-sm-8">
                        <select name="status" class="form-control" required="required">
                            <option value="2">Setujui</option>
                            <option value="3">Tidak Setuju</option>
                        </select>
                        <input type="hidden" name="pesan_id" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
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
      
      $('.AgenDel').click(function(){
      	var id = $(this).data("id");
      			// console.log($(this).data("id"));
      	
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
      			window.location.href = "<?php echo base_url('Agenda/delete/'); ?>"+id;
      		} else {
      			swal("Dibatalkan", "Data Anda Aman", "error");
      		}
      	});
      });
    </script>>

    <script type="text/javascript">
	$('.updatestatus').click(function() {
	    $('[name="pesan_id"]').val($(this).data('pesan'));
	});
	</script>
