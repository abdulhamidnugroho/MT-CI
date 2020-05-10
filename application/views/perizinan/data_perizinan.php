<?php $this->load->view('nav-meta') ?>
<?php $this->load->view('sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Perizinan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Perizinan</li>
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
							<a href="<?php echo base_url('perizinan/add_izin') ?>">
								<button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah Data</button>
							</a>
							<hr>
							<div class="table-responsive no-padding">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No.</th>
											<th>ID</th>
											<th>Nama</th>
											<th>Jenis</th>
											<th>Keterangan</th>
											<th>Waktu Mulai</th>
											<th>Waktu Akhir</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $start = 0; foreach ($perizinan as $row): ?>
										<tr>
											<td><?php echo ++$start ?></td>
											<td><?php echo $row->id_izin ?></td>
											<td><?php echo $row->name ?></td>
											<td><?php echo $row->jenis ?></td>
											<td><?php echo $row->keterangan ?></td>
											<td><?php echo $row->waktu_mulai ?></td>
											<td><?php echo $row->waktu_akhir ?></td>
											<td>
												<?php
													echo anchor(site_url('perizinan/edit_izin/'.$row->id_izin), '<i class="fas fa-user-edit"></i>', 'title="Edit", class="btn btn-block btn-warning btn-xs"'); echo ' ';
													echo anchor(site_url('perizinan/delete_izin/'.$row->id_izin), '<i class="fas fa-user-times"></i>', 'title="Hapus", class="btn btn-block btn-danger btn-xs", onclick="javascript: return confirm(\'Apakah Anda yakin?\')"'); echo ' ';
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
