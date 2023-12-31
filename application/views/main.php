<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 col-xl-8 mb-4 mb-xl-4">
            <h3 class="font-weight-bold">Halo, Selamat Datang Admin! 🏫
            </h3>
            <h6 class="font-weight-normal mb-0 text-primary">Nikmati kemudahan pengelolaan di LMS, platform digital Anda untuk pendidikan!</h6>
        </div>
        <div class="grid-margin transparent">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total Program Studi</p>
                            <p class="fs-30 mb-2"><?php echo $program_studi_count; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total Kota</p>
                            <p class="fs-30 mb-2"><?php echo $kota_count; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total Pejabat</p>
                            <p class="fs-30 mb-2"><?php echo $pejabat_count; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total MataKuliah</p>
                            <p class="fs-30 mb-2"><?php echo $matakuliah_count; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total Taruna</p>
                            <p class="fs-30 mb-2"><?php echo $taruna_count; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total Ijazah</p>
                            <p class="fs-30 mb-2"><?php echo $ijazah_count; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total Nilai</p>
                            <p class="fs-30 mb-2"><?php echo $nilai_count; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4 font-weight-bold">Total Transkrip Nilai</p>
                            <p class="fs-30 mb-2"><?php echo $transkrip_nilai_count; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>
        </body>
        </html>