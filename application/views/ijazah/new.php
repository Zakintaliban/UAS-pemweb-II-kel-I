<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Ijazah</h4>
                    <form class="form-sample" action="<?php echo base_url('ijazah/store'); ?>" method="post">
                        <div class="form-group">
                            <label for="taruna">Taruna</label>
                            <select id="taruna" name="taruna" class="form-control">
                                <?php foreach ($taruna as $t) : ?>
                                    <option value="<?php echo $t->ID; ?>"><?php echo $t->Nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('taruna'); ?>
                        </div>
                        <div class="form-group">
                            <label for="program_studi">Program Studi</label>
                            <select id="program_studi" name="program_studi" class="form-control">
                                <?php foreach ($program_studi as $ps) : ?>
                                    <option value="<?php echo $ps->ID; ?>"><?php echo $ps->Nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('program_studi'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_ijazah">Tanggal Ijazah</label>
                            <input type="date" id="tanggal_ijazah" name="tanggal_ijazah" class="form-control">
                            <?php echo form_error('tanggal_ijazah'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengesahan">Tanggal Pengesahan</label>
                            <input type="date" id="tanggal_pengesahan" name="tanggal_pengesahan" class="form-control">
                            <?php echo form_error('tanggal_pengesahan'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gelar_akademik">Gelar Akademik</label>
                            <select id="gelar_akademik" name="gelar_akademik" class="form-control">
                                    <option value="">Pilih Gelar</option>
                                    <option value="A.Md">Ahli Madya Komputer</option>
                            </select>
                            <?php echo form_error('gelar_akademik'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nomor_sk">Nomor SK</label>
                            <input type="text" id="nomor_sk" name="nomor_sk" class="form-control">
                            <?php echo form_error('nomor_sk'); ?>
                        </div>
                        <div class="form-group">
                            <label for="wakil_direktur">Wakil Direktur</label>
                            <select id="wakil_direktur" name="wakil_direktur" class="form-control">
                                <?php foreach ($pejabat as $p) : ?>
                                    <option value="<?php echo $p->ID; ?>"><?php echo $p->Nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('wakil_direktur'); ?>
                        </div>
                        <div class="form-group">
                            <label for="direktur">Direktur</label>
                            <select id="direktur" name="direktur" class="form-control">
                                <?php foreach ($pejabat as $p) : ?>
                                    <option value="<?php echo $p->ID; ?>"><?php echo $p->Nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('direktur'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nomor_ijazah">Nomor Ijazah</label>
                            <input type="text" id="nomor_ijazah" name="nomor_ijazah" class="form-control">
                            <?php echo form_error('nomor_ijazah'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nomor_seri">Nomor Seri</label>
                            <input type="text" id="nomor_seri" name="nomor_seri" class="form-control">
                            <?php echo form_error('nomor_seri'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_yudisium">Tanggal Yudisium</label>
                            <input type="date" id="tanggal_yudisium" name="tanggal_yudisium" class="form-control">
                            <?php echo form_error('tanggal_yudisium'); ?>
                        </div>
                        <div class="form-group">
                            <label for="judul_kkw">Judul KKW</label>
                            <input type="text" id="judul_kkw" name="judul_kkw" class="form-control">
                            <?php echo form_error('judul_kkw'); ?>
                        </div>
                        <input type="submit" class="btn btn-primary mr-2" value="Add Ijazah">
                        <a href="<?php echo base_url('ijazah'); ?>" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>

            <?php $this->load->view('footer'); ?>

            </body>

</html>