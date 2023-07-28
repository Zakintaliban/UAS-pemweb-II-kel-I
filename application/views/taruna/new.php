<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
	<div class="content-wrapper">

		<div class="col-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Add New Taruna</h4>
					<form class="form-sample" action="<?php echo base_url('taruna/store'); ?>" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" name="nama" class="form-control">
							<?php echo form_error('nama'); ?>
						</div>
						<div class="form-group">
							<label for="nomor_taruna">Nomor Taruna</label>
							<input type="text" id="nomor_taruna" name="nomor_taruna" class="form-control">
							<?php echo form_error('nomor_taruna'); ?>
						</div>
						<div class="form-group">
							<label for="tempat_lahir">Tempat Lahir</label>
							<select class="form-control" id="tempat_lahir" name="tempat_lahir">
								<?php foreach ($kota as $kt) : ?>
									<option value="<?php echo $kt->ID; ?>"><?php echo $kt->Nama; ?></option>
								<?php endforeach; ?>
							</select>
							<?php echo form_error('tempat_lahir'); ?>
						</div>
						<div class="form-group">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
							<?php echo form_error('tanggal_lahir'); ?>
						</div>
						<div class="form-group">
							<label for="program_studi">Program Studi</label>
							<select class="form-control" id="program_studi" name="program_studi">
								<?php foreach ($program_studi as $ps) : ?>
									<option value="<?php echo $ps->ID; ?>"><?php echo $ps->Nama; ?></option>
								<?php endforeach; ?>
							</select>
							<?php echo form_error('program_studi'); ?>
						</div>
						<div class="form-group">
							<label for="foto">Foto</label>
							<div class="custom-file">
								<input style="cursor: pointer" type="file" class="custom-file-input" id="foto" name="foto" accept="image/png, image/jpeg, image/gif">
								<label style="cursor: pointer" class="custom-file-label" for="foto">Choose file (max: 2mb)</label>
							</div>
							<?php if (isset($error)) {
								echo $error;
							} ?>
							<img id="imgPreview" alt="your image" style="display: none;" />
						</div>
						<input type="submit" class="btn btn-primary mr-2" value="Add Taruna">
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

		</body>

</html>