<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
	<div class="content-wrapper">

		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">Taruna Details</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="d-flex justify-content-between mb-1">
								<h4>Nama</h4>
								<p class="mb-0"><?php echo $taruna->Nama; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Nomor Taruna</h4>
								<p class="mb-0"><?php echo $taruna->Nomor_Taruna; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Tempat Lahir</h4>
								<p class="mb-0"><?php echo $kota->Nama ?></p>

							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Tanggal Lahir</h4>
								<p class="mb-0"><?php echo $taruna->Tanggal_Lahir; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Program Studi</h4>
								<p class="mb-0"><?php echo $program_studi->Nama; ?></p>
							</div>

						</div>
					</div>
					<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('taruna/edit/' . $taruna->ID); ?>">Edit</a>
					<a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('taruna/delete/' . $taruna->ID); ?>">Delete</a>
				</div>
			</div>
		</div>

		<?php $this->load->view('footer'); ?>