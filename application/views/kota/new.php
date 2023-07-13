<h2>Add New Kota</h2>
<form action="<?php echo base_url('kota/store'); ?>" method="post">
    <label for="kode_kota">Kode Kota:</label>
    <input type="text" id="kode_kota" name="kode_kota">
    <?php echo form_error('kode_kota'); ?>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <?php echo form_error('nama'); ?>

    <input type="submit" value="Add Kota">
</form>
