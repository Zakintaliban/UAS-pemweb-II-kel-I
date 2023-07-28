<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ijazah Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <p class="font-weight-bold">Taruna:</p>
                                <p class="font-weight-bold">Program Studi:</p>
                                <p class="font-weight-bold">Tanggal Ijazah:</p>
                                <p class="font-weight-bold">Tanggal Pengesahan:</p>
                                <p class="font-weight-bold">Gelar Akademik:</p>
                                <p class="font-weight-bold">Nomor SK:</p>
                                <p class="font-weight-bold">Wakil Direktur:</p>
                                <p class="font-weight-bold">Direktur:</p>
                                <p class="font-weight-bold">Nomor Ijazah:</p>
                                <p class="font-weight-bold">Nomor Seri:</p>
                                <p class="font-weight-bold">Tanggal Yudisium:</p>
                                <p class="font-weight-bold">Judul KKW:</p>
                            </address>
                        </div>
                        <div class="col-md-6">
                            <address class="text-primary">
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Taruna_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Program_Studi_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Tanggal_Ijazah; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Tanggal_Pengesahan; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Gelar_Akademik; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Nomor_SK; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Wakil_Direktur_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Direktur_Name; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Nomor_Ijazah; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Nomor_Seri; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Tanggal_Yudisium; ?>
                                </p>
                                <p class="font-weight-bold">
                                    <?php echo $ijazah->Judul_KKW; ?>
                                </p>
                            </address>
                        </div>
                    </div>
                    <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('ijazah/edit/' . $ijazah->ID); ?>">Edit</a>
                    <a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $ijazah->ID; ?>)">Delete</a>
                    <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('ijazah/print/' . $ijazah->ID); ?>" target="_blank">Print</a>
                    <a href="<?php echo base_url('ijazah'); ?>" class="btn btn-light">Cancel</a>
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
                            url: "<?php echo base_url('ijazah/delete/'); ?>" + id,
                            type: "POST",
                            data: {},
                            success: function(response) {
                                Swal.fire({
                                    title: 'Sukses',
                                    text: 'Data berhasil dihapus!',
                                    icon: 'success'
                                });
                                setTimeout(function() {
                                    window.location.replace('<?php echo base_url('ijazah'); ?>');
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