<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Add New Program Studi</h4>
			<form class="form-sample" action="<?php echo base_url('program_studi/store'); ?>" method="post">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" id="nama" name="nama" class="form-control">
					<?php echo form_error('nama'); ?>
				</div>
				<div class="form-group">
					<label for="program_pendidikan">Program Pendidikan</label>
					<select class="form-control" id="program_pendidikan" name="program_pendidikan">
						<option value="Diploma III">Diploma III</option>
						<option value="Diploma IV">Diploma IV</option>
					</select>
					<?php echo form_error('program_pendidikan'); ?>
				</div>
				<div class="form-group">
					<label for="akreditasi">Akreditasi</label>
					<select class="form-control" id="akreditasi" name="akreditasi">
						<option value="Baik">Baik</option>
						<option value="Baik Sekali">Baik Sekali</option>
						<option value="Unggul">Unggul</option>
					</select>
					<?php echo form_error('akreditasi'); ?>
				</div>
				<div class="form-group">
					<label for="sk_akreditasi">SK Akreditasi</label>
					<input type="text" id="sk_akreditasi" name="sk_akreditasi" class="form-control">
					<?php echo form_error('sk_akreditasi'); ?>
				</div>
				<input type="submit" class="btn btn-primary mr-2" value="Add Program Studi">
				<a href="<?php echo base_url('program_studi'); ?>" class="btn btn-light">Cancel</a>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
