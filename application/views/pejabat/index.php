<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div class="main-panel">
	<div class="content-wrapper">
		<div class="grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">List of Pejabat</h4>
					<a class="btn btn-primary mr-2" href="<?php echo base_url('pejabat/create'); ?>">Add New Pejabat</a>
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama</th>
									<th>NIP</th>
									<th>Golongan</th>
									<th>Jabatan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pejabat as $p) : ?>
									<tr>
										<td><?php echo $p->ID; ?></td>
										<td><?php echo $p->Nama; ?></td>
										<td><?php echo $p->NIP; ?></td>
										<td><?php echo $p->Golongan; ?></td>
										<td><?php echo $p->Jabatan; ?></td>
										<td>
											<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('pejabat/show/' . $p->ID); ?>">Show</a>
											<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('pejabat/edit/' . $p->ID); ?>">Edit</a>
											<a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('pejabat/delete/' . $p->ID); ?>">Delete</a>
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