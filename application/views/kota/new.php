<?php $this->load->view('header'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Kota</h4>
                            <form class="form-sample" action="<?php echo base_url('kota/store'); ?>" method="post">
                                <div class="form-group">
                                    <label for="kode_kota">Kode Kota</label>
                                    <input type="text" id="kode_kota" name="kode_kota" class="form-control">
                                    <?php echo form_error('kode_kota'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control">
                                    <?php echo form_error('nama'); ?>
                                </div>
                                <input type="submit" class="btn btn-primary mr-2" value="Add Kota">
                                <a href="<?php echo base_url('kota'); ?>" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
