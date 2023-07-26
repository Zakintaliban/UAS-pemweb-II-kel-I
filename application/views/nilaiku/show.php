<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nilai Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <p class="font-weight-bold">Taruna:</p>
                                <p class="font-weight-bold">Nilai Angka:</p>
                                <p class="font-weight-bold">Nilai Huruf:</p>
                                <p class="font-weight-bold">Mata Kuliah:</p>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address class="text-primary">
                                <p class="font-weight-bold">
                                    <?php echo $nilai->Taruna_Name; ?> <!-- Display Taruna name -->
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $nilai->Nilai_Angka; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $nilai->Nilai_Huruf; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $nilai->Matakuliah_Name; ?> <!-- Display Matakuliah name -->
                                </p>
                            </address>
                        </div>
                    </div>
                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('nilaiku/edit/' . $nilai->ID); ?>">Edit</a>
                    <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('nilaiku/delete/' . $nilai->ID); ?>">Delete</a>
                    <a href="<?php echo base_url('nilaiku'); ?>" class="btn btn-light">Cancel</a>
                </div>
            </div>
        </div>

        <?php $this->load->view('footer'); ?>