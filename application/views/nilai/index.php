<?php $this->load->view('header'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Nilai</h4>
                            <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('nilai/create'); ?>">Add New Nilai</a>
                            <div class="table-responsive">
                                <table class="table table-hover">
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
                                        <?php foreach ($nilai as $n) : ?>
                                            <tr>
                                                <td><?php echo $n->ID; ?></td>
                                                <td><?php echo $n->Taruna; ?></td>
                                                <td><?php echo $n->Nilai_Angka; ?></td>
                                                <td><?php echo $n->Nilai_Huruf; ?></td>
                                                <td><?php echo $n->Matakuliah; ?></td>
                                                <td>
                                                    <a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('nilai/show/' . $n->ID); ?>">Show</a> |
                                                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('nilai/edit/' . $n->ID); ?>">Edit</a> |
                                                    <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('nilai/delete/' . $n->ID); ?>">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>