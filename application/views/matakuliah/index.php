<?php $this->load->view('header'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Mata Kuliah</h4>
                            <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('matakuliah/create'); ?>">Add New Mata Kuliah</a>
                            <div class="table-responsive">
                                <table class="table table-hover">
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
                                        <?php foreach ($matakuliah as $m) : ?>
                                            <tr>
                                                <td><?php echo $m->ID; ?></td>
                                                <td><?php echo $m->Kode; ?></td>
                                                <td><?php echo $m->Matakuliah; ?></td>
                                                <td><?php echo $m->SKS; ?></td>
                                                <td><?php echo $m->Nilai_Angka; ?></td>
                                                <td><?php echo $m->Nilai_Huruf; ?></td>
                                                <td><?php echo $m->Semester; ?></td>
                                                <td>
                                                    <a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('matakuliah/show/' . $m->ID); ?>">Show</a> |
                                                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('matakuliah/edit/' . $m->ID); ?>">Edit</a> |
                                                    <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('matakuliah/delete/' . $m->ID); ?>">Delete</a>
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