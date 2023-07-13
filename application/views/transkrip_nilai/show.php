<?php $this->load->view('header'); ?>

<h2>Transkrip Nilai Details</h2>
<p><strong>Taruna:</strong> <?php echo $transkrip_nilai->Taruna; ?></p>
<p><strong>Ijazah:</strong> <?php echo $transkrip_nilai->Ijazah; ?></p>
<p><strong>Program Studi:</strong> <?php echo $transkrip_nilai->Program_Studi; ?></p>
<p>
    <a href="<?php echo base_url('transkrip_nilai/print/'.$transkrip_nilai->ID); ?>" target="_blank">Print</a>
</p>

<?php $this->load->view('footer'); ?>
