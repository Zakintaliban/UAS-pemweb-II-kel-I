<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div class="main-panel">
	<div class="content-wrapper">
		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">List of Pejabat</h4>
					<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('pejabat/create'); ?>">Add New Pejabat</a>
					<div class="table-responsive">
						<table id="order-listing" class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>NIP</th>
									<th>Golongan</th>
									<th>Jabatan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pejabat as $p) : ?>
									<tr>
										<td><?php echo $p->ID; ?></td>
										<td><?php echo $p->Nama; ?></td>
										<td><?php echo $p->NIP; ?></td>
										<td><?php echo $p->Golongan; ?></td>
										<td><?php echo $p->Jabatan; ?></td>
										<td>
											<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('pejabat/show/' . $p->ID); ?>">Show</a>
											<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('pejabat/edit/' . $p->ID); ?>">Edit</a>
											<a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $p->ID; ?>)">Delete</a>
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
							url: "<?php echo base_url('pejabat/delete/'); ?>" + id,
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
