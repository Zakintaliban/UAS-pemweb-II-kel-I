<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Nilai</h4>
            <form class="form-sample" action="<?php echo base_url('nilai/update/' . $nilai->ID); ?>" method="post">
                <div class="form-group">
                    <label for="taruna">Taruna</label>
                    <select id="taruna" name="taruna" class="form-control">
                        <?php foreach ($taruna as $t) : ?>
                            <option value="<?php echo $t->ID; ?>" <?php if ($nilai->Taruna == $t->ID) echo 'selected'; ?>><?php echo $t->Nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('taruna'); ?>
                </div>
                <div class="form-group">
                    <label for="nilai_angka">Nilai Angka</label>
                    <select id="nilai_angka" name="nilai_angka" class="form-control">
                        <option value="">Pilih Nilai</option>
                        <option value="1">1</option>
                        <option value="1.5">1.5</option>
                        <option value="2">2</option>
                        <option value="2.5">2.5</option>
                        <option value="3">3</option>
                        <option value="3.5">3.5</option>
                        <option value="4">4</option>
                    </select>
                    <?php echo form_error('nilai_angka'); ?>

                </div>
                <div class="form-group">
                    <label for="nilai_huruf">Nilai Huruf</label>
                    <input type="text" id="nilai_huruf" name="nilai_huruf" class="form-control" value="<?php echo $nilai->Nilai_Huruf; ?>" readonly>
                    <?php echo form_error('nilai_huruf'); ?>
                </div>
                <div class="form-group">
                    <label for="matakuliah">Matakuliah</label>
                    <select id="matakuliah" name="matakuliah" class="form-control">
                        <?php foreach ($matakuliah as $mk) : ?>
                            <option value="<?php echo $mk->ID; ?>" <?php if ($nilai->Matakuliah == $mk->ID) echo 'selected'; ?>><?php echo $mk->Matakuliah; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('matakuliah'); ?>
                </div>
                <input type="submit" class="btn btn-primary mr-2" value="Update Nilai">
                <a href="<?php echo base_url('nilai'); ?>" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>

<script>
    document.getElementById('nilai_angka').addEventListener('input', function() {
        var nilaiAngka = parseFloat(this.value);
        var nilaiHuruf = '';

        if (nilaiAngka >= 4) {
            nilaiHuruf = 'A';
        } else if (nilaiAngka >= 3.5) {
            nilaiHuruf = 'AB';
        } else if (nilaiAngka >= 3) {
            nilaiHuruf = 'B';
        } else if (nilaiAngka >= 2.5) {
            nilaiHuruf = 'BC';
        } else if (nilaiAngka >= 2) {
            nilaiHuruf = 'C';
        } else if (nilaiAngka >= 1.5) {
            nilaiHuruf = 'D';
        } else if (nilaiAngka >= 1) {
            nilaiHuruf = 'E';
        }

        document.getElementById('nilai_huruf').value = nilaiHuruf;
    });
</script>
