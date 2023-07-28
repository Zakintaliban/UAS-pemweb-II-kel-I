<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Mata Kuliah</h4>
                    <form class="form-sample" action="<?php echo base_url('matakuliah/store'); ?>" method="post">
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" id="kode" name="kode" class="form-control">
                            <?php echo form_error('kode'); ?>
                        </div>
                        <div class="form-group">
                            <label for="matakuliah">Matakuliah</label>
                            <input type="text" id="matakuliah" name="matakuliah" class="form-control">
                            <?php echo form_error('matakuliah'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <input type="number" id="sks" name="sks" class="form-control">
                            <?php echo form_error('sks'); ?>
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
                            <input type="text" id="nilai_huruf" name="nilai_huruf" class="form-control" readonly>
                            <?php echo form_error('nilai_huruf'); ?>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select id="semester" name="semester" class="form-control">
                                <option value="Semester I">Semester I</option>
                                <option value="Semester II">Semester II</option>
                                <option value="Semester III">Semester III</option>
                                <option value="Semester IV">Semester IV</option>
                                <option value="Semester V">Semester V</option>
                                <option value="Semester VI">Semester VI</option>
                                <option value="UJIAN AKHIR PROGRAM STUDI">UJIAN AKHIR PROGRAM STUDI</option>
                            </select>
                            <?php echo form_error('semester'); ?>
                        </div>
                        <input type="submit" class="btn btn-primary mr-2" value="Add Mata Kuliah">
                        <a href="<?php echo base_url('matakuliah'); ?>" class="btn btn-light">Cancel</a>
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

</body>

</html>