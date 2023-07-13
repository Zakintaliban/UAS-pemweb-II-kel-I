<?php $this->load->view('header'); ?>

<h2>List of Nilai</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Taruna</th>
            <th>Nilai Angka</th>
            <th>Nilai Huruf</th>
            <th>Matakuliah</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($nilai as $n): ?>
        <tr>
            <td><?php echo $n->ID; ?></td>
            <td><?php echo $n->Taruna; ?></td>
            <td><?php echo $n->Nilai_Angka; ?></td>
            <td><?php echo $n->Nilai_Huruf; ?></td>
            <td><?php echo $n->Matakuliah; ?></td>
            <td>
                <a href="<?php echo base_url('nilai/show/' . $n->ID); ?>">Show</a> |
                <a href="<?php echo base_url('nilai/edit/' . $n->ID); ?>">Edit</a> |
                <a href="<?php echo base_url('nilai/delete/' . $n->ID); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('nilai/create'); ?>">Add New Nilai</a>

<?php $this->load->view('footer'); ?>
