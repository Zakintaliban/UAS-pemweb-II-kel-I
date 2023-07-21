<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">List of Program Studi</h4>
			<a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('program_studi/create'); ?>">Add New Program Studi</a>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Program Pendidikan</th>
							<th>Akreditasi</th>
							<th>SK Akreditasi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($program_studi as $program) : ?>
							<tr>
								<td><?php echo $program->ID; ?></td>
								<td><?php echo $program->Nama; ?></td>
								<td><?php echo $program->Program_Pendidikan; ?></td>
								<td><?php echo $program->Akreditasi; ?></td>
								<td><?php echo $program->SK_Akreditasi; ?></td>
								<td>
									<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('program_studi/show/' . $program->ID); ?>">Show</a>
									<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('program_studi/edit/' . $program->ID); ?>">Edit</a>
									<a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('program_studi/delete/' . $program->ID); ?>">Delete</a>
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
