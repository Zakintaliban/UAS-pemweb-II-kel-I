<?php $this->load->view('header'); ?>

<h2>Kota Details</h2>
<p><strong>Kode Kota:</strong> <?php echo $kota->Kode_Kota; ?></p>
<p><strong>Nama:</strong> <?php echo $kota->Nama; ?></p>

<a href="<?php echo base_url('kota/edit/' . $kota->ID); ?>">Edit</a> | 
<a href="<?php echo base_url('kota/delete/' . $kota->ID); ?>">Delete</a>

<?php $this->load->view('footer'); ?>
