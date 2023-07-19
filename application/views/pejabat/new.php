<?php $this->load->view('header'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Pejabat</h4>
                            <form class="form-sample" action="<?php echo base_url('pejabat/store'); ?>" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" id="nama" name="nama" class="form-control">
                                    <?php echo form_error('nama'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" id="nip" name="nip" class="form-control">
                                    <?php echo form_error('nip'); ?>
                                </div>
								<div class="form-group">
                                    <label for="golongan">Golongan</label>
                                    <input type="text" id="golongan" name="golongan" class="form-control">
                                    <?php echo form_error('golongan'); ?>
                                </div>
								<div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" id="jabatan" name="jabatan" class="form-control">
                                    <?php echo form_error('jabatan'); ?>
                                </div>
                                <input type="submit" class="btn btn-primary mr-2" value="Add Pejabat">
                                <a href="<?php echo base_url('pejabat'); ?>" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('footer'); ?>
