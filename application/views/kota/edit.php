<h2>Edit Kota</h2>
<form action="<?php echo base_url('kota/update/'.$kota->ID); ?>" method="post">
    <label for="kode_kota">Kode Kota:</label>
    <input type="text" id="kode_kota" name="kode_kota" value="<?php echo $kota->Kode_Kota; ?>">
    <?php echo form_error('kode_kota'); ?>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $kota->Nama; ?>">
    <?php echo form_error('nama'); ?>

    <input type="submit" value="Update Kota">
</form>
