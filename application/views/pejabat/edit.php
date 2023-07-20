<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Edit Pejabat</h4>
			<form class="form-sample" action="<?php echo base_url('pejabat/update/' . $pejabat->ID); ?>" method="post">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $pejabat->Nama; ?>">
					<?php echo form_error('nama'); ?>
				</div>
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="text" id="nip" name="nip" class="form-control" value="<?php echo $pejabat->NIP; ?>">
					<?php echo form_error('nip'); ?>
				</div>
				<div class="form-group">
					<label for="golongan">Golongan</label>
					<input type="text" id="golongan" name="golongan" class="form-control" value="<?php echo $pejabat->Golongan; ?>">
					<?php echo form_error('golongan'); ?>
				</div>
				<div class="form-group">
					<label for="jabatan">Jabatan</label>
					<input type="text" id="jabatan" name="jabatan" class="form-control" value="<?php echo $pejabat->Jabatan; ?>">
					<?php echo form_error('jabatan'); ?>
				</div>
				<input type="submit" class="btn btn-primary mr-2" value="Update Pejabat">
				<a href="<?php echo base_url('pejabat'); ?>" class="btn btn-light">Cancel</a>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
