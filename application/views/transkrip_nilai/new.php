<h2>Add New Transkrip Nilai</h2>
<form action="<?php echo base_url('transkrip_nilai/store'); ?>" method="post">
    <label for="taruna">Taruna:</label>
    <select id="taruna" name="taruna">
        <?php foreach ($taruna as $t): ?>
            <option value="<?php echo $t->ID; ?>"><?php echo $t->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('taruna'); ?>

    <label for="ijazah">Ijazah:</label>
    <select id="ijazah" name="ijazah">
        <?php foreach ($ijazah as $ij): ?>
            <option value="<?php echo $ij->ID; ?>"><?php echo $ij->Nomor_Ijazah; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('ijazah'); ?>

    <label for="program_studi">Program Studi:</label>
    <select id="program_studi" name="program_studi">
        <?php foreach ($program_studi as $ps): ?>
            <option value="<?php echo $ps->ID; ?>"><?php echo $ps->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('program_studi'); ?>

    <input type="submit" value="Add Transkrip Nilai">
</form>
