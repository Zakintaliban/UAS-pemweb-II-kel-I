<?php $this->load->view('header'); ?>

<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Add New Transkrip Nilai</h4>
			<form class="form-sample" action="<?php echo base_url('transkrip_nilai/store'); ?>" method="post">
				<div class="form-group">
					<label for="taruna">Taruna</label>
					<select class="form-control" id="taruna" name="taruna">
						<?php foreach ($taruna as $t): ?>
							<option value="<?php echo $t->ID; ?>"><?php echo $t->Nama; ?></option>
						<?php endforeach; ?>
					</select>
					<?php echo form_error('taruna'); ?>
				</div>
				<div class="form-group">
					<label for="ijazah">Ijazah</label>
					<select class="form-control" id="ijazah" name="ijazah">
						<?php foreach ($ijazah as $ij): ?>
							<option value="<?php echo $ij->ID; ?>"><?php echo $ij->Nomor_Ijazah; ?></option>
						<?php endforeach; ?>
					</select>
					<?php echo form_error('ijazah'); ?>
				</div>
				<div class="form-group">
					<label for="program_studi">Program Studi</label>
					<select class="form-control" id="program_studi" name="program_studi">
						<?php foreach ($program_studi as $ps): ?>
							<option value="<?php echo $ps->ID; ?>"><?php echo $ps->Nama; ?></option>
						<?php endforeach; ?>
					</select>
					<?php echo form_error('program_studi'); ?>
				</div>
				<input type="submit" class="btn btn-primary mr-2" value="Add Transkrip Nilai">
				<a href="<?php echo base_url('transkrip_nilai'); ?>" class="btn btn-light">Cancel</a>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
