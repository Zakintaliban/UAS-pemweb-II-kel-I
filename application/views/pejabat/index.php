<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>


<h2>List of Pejabat</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Golongan</th>
            <th>Jabatan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pejabat as $p) : ?>
            <tr>
                <td><?php echo $p->ID; ?></td>
                <td><?php echo $p->Nama; ?></td>
                <td><?php echo $p->NIP; ?></td>
                <td><?php echo $p->Golongan; ?></td>
                <td><?php echo $p->Jabatan; ?></td>
                <td>
                    <a href="<?php echo base_url('pejabat/show/' . $p->ID); ?>">Show</a> |
                    <a href="<?php echo base_url('pejabat/edit/' . $p->ID); ?>">Edit</a> |
                    <a href="<?php echo base_url('pejabat/delete/' . $p->ID); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('pejabat/create'); ?>">Add New Pejabat</a>

<?php $this->load->view('footer'); ?>