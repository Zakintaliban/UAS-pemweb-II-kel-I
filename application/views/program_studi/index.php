<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>


<div class="main-panel">
	<div class="content-wrapper">
		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">List of Program Studi</h4>
					<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('program_studi/create'); ?>">Add New Program Studi</a>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>Program Pendidikan</th>
									<th>Akreditasi</th>
									<th>SK Akreditasi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($program_studi as $program) : ?>
									<tr>
										<td><?php echo $program->ID; ?></td>
										<td><?php echo $program->Nama; ?></td>
										<td><?php echo $program->Program_Pendidikan; ?></td>
										<td><?php echo $program->Akreditasi; ?></td>
										<td><?php echo $program->SK_Akreditasi; ?></td>
										<td>
											<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('program_studi/show/' . $program->ID); ?>">Show</a>
											<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('program_studi/edit/' . $program->ID); ?>">Edit</a>
											<a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $program->ID; ?>)">Delete</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('footer'); ?>

		<!-- SweetAlert CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

		<!-- jQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<!-- SweetAlert JS -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<script>
			function deleteData(id) {
				Swal.fire({
					title: 'Konfirmasi',
					text: 'Apakah Anda yakin ingin menghapus data ini?',
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, hapus!',
					cancelButtonText: 'Batal'
				}).then((result) => {
					if (result.isConfirmed) {
						$.ajax({
							url: "<?php echo base_url('program_studi/delete/'); ?>" + id,
							type: "POST",
							data: {},
							success: function(response) {
								Swal.fire({
									title: 'Sukses',
									text: 'Data berhasil dihapus!',
									icon: 'success'
								});
								setTimeout(function() {
									location.reload();
								}, 1500);
							},
							error: function(jqXHR, textStatus, errorThrown) {
								Swal.fire({
									title: 'Error',
									text: 'Terjadi kesalahan saat menghapus data.',
									icon: 'error'
								});
							}
						});
					}
				});
			}
		</script>
