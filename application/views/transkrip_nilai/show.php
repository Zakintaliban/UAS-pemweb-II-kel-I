<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
	<div class="content-wrapper">

		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">Transkrip Nilai Details</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="d-flex justify-content-between mb-1">
								<h4>Taruna</h4>
								<p class="mb-0"><?php echo $taruna->Nama; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Nomor Ijazah</h4>
								<p class="mb-0"><?php echo $ijazah->Nomor_Ijazah; ?></p>
							</div>
							<div class="d-flex justify-content-between mb-1">
								<h4>Program Studi</h4>
								<p class="mb-0"><?php echo $program_studi->Nama; ?></p>
							</div>
						</div>
					</div>
					<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('transkrip_nilai/print/' . $transkrip_nilai->ID); ?>">Print</a>
				</div>
			</div>
		</div>

		<?php $this->load->view('footer'); ?>