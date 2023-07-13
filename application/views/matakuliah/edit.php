<?php $this->load->view('header'); ?>

<h2>Edit Matakuliah</h2>
<form action="<?php echo base_url('matakuliah/update/' . $matakuliah->ID); ?>" method="post">
    <label for="kode">Kode:</label>
    <input type="text" id="kode" name="kode" value="<?php echo $matakuliah->Kode; ?>">
    <?php echo form_error('kode'); ?>

    <label for="matakuliah">Matakuliah:</label>
    <input type="text" id="matakuliah" name="matakuliah" value="<?php echo $matakuliah->Matakuliah; ?>">
    <?php echo form_error('matakuliah'); ?>

    <label for="sks">SKS:</label>
    <input type="number" id="sks" name="sks" value="<?php echo $matakuliah->SKS; ?>">
    <?php echo form_error('sks'); ?>

    <label for="nilai_angka">Nilai Angka:</label>
    <input type="number" id="nilai_angka" name="nilai_angka" value="<?php echo $matakuliah->Nilai_Angka; ?>">
    <?php echo form_error('nilai_angka'); ?>

    <label for="nilai_huruf">Nilai Huruf:</label>
    <input type="text" id="nilai_huruf" name="nilai_huruf" value="<?php echo $matakuliah->Nilai_Huruf; ?>">
    <?php echo form_error('nilai_huruf'); ?>

    <label for="semester">Semester:</label>
    <select id="semester" name="semester">
        <option value="Semester I" <?php if ($matakuliah->Semester == 'Semester I') echo 'selected'; ?>>Semester I</option>
        <option value="Semester II" <?php if ($matakuliah->Semester == 'Semester II') echo 'selected'; ?>>Semester II</option>
        <option value="Semester III" <?php if ($matakuliah->Semester == 'Semester III') echo 'selected'; ?>>Semester III</option>
        <option value="Semester IV" <?php if ($matakuliah->Semester == 'Semester IV') echo 'selected'; ?>>Semester IV</option>
        <option value="Semester V" <?php if ($matakuliah->Semester == 'Semester V') echo 'selected'; ?>>Semester V</option>
        <option value="Semester VI" <?php if ($matakuliah->Semester == 'Semester VI') echo 'selected'; ?>>Semester VI</option>
    </select>
    <?php echo form_error('semester'); ?>

    <input type="submit" value="Update Matakuliah">
</form>

<?php $this->load->view('footer'); ?>
