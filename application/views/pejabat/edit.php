<?php $this->load->view('header'); ?>

<h2>Edit Pejabat</h2>
<form action="<?php echo base_url('pejabat/update/' . $pejabat->ID); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $pejabat->Nama; ?>">
    <?php echo form_error('nama'); ?>

    <label for="nip">NIP:</label>
    <input type="text" id="nip" name="nip" value="<?php echo $pejabat->NIP; ?>">
    <?php echo form_error('nip'); ?>

    <label for="golongan">Golongan:</label>
    <input type="text" id="golongan" name="golongan" value="<?php echo $pejabat->Golongan; ?>">
    <?php echo form_error('golongan'); ?>

    <label for="jabatan">Jabatan:</label>
    <input type="text" id="jabatan" name="jabatan" value="<?php echo $pejabat->Jabatan; ?>">
    <?php echo form_error('jabatan'); ?>

    <input type="submit" value="Update Pejabat">
</form>

<?php $this->load->view('footer'); ?>
