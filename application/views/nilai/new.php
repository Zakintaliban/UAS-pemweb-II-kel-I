<?php $this->load->view('header'); ?>

<h2>Add New Nilai</h2>
<form action="<?php echo base_url('nilai/store'); ?>" method="post">
    <label for="taruna">Taruna:</label>
    <select id="taruna" name="taruna">
        <?php foreach ($taruna as $t): ?>
            <option value="<?php echo $t->ID; ?>"><?php echo $t->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('taruna'); ?>

    <label for="nilai_angka">Nilai Angka:</label>
    <input type="text" id="nilai_angka" name="nilai_angka">
    <?php echo form_error('nilai_angka'); ?>

    <label for="nilai_huruf">Nilai Huruf:</label>
    <input type="text" id="nilai_huruf" name="nilai_huruf">
    <?php echo form_error('nilai_huruf'); ?>

    <label for="matakuliah">Matakuliah:</label>
    <select id="matakuliah" name="matakuliah">
        <?php foreach ($matakuliah as $mk): ?>
            <option value="<?php echo $mk->ID; ?>"><?php echo $mk->Matakuliah; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('matakuliah'); ?>

    <input type="submit" value="Add Nilai">
</form>

<?php $this->load->view('footer'); ?>
