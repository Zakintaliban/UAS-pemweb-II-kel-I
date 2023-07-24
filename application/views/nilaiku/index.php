<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Nilai</h4>
                    <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('nilaiku/create'); ?>">Add New Nilai</a>
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
                                        <td><?php echo $n->Taruna_Name; ?></td> <!-- Display Taruna name -->
                                        <td><?php echo $n->Nilai_Angka; ?></td>
                                        <td><?php echo $n->Nilai_Huruf; ?></td>
                                        <td><?php echo $n->Matakuliah_Name; ?></td> <!-- Display Matakuliah name -->
                                        <td>
                                            <a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('nilaiku/show/' . $n->ID); ?>">Show</a>
                                            <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('nilaiku/edit/' . $n->ID); ?>">Edit</a>
                                            <a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $n->ID; ?>)">Delete</a>
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

        <!-- SweetAlert CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- SweetAlert JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function deleteData(id) {
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menghapus data ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?php echo base_url('nilaiku/delete/'); ?>" + id,
                            type: "POST",
                            data: {},
                            success: function(response) {
                                Swal.fire({
                                    title: 'Sukses',
                                    text: 'Data berhasil dihapus!',
                                    icon: 'success'
                                });
                                setTimeout(function() {
                                    location.reload();
                                }, 1500);
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                Swal.fire({
                                    title: 'Error',
                                    text: 'Terjadi kesalahan saat menghapus data.',
                                    icon: 'error'
                                });
                            }
                        });
                    }
                });
            }
        </script>