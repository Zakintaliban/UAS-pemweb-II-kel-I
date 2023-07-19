<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Taruna</h4>
                            <a class="btn btn-primary mr-2" href="<?php echo base_url('taruna/create'); ?>">Add New Taruna</a>
                            <div class="table-responsive">
                                <table class="table table-hover">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Nomor Taruna</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Program Studi</th>
										<th>Action</th>
									</tr>
								</thead>
                                    <tbody>
									<?php foreach ($taruna as $t): ?>
										<tr>
											<td><?php echo $t->ID; ?></td>
											<td><?php echo $t->Nama; ?></td>
											<td><?php echo $t->Nomor_Taruna; ?></td>
											<td><?php echo $t->Tempat_Lahir; ?></td>
											<td><?php echo $t->Tanggal_Lahir; ?></td>
											<td><?php echo $t->Program_Studi; ?></td>
											<td>
												<a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('taruna/show/' . $t->ID); ?>">Show</a>
												<a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('taruna/edit/' . $t->ID); ?>">Edit</a>
												<a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('taruna/delete/' . $t->ID); ?>">Delete</a>
											</td>
										</tr>
									<?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
