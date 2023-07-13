<?php $this->load->view('header'); ?>

<h2>List of Transkrip Nilai</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Taruna</th>
            <th>Ijazah</th>
            <th>Program Studi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transkrip_nilai as $tn): ?>
        <tr>
            <td><?php echo $tn->ID; ?></td>
            <td><?php echo $tn->Taruna; ?></td>
            <td><?php echo $tn->Ijazah; ?></td>
            <td><?php echo $tn->Program_Studi; ?></td>
            <td>
                <a href="<?php echo base_url('transkrip_nilai/show/' . $tn->ID); ?>">Show</a> |
                <a href="<?php echo base_url('ijazah/print/' . $tn->ID); ?>">Print</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url('transkrip_nilai/create'); ?>">Add New Transkrip Nilai</a>

<?php $this->load->view('footer'); ?>
