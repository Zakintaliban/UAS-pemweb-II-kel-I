<?php $this->load->view('header'); ?>

<h2>Add New Pejabat</h2>
<form action="<?php echo base_url('pejabat/store'); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <?php echo form_error('nama'); ?>

    <label for="nip">NIP:</label>
    <input type="text" id="nip" name="nip">
    <?php echo form_error('nip'); ?>

    <label for="golongan">Golongan:</label>
    <input type="text" id="golongan" name="golongan">
    <?php echo form_error('golongan'); ?>

    <label for="jabatan">Jabatan:</label>
    <input type="text" id="jabatan" name="jabatan">
    <?php echo form_error('jabatan'); ?>

    <input type="submit" value="Add Pejabat">
</form>

<?php $this->load->view('footer'); ?>
