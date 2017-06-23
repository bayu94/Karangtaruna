<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-pencil-square-o"></i> Form Tambah Pengguna</h1>
  </div>
  <div>
    <ul class="breadcrumb">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li><a href="<?php echo base_url('Pengguna'); ?>">Data Pengguna</a></li>
      <li><a href="#">Form Tambah Pengguna</a></li>
    </ul>
  </div>
</div>
<div class="col-md-12">
    <div class="card">
      <div class="row">
        <div class="col-lg-12">
          <div class="well bs-component">
            
            <form class="form-horizontal" method="post" action="<?php echo base_url('Pengguna/insert'); ?>">
            <input type="hidden" name="user_id" value="<?php echo @$list[0]['user_id']; ?>">
              <fieldset>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Nama</label>
                  <div class="col-lg-6">
                    <input class="form-control" name="user_nama" id="inputEmail" type="text" placeholder="Nama" value="<?php echo @$list[0]['user_nama']; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Password</label>
                  <div class="col-lg-6">
                    <input class="form-control" name="user_pass" id="inputEmail" type="password" placeholder="Password" value="<?php echo @$list[0]['user_pass']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="select">Jenis Kelamin</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="select" name="user_jk">
                      <option value="L">Laki Laki</option>
                      <option value="P">Perempuan</option>
                  	</select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-2 control-label" for="select2">Level</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="select2" name="user_level">
                      <option value="1">Management</option>
                      <option value="2">Anggota</option>
                  	</select>
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
                  <label class="col-lg-2 control-label" for="select6">No Rw</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="rw" name="rw_id">
                     	<option></option>
						            
                  	</select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="select7">No Rt</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="rt" name="rt_id">
                     	<option></option>
						            
                  	</select>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-lg-2 control-label" for="select2">Status</label>
                  <div class="col-lg-6">
                    <select class="form-control" id="select2" name="status">
                      <option></option>
                      <option value="1">Ketua</option>
                      <option value="2">Sekertaris</option>
                      <option value="3">Ketua Jaksel</option>
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
      $('#rw').empty();
      $('#rt').empty();
        $.each(data, function(index,ob){
          console.log(ob);
          $('#kelurahan').append('<option value="'+ob.kelurahan_id+'">'+ob.kelurahan_nama+'</option>');
        });
            $('#kelurahan').trigger('change');
    }
  });
});

$('#kelurahan').change(function(){
  $.ajax({
    url: 'json_kelurahan',
    data:{"id":$(this).val()},
    success:function(data){
      $('#rw').empty();
        $.each(data, function(index,obj){
          $('#rw').append('<option value="'+obj.rw_id+'">'+obj.rw_no+'</option>');
        });

        $('#rw').trigger('change');

    }
  });
});

$('#rw').change(function(){
  $.ajax({
    url: 'json_rw',
    data:{"id":$(this).val()},
    success:function(data){
      $('#rt').empty();
        $.each(data, function(index,obh){
          $('#rt').append('<option value="'+obh.rt_id+'">'+obh.rt_no+'</option>');
        });

        $('#rt').trigger('change');
    }
  });
});


</script>
