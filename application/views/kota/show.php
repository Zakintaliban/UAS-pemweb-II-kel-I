<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kota Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <p class="font-weight-bold">Kode Kota:</p>
                                <p class="font-weight-bold">Nama:</p>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address class="text-primary">
                                <p class="font-weight-bold">
                                    <?php echo $kota->Kode_Kota; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $kota->Nama; ?>
                                </p>
                            </address>
                        </div>
                    </div>
                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('kota/edit/' . $kota->ID); ?>">Edit</a>
                    <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('kota/delete/' . $kota->ID); ?>">Delete</a>
                </div>
            </div>
        </div>

        <?php $this->load->view('footer'); ?>