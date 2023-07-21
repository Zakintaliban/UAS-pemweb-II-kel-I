<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="col-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Edit Taruna</h4>
			<form class="form-sample" action="<?php echo base_url('taruna/update/' . $taruna->ID); ?>" method="post" enctype="multipart/form-data">
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
				<div class="form-group">
            <label for="foto">Foto</label>
            <div class="custom-file">
                <input style="cursor: pointer" type="file" class="custom-file-input" id="foto" name="foto" accept="image/png, image/jpeg, image/gif">
                <label style="cursor: pointer" class="custom-file-label" for="foto">Choose file</label>
            </div>
            <?php if (isset($error)) { echo $error; } ?>
            <img id="imgPreview" src="<?php echo $imageData ?>" alt="your image" <?php echo $imageData ? '' : 'style="display: none;"' ?>/>
        </div>
				<input type="submit" class="btn btn-primary mr-2" value="Update Taruna">
				<a href="<?php echo base_url('taruna'); ?>" class="btn btn-light">Cancel</a>
			</form>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					var imgPreview = document.getElementById('imgPreview');
					imgPreview.src = e.target.result;
					imgPreview.style.display = "block";
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		document.getElementById('foto').addEventListener('change', function() {
			readURL(this);
		});
	});
</script>
<?php $this->load->view('footer'); ?>
