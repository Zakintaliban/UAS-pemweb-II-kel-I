<?php $this->load->view('header'); ?>

<h2>List of Matakuliah</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Nilai Angka</th>
            <th>Nilai Huruf</th>
            <th>Semester</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($matakuliah as $m): ?>
        <tr>
            <td><?php echo $m->ID; ?></td>
            <td><?php echo $m->Kode; ?></td>
            <td><?php echo $m->Matakuliah; ?></td>
            <td><?php echo $m->SKS; ?></td>
            <td><?php echo $m->Nilai_Angka; ?></td>
            <td><?php echo $m->Nilai_Huruf; ?></td>
            <td><?php echo $m->Semester; ?></td>
            <td>
                <a href="<?php echo base_url('matakuliah/show/'.$i->ID); ?>">Show</a> |
                <a href="<?php echo base_url('matakuliah/edit/'.$m->ID); ?>">Edit</a> | 
                <a href="<?php echo base_url('matakuliah/delete/'.$m->ID); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('matakuliah/create'); ?>">Add New Matakuliah</a>

<?php $this->load->view('footer'); ?>
