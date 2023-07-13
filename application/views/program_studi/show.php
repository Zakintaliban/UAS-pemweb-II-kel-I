<h2>Program Studi Details</h2>
<p><strong>Nama:</strong> <?php echo $program_studi->Nama; ?></p>
<p><strong>Program Pendidikan:</strong> <?php echo $program_studi->Program_Pendidikan; ?></p>
<p><strong>Akreditasi:</strong> <?php echo $program_studi->Akreditasi; ?></p>
<p><strong>SK Akreditasi:</strong> <?php echo $program_studi->SK_Akreditasi; ?></p>

<a href="<?php echo base_url('program_studi/edit/'.$program_studi->ID); ?>">Edit</a> | 
<a href="<?php echo base_url('program_studi/delete/'.$program_studi->ID); ?>">Delete</a>
