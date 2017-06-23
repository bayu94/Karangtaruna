<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-pencil-square-o"></i> Form Tambah Kelurahan</h1>
  </div>
  <div>
    <ul class="breadcrumb">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li><a href="<?php echo base_url('Data_kelurahan'); ?>">Data Kelurahan</a></li>
      <li><a href="#">Form Tambah Kelurahan</a></li>
    </ul>
  </div>
</div>
<div class="col-md-12">
    <div class="card">
      <div class="row">
        <div class="col-lg-12">
          <div class="well bs-component">
            
            <form class="form-horizontal" method="post" action="<?php echo base_url('Data_kelurahan/insert'); ?>">
            <input type="hidden" name="kelurahan_id" value="<?php echo @$list[0]['kelurahan_id']; ?>">
              <fieldset>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Nama Kelurahan</label>
                  <div class="col-lg-6">
                    <input class="form-control" name="kelurahan_nama" type="text" placeholder="Nama Kelurahan" value="<?php echo @$list[0]['kelurahan_nama']; ?>">
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
