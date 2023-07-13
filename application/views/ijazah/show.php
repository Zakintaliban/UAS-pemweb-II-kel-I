<?php $this->load->view('header'); ?>

<h2>Ijazah Details</h2>
<p><strong>Taruna:</strong> <?php echo $ijazah->Taruna; ?></p>
<p><strong>Program Studi:</strong> <?php echo $ijazah->Program_Studi; ?></p>
<p><strong>Tanggal Ijazah:</strong> <?php echo $ijazah->Tanggal_Ijazah; ?></p>
<p><strong>Tanggal Pengesahan:</strong> <?php echo $ijazah->Tanggal_Pengesahan; ?></p>
<p><strong>Gelar Akademik:</strong> <?php echo $ijazah->Gelar_Akademik; ?></p>
<p><strong>Nomor SK:</strong> <?php echo $ijazah->Nomor_SK; ?></p>
<p><strong>Wakil Direktur:</strong> <?php echo $ijazah->Wakil_Direktur; ?></p>
<p><strong>Direktur:</strong> <?php echo $ijazah->Direktur; ?></p>
<p><strong>Nomor Ijazah:</strong> <?php echo $ijazah->Nomor_Ijazah; ?></p>
<p><strong>Nomor Seri:</strong> <?php echo $ijazah->Nomor_Seri; ?></p>
<p><strong>Tanggal Yudisium:</strong> <?php echo $ijazah->Tanggal_Yudisium; ?></p>
<p><strong>Judul KKW:</strong> <?php echo $ijazah->Judul_KKW; ?></p>

<a href="<?php echo base_url('ijazah/edit/' . $ijazah->ID); ?>">Edit</a> | 
<a href="<?php echo base_url('ijazah/delete/' . $ijazah->ID); ?>">Delete</a> |
<a href="<?php echo base_url('ijazah/print/' . $ijazah->ID); ?>" target="_blank">Print</a>


<?php $this->load->view('footer'); ?>