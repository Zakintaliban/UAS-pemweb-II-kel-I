<?php $this->load->view('header'); ?>

<h2>Add New Matakuliah</h2>
<form action="<?php echo base_url('matakuliah/store'); ?>" method="post">
    <label for="kode">Kode:</label>
    <input type="text" id="kode" name="kode">
    <?php echo form_error('kode'); ?>

    <label for="matakuliah">Matakuliah:</label>
    <input type="text" id="matakuliah" name="matakuliah">
    <?php echo form_error('matakuliah'); ?>

    <label for="sks">SKS:</label>
    <input type="number" id="sks" name="sks">
    <?php echo form_error('sks'); ?>

    <label for="nilai_angka">Nilai Angka:</label>
    <input type="number" id="nilai_angka" name="nilai_angka">
    <?php echo form_error('nilai_angka'); ?>

    <label for="nilai_huruf">Nilai Huruf:</label>
    <input type="text" id="nilai_huruf" name="nilai_huruf">
    <?php echo form_error('nilai_huruf'); ?>

    <label for="semester">Semester:</label>
    <select id="semester" name="semester">
        <option value="Semester I">Semester I</option>
        <option value="Semester II">Semester II</option>
        <option value="Semester III">Semester III</option>
        <option value="Semester IV">Semester IV</option>
        <option value="Semester V">Semester V</option>
        <option value="Semester VI">Semester VI</option>
    </select>
    <?php echo form_error('semester'); ?>

    <input type="submit" value="Add Matakuliah">
</form>

<?php $this->load->view('footer'); ?>
