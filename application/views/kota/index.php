<?php $this->load->view('header'); ?>

<h2>List of Kota</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode Kota</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kota as $k): ?>
        <tr>
            <td><?php echo $k->ID; ?></td>
            <td><?php echo $k->Kode_Kota; ?></td>
            <td><?php echo $k->Nama; ?></td>
            <td>
                <a href="<?php echo base_url('kota/show/'.$i->ID); ?>">Show</a> |
                <a href="<?php echo base_url('kota/edit/'.$k->ID); ?>">Edit</a> | 
                <a href="<?php echo base_url('kota/delete/'.$k->ID); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('kota/create'); ?>">Add New Kota</a>

<?php $this->load->view('footer'); ?>
