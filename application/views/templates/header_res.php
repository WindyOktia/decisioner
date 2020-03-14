<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/Template/layout_1/LTR/default/full/uploader_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2019 15:23:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome to Responden Page</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/bootstrap_limitless.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/layout.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/custom.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/components.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/css/colors.min.css')?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- /global stylesheets -->

	<!-- Core JS files -->


	<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?= base_url('assets/js/blockui.min.js')?>"></script>
	<script src="<?= base_url('assets/js/datatables_advanced.js')?>"></script>
	<script src="<?= base_url('assets/js/datatables.min.js')?>"></script>

	<!-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script> -->
	

	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url('assets/js/purify.min.js')?>"></script>
	<script src="<?= base_url('assets/js/sortable.min.js')?>"></script>
	<script src="<?= base_url('assets/js/fileinput.min.js')?>"></script>

	<script src="<?= base_url('assets/js/app.js')?>"></script>
	<script src="<?= base_url('assets/js/uploader_bootstrap.js')?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.jss"></script>

	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		
		<span class=""></span>
		<div class="d-md-none text-right">
			<button class="navbar-toggler float-right" type="button">
				<a href="<?= base_url('login/logout')?>/<?=$this->session->userdata('access_code')?>" class="text-white">Logout</a>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<!-- <ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class=""></i>
					</a>
				</li>
			</ul> -->
			<span class="badge bg-success ml-md-3 mr-md-auto">
				<?php if($this->session->userdata('role')=='2'){echo 'Responden Saham';}?> 
				<?php if($this->session->userdata('role')=='3'){echo 'Responden Bank';}?>
				[ sesi <?= $this->session->userdata('session')?> ] 
			</span>

			<ul class="navbar-nav">
				

				<li class="nav-item dropdown dropdown-user">
					<a href="<?= base_url('login/logout')?>/<?=$this->session->userdata('access_code')?>" class="navbar-nav-link d-flex align-items-center dropdown-toggle" >
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper mt-2">

			<!-- Page header -->
			<div class="page-header page-header-light mt-2">

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Responden Page</a>
							<!-- <a href="#" class="breadcrumb-item">Content Management</a>
							<span class="breadcrumb-item active">Add File</span> -->
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Bootstrap file input -->