<?php $this->load->view('nav-meta') ?>
<?php $this->load->view('sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Santri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Santri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
							<a href="<?php echo base_url('auth/create_user') ?>">
								<button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah Data</button>
							</a>
							<hr>
							<?php echo $message ?>
							<div class="table-responsive no-padding">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No.</th>
											<th>NIS</th>
											<th>Nama</th>
											<th>E-Mail</th>
											<th>No Telp</th>
											<th>Kelas</th>
											<th>Alamat</th>
											<th>Last Login</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $start = 0; foreach ($users as $row): ?>
										<tr>
											<td><?php echo ++$start ?></td>
											<td><?php echo $row->username ?></td>
											<td><?php echo $row->name ?></td>
											<td><?php echo $row->email ?></td>
											<td><?php echo $row->phone ?></td>
											<td><?php echo $row->nama_kelas ?></td>
											<td><?php echo $row->address ?></td>
											<td><?php if(!empty($row->last_login)){echo date("Y-m-d H:i:s", $row->last_login);} ?></td>
											<td>
												<?php
													echo anchor(site_url('auth/edit_user/'.$row->id), '<i class="fas fa-user-edit"></i>', 'title="Edit", class="btn btn-block btn-warning btn-xs"'); echo ' ';
													echo anchor(site_url('auth/delete_user/'.$row->id), '<i class="fas fa-user-times"></i>', 'title="Hapus", class="btn btn-block btn-danger btn-xs", onclick="javascript: return confirm(\'Apakah Anda yakin?\')"'); echo ' ';
												?>
											</td>
										</tr>	
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
