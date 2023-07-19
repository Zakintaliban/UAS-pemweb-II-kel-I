<?php $this->load->view('header'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Program Studi Details</h2>
                            <div class="row">
                                <div class="col-md-3">
									<div class="d-flex justify-content-between mb-1">
										<h4>Nama</h4>
										<p class="mb-0"><?php echo $program_studi->Nama; ?></p>
									</div>
									<div class="d-flex justify-content-between mb-1">
										<h4>Program Pendidikan</h4>
										<p class="mb-0"><?php echo $program_studi->Program_Pendidikan; ?></p>
									</div>
									<div class="d-flex justify-content-between mb-1">
										<h4>Akreditasi</h4>
										<p class="mb-0"><?php echo $program_studi->Akreditasi; ?></p>
									</div>
									<div class="d-flex justify-content-between mb-1">
										<h4>SK Akreditasi</h4>
										<p class="mb-0"><?php echo $program_studi->SK_Akreditasi; ?></p>
									</div>
                                </div>
                            </div>
                            <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('program_studi/edit/' . $program_studi->ID); ?>">Edit</a>
                            <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('program_studi/delete/' . $program_studi->ID); ?>">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
