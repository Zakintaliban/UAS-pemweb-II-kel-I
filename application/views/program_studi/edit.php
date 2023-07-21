<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Edit Program Studi</h4>
			<form class="form-sample" action="<?php echo base_url('program_studi/update/' . $program_studi->ID); ?>" method="post">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $program_studi->Nama; ?>">
					<?php echo form_error('nama'); ?>
				</div>
				<div class="form-group">
					<label for="program_pendidikan">Program Pendidikan</label>
					<select class="form-control" id="program_pendidikan" name="program_pendidikan">
						<option value="Diploma III" <?php if ($program_studi->Program_Pendidikan == 'Diploma III') echo 'selected="selected"'; ?>>Diploma III</option>
						<option value="Diploma IV" <?php if ($program_studi->Program_Pendidikan == 'Diploma IV') echo 'selected="selected"'; ?>>Diploma IV</option>
					</select>
					<?php echo form_error('program_pendidikan'); ?>
				</div>
				<div class="form-group">
					<label for="akreditasi">Akreditasi</label>
					<select class="form-control" id="akreditasi" name="akreditasi">
						<option value="Baik" <?php if ($program_studi->Akreditasi == 'Baik') echo 'selected="selected"'; ?>>Baik</option>
						<option value="Baik Sekali" <?php if ($program_studi->Akreditasi == 'Baik Sekali') echo 'selected="selected"'; ?>>Baik Sekali</option>
						<option value="Unggul" <?php if ($program_studi->Akreditasi == 'Unggul') echo 'selected="selected"'; ?>>Unggul</option>
					</select>
					<?php echo form_error('akreditasi'); ?>
				</div>
				<div class="form-group">
					<label for="sk_akreditasi">SK Akreditasi</label>
					<input type="text" id="sk_akreditasi" name="sk_akreditasi" class="form-control" value="<?php echo $program_studi->SK_Akreditasi; ?>">
					<?php echo form_error('sk_akreditasi'); ?>
				</div>
				<input type="submit" class="btn btn-primary mr-2" value="Update Program Studi">
				<a href="<?php echo base_url('program_studi'); ?>" class="btn btn-light">Cancel</a>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
