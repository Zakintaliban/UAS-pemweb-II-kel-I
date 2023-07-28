<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mata Kuliah Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <p class="font-weight-bold">Kode:</p>
                                <p class="font-weight-bold">Mata Kuliah:</p>
                                <p class="font-weight-bold">SKS:</p>
                                <p class="font-weight-bold">Nilai Angka:</p>
                                <p class="font-weight-bold">Nilai Huruf:</p>
                                <p class="font-weight-bold">Semester:</p>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address class="text-primary">
                                <p class="font-weight-bold">
                                    <?php echo $matakuliah->Kode; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $matakuliah->Matakuliah; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $matakuliah->SKS; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $matakuliah->Nilai_Angka; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $matakuliah->Nilai_Huruf; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $matakuliah->Semester; ?>
                                </p>
                            </address>
                        </div>
                    </div>
                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('matakuliah/edit/' . $matakuliah->ID); ?>">Edit</a>
                    <a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $matakuliah->ID; ?>)">Delete</a>
                    <a href="<?php echo base_url('matakuliah'); ?>" class="btn btn-light">Cancel</a>
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
                            url: "<?php echo base_url('matakuliah/delete/'); ?>" + id,
                            type: "POST",
                            data: {},
                            success: function(response) {
                                Swal.fire({
                                    title: 'Sukses',
                                    text: 'Data berhasil dihapus!',
                                    icon: 'success'
                                });
                                setTimeout(function() {
                                    window.location.replace('<?php echo base_url('matakuliah'); ?>');
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