<?php $this->load->view('header'); ?>

<h2>Add New Taruna</h2>
<form action="<?php echo base_url('taruna/store'); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <?php echo form_error('nama'); ?>

    <label for="nomor_taruna">Nomor Taruna:</label>
    <input type="text" id="nomor_taruna" name="nomor_taruna">
    <?php echo form_error('nomor_taruna'); ?>

    <label for="tempat_lahir">Tempat Lahir:</label>
    <input type="text" id="tempat_lahir" name="tempat_lahir">
    <?php echo form_error('tempat_lahir'); ?>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir">
    <?php echo form_error('tanggal_lahir'); ?>

    <label for="program_studi">Program Studi:</label>
    <select id="program_studi" name="program_studi">
        <?php foreach ($program_studi as $ps): ?>
            <option value="<?php echo $ps->ID; ?>"><?php echo $ps->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('program_studi'); ?>

    <input type="submit" value="Add Taruna">
</form>

<?php $this->load->view('footer'); ?>
