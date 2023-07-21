<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
	<div class="content-wrapper">

		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">Pejabat Details</h2>
					<div class="row">
						<div class="col-md-3	">
							<div class="d-flex justify-content-between mb-1">
								<h4>Nama</h4>
								<p class="mb-0"><?php echo $pejabat->Nama; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>NIP</h4>
								<p class="mb-0"><?php echo $pejabat->NIP; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Golongan</h4>
								<p class="mb-0"><?php echo $pejabat->Golongan; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Jabatan</h4>
								<p class="mb-0"><?php echo $pejabat->Jabatan; ?></p>
							</div>
						</div>
					</div>
					<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('pejabat/edit/' . $pejabat->ID); ?>">Edit</a>
					<a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('pejabat/delete/' . $pejabat->ID); ?>">Delete</a>
				</div>
			</div>
		</div>

		<?php $this->load->view('footer'); ?>