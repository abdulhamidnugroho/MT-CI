<?php $this->load->view('nav-meta') ?>
<?php $this->load->view('sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Santri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Santri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
				<?php echo form_open_multipart(uri_string()) ?>
                <div class="card-body">
					<?php echo validation_errors() ?>
					<?php if ($this->session->flashdata('message')) { echo $this->session->flashdata('message'); } ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="NIS">Nomor Induk Santri</label>
								<?php echo form_input($username) ?>
							</div>
							<div class="form-group">
								<label>Password</label>
								<?php echo form_input($password) ?>
							</div>
							<div class="form-group">
								<label>Konfirmasi Password</label>
								<?php echo form_input($password_confirm) ?>
							</div>
							<div class="form-group">
								<label>E-Mail</label>
								<?php echo form_input($email) ?>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Lengkap</label>
								<?php echo form_input($name) ?>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Ayah</label>
								<?php echo form_input($nama_ayah) ?>
							</div>
							<div class="form-group">
								<label>Nama Ibu</label>
								<?php echo form_input($nama_ibu) ?>
							</div>
							<div class="form-group">
								<label>Kelas Madin</label>
								<?php echo form_dropdown('', $kelas, '', $kelas_madin) ?>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<?php echo form_textarea($address) ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="provinsi">Provinsi</label>
								<?php echo form_dropdown('', $provinsi, '', $provinsi_id) ?>
							</div>
							<div class="form-group">
								<label for="kota">Kabupaten / Kota</label>
								<?php echo form_dropdown('', array('' => '- Pilih Kota -'), '', $kota_id) ?>
							</div>
							<div class="form-group">
								<label for="kecamatan">Kecamatan</label>
								<?php echo form_dropdown('', array('' => '- Pilih Kecamatan -'), '', $kecamatan_id) ?>
							</div>
							<div class="form-group">
								<label>Kode Pos</label>
								<?php echo form_input($kode_pos) ?>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
								<?php echo form_input($phone) ?>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
									</div>
									<?php echo form_input($tgl_lahir) ?>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Foto Lama</label>
								<center><img src="<?php echo base_url('assets/images/user/').$user->photo.$user->photo_type ?>" alt="" height="150px"/></center>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Foto Baru</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="photo" id="photo" onchange="tampilkanPreview(this,'preview')"/>
										<label class="custom-file-label" >Choose file</label>
									</div>
								</div>
								<br><p><b>Preview :</b></p>
								<center><img id="preview" src="" alt="" height="150px"/></center>
							</div>
						</div>
					</div>
				</div>
				
                <!-- /.card-body -->
				<?php echo form_hidden('id', $user->id);?>
      			<?php echo form_hidden($csrf); ?>	
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				<?php echo form_close(); ?>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('footer') ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->load->view('js') ?>
<!-- InputMask -->
<script src="<?php echo base_url('assets/template/') ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/template/') ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		bsCustomFileInput.init();
	});
</script>

<script type="text/javascript">
	function tampilKota()
	{
	  provinsi_id = document.getElementById("provinsi_id").value;
	  $.ajax({
		  url:"<?php echo base_url();?>auth/pilih_kota/"+provinsi_id+"",
		  success: function(response){
		    $("#kota_id").html(response);
		  },
		  dataType:"html"
	  });
	  return false;
	}
</script>

<script type="text/javascript">
	function tampilKecamatan()
	{
	  kota_id = document.getElementById("kota_id").value;
	  $.ajax({
		  url:"<?php echo base_url();?>auth/pilih_kecamatan/"+kota_id+"",
		  success: function(response){
		    $("#kecamatan_id").html(response);
		  },
		  dataType:"html"
	  });
	  return false;
	}
</script>


<script type="text/javascript">
    function tampilkanPreview(photo,idpreview)
    { //membuat objek gambar
      var gb = photo.files;
      //loop untuk merender gambar
      for (var i = 0; i < gb.length; i++)
      { //bikin variabel
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview=document.getElementById(idpreview);
        var reader = new FileReader();
        if (gbPreview.type.match(imageType))
        { //jika tipe data sesuai
          preview.file = gbPreview;
          reader.onload = (function(element)
          {
            return function(e)
            {
              element.src = e.target.result;
            };
          })(preview);
          //membaca data URL gambar
          reader.readAsDataURL(gbPreview);
        }
          else
          { //jika tipe data tidak sesuai
            alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
          }
      }
    }
</script>
<script type="text/javascript">
	$(function()
	{
		$('#tgl_lahir').inputmask('yyyy/mm/dd', { placeholder:'yyyy/mm/dd'})
	});
	$(function()
	{
		$('#username').attr("readonly", true);
	})
</script>

</body>
</html>
