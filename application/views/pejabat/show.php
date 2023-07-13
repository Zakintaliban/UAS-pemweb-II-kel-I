<h2>Pejabat Details</h2>
<p><strong>Nama:</strong> <?php echo $pejabat->Nama; ?></p>
<p><strong>NIP:</strong> <?php echo $pejabat->NIP; ?></p>
<p><strong>Golongan:</strong> <?php echo $pejabat->Golongan; ?></p>
<p><strong>Jabatan:</strong> <?php echo $pejabat->Jabatan; ?></p>

<a href="<?php echo base_url('pejabat/edit/'.$pejabat->ID); ?>">Edit</a> | 
<a href="<?php echo base_url('pejabat/delete/'.$pejabat->ID); ?>">Delete</a>
