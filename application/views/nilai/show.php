<h2>Nilai Details</h2>
<p><strong>Taruna:</strong> <?php echo $nilai->Taruna; ?></p>
<p><strong>Nilai Angka:</strong> <?php echo $nilai->Nilai_Angka; ?></p>
<p><strong>Nilai Huruf:</strong> <?php echo $nilai->Nilai_Huruf; ?></p>
<p><strong>Matakuliah:</strong> <?php echo $nilai->Matakuliah; ?></p>

<a href="<?php echo base_url('nilai/edit/'.$nilai->ID); ?>">Edit</a> |
<a href="<?php echo base_url('nilai/delete/'.$nilai->ID); ?>">Delete</a>
