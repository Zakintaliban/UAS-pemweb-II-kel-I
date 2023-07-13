<h2>List of Taruna</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Taruna</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Program Studi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($taruna as $t): ?>
        <tr>
            <td><?php echo $t->ID; ?></td>
            <td><?php echo $t->Nama; ?></td>
            <td><?php echo $t->Nomor_Taruna; ?></td>
            <td><?php echo $t->Tempat_Lahir; ?></td>
            <td><?php echo $t->Tanggal_Lahir; ?></td>
            <td><?php echo $t->Program_Studi; ?></td>
            <td>
                <a href="<?php echo base_url('taruna/show/'.$i->ID); ?>">Show</a> |
                <a href="<?php echo base_url('taruna/edit/'.$t->ID); ?>">Edit</a> | 
                <a href="<?php echo base_url('taruna/delete/'.$t->ID); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('taruna/create'); ?>">Add New Taruna</a>
