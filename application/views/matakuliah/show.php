<h2>Matakuliah Details</h2>
<p><strong>Kode:</strong> <?php echo $matakuliah->Kode; ?></p>
<p><strong>Matakuliah:</strong> <?php echo $matakuliah->Matakuliah; ?></p>
<p><strong>SKS:</strong> <?php echo $matakuliah->SKS; ?></p>
<p><strong>Nilai Angka:</strong> <?php echo $matakuliah->Nilai_Angka; ?></p>
<p><strong>Nilai Huruf:</strong> <?php echo $matakuliah->Nilai_Huruf; ?></p>
<p><strong>Semester:</strong> <?php echo $matakuliah->Semester; ?></p>

<a href="<?php echo base_url('matakuliah/edit/'.$matakuliah->ID); ?>">Edit</a> | 
<a href="<?php echo base_url('matakuliah/delete/'.$matakuliah->ID); ?>">Delete</a>
