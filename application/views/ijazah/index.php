<?php $this->load->view('header'); ?>

<h2>List of Ijazah</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Taruna</th>
            <th>Program Studi</th>
            <th>Tanggal Ijazah</th>
            <th>Tanggal Pengesahan</th>
            <th>Gelar Akademik</th>
            <th>Nomor SK</th>
            <th>Wakil Direktur</th>
            <th>Direktur</th>
            <th>Nomor Ijazah</th>
            <th>Nomor Seri</th>
            <th>Tanggal Yudisium</th>
            <th>Judul KKW</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ijazah as $i): ?>
        <tr>
            <td><?php echo $i->ID; ?></td>
            <td><?php echo $i->Taruna; ?></td>
            <td><?php echo $i->Program_Studi; ?></td>
            <td><?php echo $i->Tanggal_Ijazah; ?></td>
            <td><?php echo $i->Tanggal_Pengesahan; ?></td>
            <td><?php echo $i->Gelar_Akademik; ?></td>
            <td><?php echo $i->Nomor_SK; ?></td>
            <td><?php echo $i->Wakil_Direktur; ?></td>
            <td><?php echo $i->Direktur; ?></td>
            <td><?php echo $i->Nomor_Ijazah; ?></td>
            <td><?php echo $i->Nomor_Seri; ?></td>
            <td><?php echo $i->Tanggal_Yudisium; ?></td>
            <td><?php echo $i->Judul_KKW; ?></td>
            <td>
                <a href="<?php echo base_url('ijazah/show/' . $i->ID); ?>">Show</a> |
                <a href="<?php echo base_url('ijazah/edit/' . $i->ID); ?>">Edit</a> | 
                <a href="<?php echo base_url('ijazah/delete/' . $i->ID); ?>">Delete</a> | 
                <a href="<?php echo base_url('ijazah/print/' . $i->ID); ?>">Print</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('ijazah/create'); ?>">Add New Ijazah</a>

<?php $this->load->view('footer'); ?>