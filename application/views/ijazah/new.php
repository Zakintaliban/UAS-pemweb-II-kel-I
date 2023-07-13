<h2>Add New Ijazah</h2>
<form action="<?php echo base_url('ijazah/store'); ?>" method="post">
    <label for="taruna">Taruna:</label>
    <select id="taruna" name="taruna">
        <?php foreach ($taruna as $t): ?>
            <option value="<?php echo $t->ID; ?>"><?php echo $t->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('taruna'); ?>

    <label for="program_studi">Program Studi:</label>
    <select id="program_studi" name="program_studi">
        <?php foreach ($program_studi as $ps): ?>
            <option value="<?php echo $ps->ID; ?>"><?php echo $ps->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('program_studi'); ?>

    <label for="tanggal_ijazah">Tanggal Ijazah:</label>
    <input type="date" id="tanggal_ijazah" name="tanggal_ijazah">
    <?php echo form_error('tanggal_ijazah'); ?>

    <label for="tanggal_pengesahan">Tanggal Pengesahan:</label>
    <input type="date" id="tanggal_pengesahan" name="tanggal_pengesahan">
    <?php echo form_error('tanggal_pengesahan'); ?>

    <label for="gelar_akademik">Gelar Akademik:</label>
    <input type="text" id="gelar_akademik" name="gelar_akademik">
    <?php echo form_error('gelar_akademik'); ?>

    <label for="nomor_sk">Nomor SK:</label>
    <input type="text" id="nomor_sk" name="nomor_sk">
    <?php echo form_error('nomor_sk'); ?>

    <label for="wakil_direktur">Wakil Direktur:</label>
    <select id="wakil_direktur" name="wakil_direktur">
        <?php foreach ($pejabat as $p): ?>
            <option value="<?php echo $p->ID; ?>"><?php echo $p->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('wakil_direktur'); ?>

    <label for="direktur">Direktur:</label>
    <select id="direktur" name="direktur">
        <?php foreach ($pejabat as $p): ?>
            <option value="<?php echo $p->ID; ?>"><?php echo $p->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('direktur'); ?>

    <label for="nomor_ijazah">Nomor Ijazah:</label>
    <input type="text" id="nomor_ijazah" name="nomor_ijazah">
    <?php echo form_error('nomor_ijazah'); ?>

    <label for="nomor_seri">Nomor Seri:</label>
    <input type="text" id="nomor_seri" name="nomor_seri">
    <?php echo form_error('nomor_seri'); ?>

    <label for="tanggal_yudisium">Tanggal Yudisium:</label>
    <input type="date" id="tanggal_yudisium" name="tanggal_yudisium">
    <?php echo form_error('tanggal_yudisium'); ?>

    <label for="judul_kkw">Judul KKW:</label>
    <input type="text" id="judul_kkw" name="judul_kkw">
    <?php echo form_error('judul_kkw'); ?>

    <input type="submit" value="Add Ijazah">
</form>
