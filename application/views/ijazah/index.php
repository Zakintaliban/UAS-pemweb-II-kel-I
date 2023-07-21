<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Ijazah</h4>
                    <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('ijazah/create'); ?>">Add New Ijazah</a>
                    <div class="table-responsive">
                        <table class="table table-hover">
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
                                <?php foreach ($ijazah as $i) : ?>
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
                                            <a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('ijazah/show/' . $i->ID); ?>">Show</a>
                                            <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('ijazah/edit/' . $i->ID); ?>">Edit</a>
                                            <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('ijazah/delete/' . $i->ID); ?>">Delete</a>
                                            <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('ijazah/print/' . $i->ID); ?>">Print</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>