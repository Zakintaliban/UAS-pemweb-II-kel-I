<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
	<div class="content-wrapper">

		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">List of Transkrip Nilai</h4>
					<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('transkripnilai/create'); ?>">Add New Transkrip Nilai</a>
					<div class="table-responsive">
					<table id="order-listing" class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Taruna</th>
									<th>Nomor Ijazah</th>
									<th>Program Studi</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($transkrip_nilai as $tn) : ?>
									<tr>
										<td><?php echo $tn->ID; ?></td>
										<td>
											<?php foreach ($taruna as $tar) : ?>
												<?php $nama_taruna =  ($tn->Taruna == $tar->ID) ? $tar->Nama : "";
												echo $nama_taruna ?>
											<?php endforeach; ?>
										</td>
										<td>
											<?php foreach ($ijazah as $i) : ?>
												<?php $nomor_ijazah =  ($tn->Ijazah == $i->ID) ? $i->Nomor_Ijazah : "";
												echo $nomor_ijazah ?>
											<?php endforeach; ?>
										</td>
										<td>
											<?php foreach ($program_studi as $ps) : ?>
												<?php $nama_ps =  ($tn->Program_Studi == $ps->ID) ? $ps->Nama : "";
												echo $nama_ps ?>
											<?php endforeach; ?>
										</td>
										<td>
											<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('transkripnilai/show/' . $tn->ID); ?>">Show</a>
											<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('transkripnilai/update/' . $tn->ID); ?>">Edit</a>
											<a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $tn->ID; ?>)">Delete</a>
											<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('transkripnilai/print/' . $tn->ID); ?>">Print</a>
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
							url: "<?php echo base_url('transkripnilai/delete/'); ?>" + id,
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

</body>

</html>
