<?php $this->load->view('header'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mata Kuliah Details</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <p class="font-weight-bold">Kode:</p>
                                        <p class="font-weight-bold">Mata Kuliah:</p>
                                        <p class="font-weight-bold">SKS:</p>
                                        <p class="font-weight-bold">Nilai Angka:</p>
                                        <p class="font-weight-bold">Nilai Huruf:</p>
                                        <p class="font-weight-bold">Semester:</p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <address class="text-primary">
                                        <p class="font-weight-bold">
                                            <?php echo $matakuliah->Kode; ?>
                                        </p>
                                        <p class="font-weight-bold">
                                            <?php echo $matakuliah->Matakuliah; ?>
                                        </p>
                                        <p class="font-weight-bold">
                                            <?php echo $matakuliah->SKS; ?>
                                        </p>
                                        <p class="font-weight-bold">
                                            <?php echo $matakuliah->Nilai_Angka; ?>
                                        </p>
                                        <p class="font-weight-bold">
                                            <?php echo $matakuliah->Nilai_Huruf; ?>
                                        </p>
                                        <p class="font-weight-bold">
                                            <?php echo $matakuliah->Semester; ?>
                                        </p>
                                    </address>
                                </div>
                            </div>
                            <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('matakuliah/edit/' . $matakuliah->ID); ?>">Edit</a> |
                            <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('matakuliah/delete/' . $matakuliah->ID); ?>">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
