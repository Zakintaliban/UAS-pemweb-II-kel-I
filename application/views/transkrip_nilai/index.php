<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>


<div class="grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">List of Transkrip Nilai</h4>
			<a class="btn btn-primary mr-2" href="<?php echo base_url('transkrip_nilai/create'); ?>">Add New Transkrip Nilai</a>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Taruna</th>
							<th>Nomor Ijazah</th>
							<th>Program Studi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($transkrip_nilai as $tn) : ?>
							<tr>
								<td><?php echo $tn->ID; ?></td>
								<td>
									<?php foreach ($taruna as $tar) : ?>
										<?php $nama_taruna =  ($tn->Taruna == $tar->ID) ? $tar->Nama : "";
										echo $nama_taruna ?>
									<?php endforeach; ?>
								</td>
								<td>
									<?php foreach ($ijazah as $i) : ?>
										<?php $nomor_ijazah =  ($tn->Ijazah == $i->ID) ? $i->Nomor_Ijazah : "";
										echo $nomor_ijazah ?>
									<?php endforeach; ?>
								</td>
								<td>
									<?php foreach ($program_studi as $ps) : ?>
										<?php $nama_ps =  ($tn->Program_Studi == $ps->ID) ? $ps->Nama : "";
										echo $nama_ps ?>
									<?php endforeach; ?>
								</td>
								<td>
									<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('transkrip_nilai/show/' . $tn->ID); ?>">Show</a>
									<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('transkrip_nilai/update/' . $tn->ID); ?>">Edit</a>
									<a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('transkrip_nilai/delete/' . $tn->ID); ?>">Delete</a>
									<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('transkrip_nilai/print/' . $tn->ID); ?>">Print</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?>
