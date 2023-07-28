<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Aplikasi Manajemen Universitas</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url('skydash/vendors/feather/feather.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('skydash/vendors/ti-icons/css/themify-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('skydash/vendors/css/vendor.bundle.base.css'); ?>">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('skydash/vendors/mdi/css/materialdesignicons.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('skydash/js/select.dataTables.min.css'); ?>">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url('skydash/css/vertical-layout-light/style.css'); ?>">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url('skydash/images/logo.ico'); ?>" />
	<!-- global styling -->
	<style>
	</style>
</head>


<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0" style="background-color: #F5F7FF;">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<center style="margin-bottom: 2rem;">
								<b> <a style="color:black;" class="judul" href="<?php echo base_url(""); ?>"><img src="<?php echo base_url('skydash/images/politeknik-merdeka.png') ?>" style="height:4rem; width:auto;" class="mr-6" alt="logo">Politeknik Merdeka</a>
								</b>
							</center>
							<h4>Halo!👋 Selamat Datang</h4>
							<h6 class="font-weight-light">Silakan login untuk melanjutkan</h6>

							<form action="" method="post" class="pt-3">
								<div class="form-group">
									<input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" value="<?= set_value('username') ?>" />
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" value="<?= set_value('password') ?>" />
								</div>
								<?php if (isset($error_message) && !empty($error_message)) : ?>
									<div class="alert alert-danger" role="alert">
										<?= $error_message ?>
									</div>
								<?php endif; ?>
								<div class="mt-3">
									<input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Login">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
</body>

</html>
