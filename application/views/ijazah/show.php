<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ijazah Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <p class="font-weight-bold">Taruna:</p>
                                <p class="font-weight-bold">Program Studi:</p>
                                <p class="font-weight-bold">Tanggal Ijazah:</p>
                                <p class="font-weight-bold">Tanggal Pengesahan:</p>
                                <p class="font-weight-bold">Gelar Akademik:</p>
                                <p class="font-weight-bold">Nomor SK:</p>
                                <p class="font-weight-bold">Wakil Direktur:</p>
                                <p class="font-weight-bold">Direktur:</p>
                                <p class="font-weight-bold">Nomor Ijazah:</p>
                                <p class="font-weight-bold">Nomor Seri:</p>
                                <p class="font-weight-bold">Tanggal Yudisium:</p>
                                <p class="font-weight-bold">Judul KKW:</p>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address class="text-primary">
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Taruna_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Program_Studi_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Tanggal_Ijazah; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Tanggal_Pengesahan; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Gelar_Akademik; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Nomor_SK; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Wakil_Direktur_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Direktur_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Nomor_Ijazah; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Nomor_Seri; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Tanggal_Yudisium; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Judul_KKW; ?>
                                </p>
                            </address>
                        </div>
                    </div>
                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('ijazah/edit/' . $ijazah->ID); ?>">Edit</a>
                    <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('ijazah/delete/' . $ijazah->ID); ?>">Delete</a>
                    <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('ijazah/print/' . $ijazah->ID); ?>" target="_blank">Print</a>
                    <a href="<?php echo base_url('ijazah'); ?>" class="btn btn-light">Cancel</a> 
                </div>
            </div>
        </div>

        <?php $this->load->view('footer'); ?>