<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div class="main-panel">
    <div class="content-wrapper">

        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Mata Kuliah</h4>
                    <a class="btn btn-inverse-primary btn-fw" href="<?php echo base_url('matakuliah/create'); ?>">Add New Mata Kuliah</a>
                    <div class="table-responsive">
                    <table id="order-listing" class="table">
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
                                            <a class="btn btn-inverse-success btn-fw" href="<?php echo base_url('matakuliah/show/' . $m->ID); ?>">Show</a>
                                            <a class="btn btn-inverse-warning btn-fw" href="<?php echo base_url('matakuliah/edit/' . $m->ID); ?>">Edit</a>
                                            <a class="btn btn-inverse-danger btn-fw" href="#" onclick="deleteData(<?php echo $m->ID; ?>)">Delete</a>
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