<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-pencil-square-o"></i> Form Tambah RW</h1>
  </div>
  <div>
    <ul class="breadcrumb">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li><a href="<?php echo base_url('Data_RW'); ?>">Data RT</a></li>
      <li><a href="#">Form Tambah RW</a></li>
    </ul>
  </div>
</div>
<div class="col-md-12">
    <div class="card">
      <div class="row">
        <div class="col-lg-12">
          <div class="well bs-component">
            
            <form class="form-horizontal" method="post" action="<?php echo base_url('Data_RW/insert'); ?>">
            <input type="hidden" name="rw_id" value="<?php echo @$list[0]['rw_id']; ?>">
              <fieldset>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Nama RW</label>
                  <div class="col-lg-6">
                    <input class="form-control" name="rw_nama" type="text" placeholder="Nama RW" value="<?php echo @$list[0]['rw_nama']; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">No RW</label>
                  <div class="col-lg-6">
                    <input class="form-control" name="rw_no" type="text" placeholder="Nomor RW" value="<?php echo @$list[0]['rw_no']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="select3">Kecamatan</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="kecamatan" name="kecamatan_id">
                     	<option></option>
              						<?php foreach ($dropkecamatan as $key => $value): ?>
              						<option value="<?php echo $value['kecamatan_id'] ?>" <?php echo isset($list[0]['kecamatan_id'])&&$value['kecamatan_id']==$list[0]['kecamatan_id']?'selected':'' ?>> <?php echo $value['kecamatan_nama']; ?></option>
              						<?php endforeach ?>
                  	</select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="select5">Kelurahan</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="kelurahan" name="kelurahan_id">
                     	<option></option>
						
                  	</select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                  </div>
                </div>
              </fieldset>
            </form>

          </div>
        </div>
        
      </div>
    </div>
  </div>
<?php
	$this->load->view('Footer');
?>


<script type="text/javascript">
$('#kecamatan').change(function(){
	$.ajax({
		url: 'json_kecamatan',
		data:{"id":$(this).val()},
		success:function(data){
			$('#kelurahan').empty();
				$.each(data, function(index,ob){
					console.log(ob);
					$('#kelurahan').append('<option value="'+ob.kelurahan_id+'">'+ob.kelurahan_nama+'</option>');
				});



		}
	});
});

$(document).ready(function(){
	$('#kelurahan').trigger('change');
})

</script>

