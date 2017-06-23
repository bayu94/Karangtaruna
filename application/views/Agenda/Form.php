<?php
if ($this->session->userdata('status')!="3") {
      $this->load->view('Header2');
    }else
$this->load->view('Header');
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-pencil-square-o"></i> Form Tambah Agenda</h1>
  </div>
  <div>
    <ul class="breadcrumb">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li><a href="<?php echo base_url('Agenda'); ?>">Data Agenda</a></li>
      <li><a href="#">Form Tambah Agenda</a></li>
    </ul>
  </div>
</div>
<div class="col-md-12">
    <div class="card">
      <div class="row">
        <div class="col-lg-12">
          <div class="well bs-component">
          	<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
			<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/styles.js"></script>
            
            <form class="form-horizontal" method="post" action="<?php echo base_url('Agenda/insert'); ?>">
            <input type="hidden" name="pesan_id" value="<?php echo @$list[0]['pesan_id']; ?>">
              <fieldset>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Judul Agenda</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="pesan_judul" type="text" placeholder="Jduul Agenda" value="<?php echo @$list[0]['pesan_judul']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Tema Agenda</label>
                  <div class="col-lg-8">
                    <input class="form-control" name="pesan_tema" type="text" placeholder="Tema Agenda" value="<?php echo @$list[0]['pesan_tema']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" for="inputEmail">Isi Agenda</label>
                  <div class="col-lg-8">
                   	<textarea class="ckeditor" placeholder="Isi Agenda" name="pesan_isi" rows="3"><?php echo @$list[0]['pesan_isi']; ?></textarea>
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

