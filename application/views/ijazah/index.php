<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<style>
	@media print {
		@page {
			size: Legal landscape;
			margin: 0;
		}

		body {
			font-family: 'Bookman Old Style', serif;
			font-size: 11pt;
			margin: 0;
			padding: 0;
		}

		h1 {
			font-size: 26pt;
		}

		h2 {
			font-family: 'Calibri', sans-serif;
			font-size: 11pt;
		}

		.date {
			font-family: 'Bookman Old Style', serif;
			font-size: 11pt;
		}
	}
</style>
<div class="main-panel">
	<div id="printContent" style="display: none;"></div>
	<div class="content-wrapper">
		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">List of Ijazah</h4>
					<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('ijazah/create'); ?>">Add New Ijazah</a>
					<div class="table-responsive">
						<table id="order-listing" class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Taruna</th>
									<th>Program Studi</th>
									<th>Tanggal Ijazah</th>
									<th>Tanggal Pengesahan</th>
									<th>Gelar Akademik</th>
									<th>Nomor SK</th>
									<th>Wakil Direktur</th>
									<th>Direktur</th>
									<th>Nomor Ijazah</th>
									<th>Nomor Seri</th>
									<th>Tanggal Yudisium</th>
									<th>Judul KKW</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($ijazah as $i) : ?>
									<tr>
										<td><?php echo $i->ID; ?></td>
										<td><?php echo $i->Taruna_Name; ?></td>
										<td><?php echo $i->Program_Studi_Name; ?></td>
										<td><?php echo $i->Tanggal_Ijazah; ?></td>
										<td><?php echo $i->Tanggal_Pengesahan; ?></td>
										<td><?php echo $i->Gelar_Akademik; ?></td>
										<td><?php echo $i->Nomor_SK; ?></td>
										<td><?php echo $i->Wakil_Direktur_Name; ?></td>
										<td><?php echo $i->Direktur_Name; ?></td>
										<td><?php echo $i->Nomor_Ijazah; ?></td>
										<td><?php echo $i->Nomor_Seri; ?></td>
										<td><?php echo $i->Tanggal_Yudisium; ?></td>
										<td><?php echo $i->Judul_KKW; ?></td>
										<td>
											<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('ijazah/show/' . $i->ID); ?>">Show</a>
											<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('ijazah/edit/' . $i->ID); ?>">Edit</a>
											<a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $i->ID; ?>)">Delete</a>
											<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('ijazah/print/' . $i->ID); ?>">Print</a>
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
							url: "<?php echo base_url('ijazah/delete/'); ?>" + id,
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