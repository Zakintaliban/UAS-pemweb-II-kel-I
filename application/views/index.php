<?php $this->load->view('header'); ?>

<h1>Welcome to the University Management Application</h1>

<nav>
    <ul>
        <li><a href="<?php echo base_url('program_studi'); ?>">Program Studi</a></li>
        <li><a href="<?php echo base_url('kota'); ?>">Kota</a></li>
        <li><a href="<?php echo base_url('pejabat'); ?>">Pejabat</a></li>
        <li><a href="<?php echo base_url('matakuliah'); ?>">Matakuliah</a></li>
        <li><a href="<?php echo base_url('taruna'); ?>">Taruna</a></li>
        <li><a href="<?php echo base_url('ijazah'); ?>">Ijazah</a></li>
        <li><a href="<?php echo base_url('nilai'); ?>">Nilai</a></li>
        <li><a href="<?php echo base_url('transkrip_nilai'); ?>">Transkrip Nilai</a></li>
    </ul>
</nav>

<?php $this->load->view('footer'); ?>

