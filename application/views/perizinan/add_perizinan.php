<?php $this->load->view('nav-meta') ?>
<?php $this->load->view('sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Perizinan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Perizinan</li>
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
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
				<?php echo form_open_multipart(uri_string()) ?>
                <div class="card-body">
				<?php echo validation_errors() ?>
				<?php if ($this->session->flashdata('message')) { echo $this->session->flashdata('message'); } ?>
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="NIS">Kelas Madin</label>
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
								<label>Santri Putra/Putri</label>
								<?php echo form_dropdown('', $g_santri, '', $santri) ?>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<?php echo form_textarea($address) ?>
							</div>
						</div>
					</div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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

</body>
</html>
