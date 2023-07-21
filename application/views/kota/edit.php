<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Kota</h4>
                    <form class="form-sample" action="<?php echo base_url('kota/update/' . $kota->ID); ?>" method="post">
                        <div class="form-group">
                            <label for="kode_kota">Kode Kota</label>
                            <input type="text" id="kode_kota" name="kode_kota" class="form-control" value="<?php echo $kota->Kode_Kota; ?>">
                            <?php echo form_error('kode_kota'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $kota->Nama; ?>">
                            <?php echo form_error('nama'); ?>
                        </div>
                        <input type="submit" class="btn btn-primary mr-2" value="Update Kota">
                        <a href="<?php echo base_url('kota'); ?>" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>

        <?php $this->load->view('footer'); ?>