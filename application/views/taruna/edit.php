<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Edit Taruna</h4>
			<form class="form-sample" action="<?php echo base_url('taruna/update/' . $taruna->ID); ?>" method="post">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" id="nama" name="nama" class="form-control" value="<?php echo $taruna->Nama; ?>">
					<?php echo form_error('nama'); ?>
				</div>
				<div class="form-group">
					<label for="nomor_taruna">Nomor Taruna</label>
					<input type="text" id="nomor_taruna" name="nomor_taruna" class="form-control" value="<?php echo $taruna->Nomor_Taruna; ?>">
					<?php echo form_error('nomor_taruna'); ?>
				</div>
				<div class="form-group">
					<label for="tempat_lahir">Tempat Lahir</label>
					<select class="form-control" id="tempat_lahir" name="tempat_lahir">
						<?php foreach ($kota as $kt) : ?>
							<option value="<?php echo $kt->ID; ?>" <?php if ($taruna->Tempat_Lahir == $kt->ID) echo 'selected'; ?>><?php echo $kt->Nama; ?></option>
						<?php endforeach; ?>
					</select>
					<?php echo form_error('tempat_lahir'); ?>
				</div>
				<div class="form-group">
					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?php echo $taruna->Tanggal_Lahir; ?>">
					<?php echo form_error('tanggal_lahir'); ?>
				</div>
				<div class="form-group">
					<label for="program_studi">Program Studi</label>
					<select class="form-control" id="program_studi" name="program_studi">
						<?php foreach ($program_studi as $ps) : ?>
							<option value="<?php echo $ps->ID; ?>" <?php if ($taruna->Program_Studi == $ps->ID) echo 'selected'; ?>><?php echo $ps->Nama; ?></option>
						<?php endforeach; ?>
					</select>
					<?php echo form_error('program_studi'); ?>
				</div>
				<input type="submit" class="btn btn-primary mr-2" value="Update Taruna">
				<a href="<?php echo base_url('taruna'); ?>" class="btn btn-light">Cancel</a>
			</form>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
