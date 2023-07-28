<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">


        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Kota</h4>
                    <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('kota/create'); ?>">Add New Kota</a>
                    <div class="table-responsive">
                    <table id="order-listing" class="table">
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
                                            <a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('kota/show/' . $k->ID); ?>">Show</a>
                                            <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('kota/edit/' . $k->ID); ?>">Edit</a>
                                            <a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $k->ID; ?>)">Delete</a>
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
                            url: "<?php echo base_url('kota/delete/'); ?>" + id,
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

</body>

</html>