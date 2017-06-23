<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-pencil-square-o"></i> Form Tambah Kecamatan</h1>
  </div>
  <div>
    <ul class="breadcrumb">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li><a href="<?php echo base_url('Pengguna'); ?>">Data Kecamatan</a></li>
      <li><a href="#">Form Tambah Kecamatan</a></li>
    </ul>
  </div>
</div>
<div class="col-md-12">
    <div class="card">
      <div class="row">
        <div class="col-lg-12">
          <div class="well bs-component">
            
            <form class="form-horizontal" method="post" action="<?php echo base_url('Data_kecamatan/insert'); ?>">
            <input type="hidden" name="kecamatan_id" value="<?php echo @$list[0]['kecamatan_id']; ?>">
              <fieldset>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Nama Kecamatan</label>
                  <div class="col-lg-6">
                    <input class="form-control" name="kecamatan_nama" type="text" placeholder="Nama kecamatan" value="<?php echo @$list[0]['kecamatan_nama']; ?>">
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

