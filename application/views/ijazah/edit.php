<?php $this->load->view('header'); ?>

<h2>Edit Ijazah</h2>
<form action="<?php echo base_url('ijazah/update/'.$ijazah->ID); ?>" method="post">
    <label for="taruna">Taruna:</label>
    <select id="taruna" name="taruna">
        <?php foreach ($taruna as $t): ?>
            <option value="<?php echo $t->ID; ?>" <?php if ($ijazah->Taruna == $t->ID) echo 'selected'; ?>><?php echo $t->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('taruna'); ?>

    <label for="program_studi">Program Studi:</label>
    <select id="program_studi" name="program_studi">
        <?php foreach ($program_studi as $ps): ?>
            <option value="<?php echo $ps->ID; ?>" <?php if ($ijazah->Program_Studi == $ps->ID) echo 'selected'; ?>><?php echo $ps->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('program_studi'); ?>

    <label for="tanggal_ijazah">Tanggal Ijazah:</label>
    <input type="date" id="tanggal_ijazah" name="tanggal_ijazah" value="<?php echo $ijazah->Tanggal_Ijazah; ?>">
    <?php echo form_error('tanggal_ijazah'); ?>

    <label for="tanggal_pengesahan">Tanggal Pengesahan:</label>
    <input type="date" id="tanggal_pengesahan" name="tanggal_pengesahan" value="<?php echo $ijazah->Tanggal_Pengesahan; ?>">
    <?php echo form_error('tanggal_pengesahan'); ?>

    <label for="gelar_akademik">Gelar Akademik:</label>
    <input type="text" id="gelar_akademik" name="gelar_akademik" value="<?php echo $ijazah->Gelar_Akademik; ?>">
    <?php echo form_error('gelar_akademik'); ?>

    <label for="nomor_sk">Nomor SK:</label>
    <input type="text" id="nomor_sk" name="nomor_sk" value="<?php echo $ijazah->Nomor_SK; ?>">
    <?php echo form_error('nomor_sk'); ?>

    <label for="wakil_direktur">Wakil Direktur:</label>
    <select id="wakil_direktur" name="wakil_direktur">
        <?php foreach ($pejabat as $p): ?>
            <option value="<?php echo $p->ID; ?>" <?php if ($ijazah->Wakil_Direktur == $p->ID) echo 'selected'; ?>><?php echo $p->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('wakil_direktur'); ?>

    <label for="direktur">Direktur:</label>
    <select id="direktur" name="direktur">
        <?php foreach ($pejabat as $p): ?>
            <option value="<?php echo $p->ID; ?>" <?php if ($ijazah->Direktur == $p->ID) echo 'selected'; ?>><?php echo $p->Nama; ?></option>
        <?php endforeach; ?>
    </select>
    <?php echo form_error('direktur'); ?>

    <label for="nomor_ijazah">Nomor Ijazah:</label>
    <input type="text" id="nomor_ijazah" name="nomor_ijazah" value="<?php echo $ijazah->Nomor_Ijazah; ?>">
    <?php echo form_error('nomor_ijazah'); ?>

    <label for="nomor_seri">Nomor Seri:</label>
    <input type="text" id="nomor_seri" name="nomor_seri" value="<?php echo $ijazah->Nomor_Seri; ?>">
    <?php echo form_error('nomor_seri'); ?>

    <label for="tanggal_yudisium">Tanggal Yudisium:</label>
    <input type="date" id="tanggal_yudisium" name="tanggal_yudisium" value="<?php echo $ijazah->Tanggal_Yudisium; ?>">
    <?php echo form_error('tanggal_yudisium'); ?>

    <label for="judul_kkw">Judul KKW:</label>
    <input type="text" id="judul_kkw" name="judul_kkw" value="<?php echo $ijazah->Judul_KKW; ?>">
    <?php echo form_error('judul_kkw'); ?>

    <input type="submit" value="Update Ijazah">
</form>

<?php $this->load->view('footer'); ?>
