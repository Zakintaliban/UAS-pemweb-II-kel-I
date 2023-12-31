<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
	<div class="content-wrapper">

		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">Program Studi Details</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="d-flex justify-content-between mb-1">
								<h4>Nama</h4>
								<p class="mb-0"><?php echo $program_studi->Nama; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Program Pendidikan</h4>
								<p class="mb-0"><?php echo $program_studi->Program_Pendidikan; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Akreditasi</h4>
								<p class="mb-0"><?php echo $program_studi->Akreditasi; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>SK Akreditasi</h4>
								<p class="mb-0"><?php echo $program_studi->SK_Akreditasi; ?></p>
							</div>
						</div>
					</div>
					<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('programstudi/edit/' . $program_studi->ID); ?>">Edit</a>
					<a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $program_studi->ID; ?>)">Delete</a>
					<a href="<?php echo base_url('programstudi'); ?>" class="btn btn-light">Cancel</a>
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
							url: "<?php echo base_url('programstudi/delete/'); ?>" + id,
							type: "POST",
							data: {},
							success: function(response) {
								Swal.fire({
									title: 'Sukses',
									text: 'Data berhasil dihapus!',
									icon: 'success'
								});
								setTimeout(function() {
                                    window.location.replace('<?php echo base_url('programstudi'); ?>');
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

</body>

</html>
