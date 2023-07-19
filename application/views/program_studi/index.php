<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('main'); ?>


<h2>List of Program Studi</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Program Pendidikan</th>
            <th>Akreditasi</th>
            <th>SK Akreditasi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($program_studi as $program) : ?>
            <tr>
                <td><?php echo $program->ID; ?></td>
                <td><?php echo $program->Nama; ?></td>
                <td><?php echo $program->Program_Pendidikan; ?></td>
                <td><?php echo $program->Akreditasi; ?></td>
                <td><?php echo $program->SK_Akreditasi; ?></td>
                <td>
                    <a href="<?php echo base_url('program_studi/show/' . $program->ID); ?>">Show</a> |
                    <a href="<?php echo base_url('program_studi/edit/' . $program->ID); ?>">Edit</a> |
                    <a href="<?php echo base_url('program_studi/delete/' . $program->ID); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('program_studi/create'); ?>">Add New Program Studi</a>

<?php $this->load->view('footer'); ?>