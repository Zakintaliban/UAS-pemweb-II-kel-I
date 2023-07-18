<?php $this->load->view('header'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Kota</h4>
                            <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('kota/create'); ?>">Add New Kota</a>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Kota</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kota as $k) : ?>
                                            <tr>
                                                <td><?php echo $k->ID; ?></td>
                                                <td><?php echo $k->Kode_Kota; ?></td>
                                                <td><?php echo $k->Nama; ?></td>
                                                <td>
                                                    <a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('kota/show/' . $k->ID); ?>">Show</a> |
                                                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('kota/edit/' . $k->ID); ?>">Edit</a> |
                                                    <a class="btn btn-inverse-danger btn-fw" href="<?php echo base_url('kota/delete/' . $k->ID); ?>">Delete</a>
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