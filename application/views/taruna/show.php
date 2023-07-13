<h2>Taruna Details</h2>
<p><strong>Nama:</strong> <?php echo $taruna->Nama; ?></p>
<p><strong>Nomor Taruna:</strong> <?php echo $taruna->Nomor_Taruna; ?></p>
<p><strong>Tempat Lahir:</strong> <?php echo $taruna->Tempat_Lahir; ?></p>
<p><strong>Tanggal Lahir:</strong> <?php echo $taruna->Tanggal_Lahir; ?></p>
<p><strong>Program Studi:</strong> <?php echo $taruna->Program_Studi; ?></p>

<a href="<?php echo base_url('taruna/edit/'.$taruna->ID); ?>">Edit</a> | 
<a href="<?php echo base_url('taruna/delete/'.$taruna->ID); ?>">Delete</a>
