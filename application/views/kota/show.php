<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kota Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <p class="font-weight-bold">Kode Kota:</p>
                                <p class="font-weight-bold">Nama:</p>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address class="text-primary">
                                <p class="font-weight-bold">
                                    <?php echo $kota->Kode_Kota; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $kota->Nama; ?>
                                </p>
                            </address>
                        </div>
                    </div>
                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('kota/edit/' . $kota->ID); ?>">Edit</a>
                    <a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $kota->ID; ?>)">Delete</a>
                    <a href="<?php echo base_url('kota'); ?>" class="btn btn-light">Cancel</a>
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
                                    window.location.replace('<?php echo base_url('kota'); ?>');
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