<?php $this->load->view('header'); ?>

<h2>Edit Program Studi</h2>
<form action="<?php echo base_url('program_studi/update/'.$program_studi->ID); ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $program_studi->Nama; ?>">
    <?php echo form_error('nama'); ?>

    <label for="program_pendidikan">Program Pendidikan:</label>
    <select id="program_pendidikan" name="program_pendidikan">
        <option value="Diploma III" <?php if($program_studi->Program_Pendidikan == 'Diploma III') echo 'selected="selected"'; ?>>Diploma III</option>
        <option value="Diploma IV" <?php if($program_studi->Program_Pendidikan == 'Diploma IV') echo 'selected="selected"'; ?>>Diploma IV</option>
    </select>
    <?php echo form_error('program_pendidikan'); ?>

    <label for="akreditasi">Akreditasi:</label>
    <select id="akreditasi" name="akreditasi">
        <option value="Baik" <?php if($program_studi->Akreditasi == 'Baik') echo 'selected="selected"'; ?>>Baik</option>
        <option value="Baik Sekali" <?php if($program_studi->Akreditasi == 'Baik Sekali') echo 'selected="selected"'; ?>>Baik Sekali</option>
        <option value="Unggul" <?php if($program_studi->Akreditasi == 'Unggul') echo 'selected="selected"'; ?>>Unggul</option>
    </select>
    <?php echo form_error('akreditasi'); ?>

    <label for="sk_akreditasi">SK Akreditasi:</label>
    <input type="text" id="sk_akreditasi" name="sk_akreditasi" value="<?php echo $program_studi->SK_Akreditasi; ?>">
    <?php echo form_error('sk_akreditasi'); ?>

    <input type="submit" value="Update Program Studi">
</form>

<?php $this->load->view('footer'); ?>
