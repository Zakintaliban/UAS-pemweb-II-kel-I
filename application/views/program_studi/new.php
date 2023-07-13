<h2>Add New Program Studi</h2>
<form action="<?php echo base_url('program_studi/store'); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <?php echo form_error('nama'); ?>

    <label for="program_pendidikan">Program Pendidikan:</label>
    <select id="program_pendidikan" name="program_pendidikan">
        <option value="Diploma III">Diploma III</option>
        <option value="Diploma IV">Diploma IV</option>
    </select>
    <?php echo form_error('program_pendidikan'); ?>

    <label for="akreditasi">Akreditasi:</label>
    <select id="akreditasi" name="akreditasi">
        <option value="Baik">Baik</option>
        <option value="Baik Sekali">Baik Sekali</option>
        <option value="Unggul">Unggul</option>
    </select>
    <?php echo form_error('akreditasi'); ?>

    <label for="sk_akreditasi">SK Akreditasi:</label>
    <input type="text" id="sk_akreditasi" name="sk_akreditasi">
    <?php echo form_error('sk_akreditasi'); ?>

    <input type="submit" value="Add Program Studi">
</form>
