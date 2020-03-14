<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/Template/layout_1/LTR/default/full/uploader_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Nov 2019 15:23:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin - Decisoner</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/bootstrap_limitless.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/layout.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/custom.css')?>" rel="stylesheet">
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
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.jss"></script>


	<!-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script> -->
	

	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?= base_url('assets/js/purify.min.js')?>"></script>
	<script src="<?= base_url('assets/js/sortable.min.js')?>"></script>
	<script src="<?= base_url('assets/js/fileinput.min.js')?>"></script>

	<script src="<?= base_url('assets/js/app.js')?>"></script>
	<script src="<?= base_url('assets/js/uploader_bootstrap.js')?>"></script>

	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="#" class="d-inline-block">
                <img src="<?= base_url('assets/images/logo_light.png')?>" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<a href="<?= base_url('login/logout')?>//<?=$this->session->userdata('access_code')?>" class="navbar-toggler">Logout</a>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="	fa fa-navicon"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="fa fa-navicon"></i>
					</a>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Admin Panel</span>

			<ul class="navbar-nav">
				

				<li class="nav-item dropdown dropdown-user">
					<a href="<?= base_url('login/logout')?>//<?=$this->session->userdata('access_code')?>" class="navbar-nav-link d-flex align-items-center dropdown-toggle">
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
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Menu</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="<?= base_url('admin')?>" class="nav-link <?php if($page=='eks_saham'){echo 'active';};?>">
								<i class="fa fa-plus-circle"></i>
								<span>Eksperimen Saham</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/eks_bank')?>" class="nav-link <?php if($page=='eks_bank'){echo 'active';};?>">
								<i class="fa fa-plus-circle"></i>
								<span>Eksperimen Bank</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/raw')?>" class="nav-link <?php if($page=='raw'){echo 'active';};?>">
								<i class="fa fa-plus-circle"></i>
								<span>Data Mentah</span>
							</a>
						</li>

						<li class="nav-item nav-item-submenu <?php if($page=='admin'||$page=='config'){echo 'nav-item-expanded nav-item-open';};?>">
							<a href="#" class="nav-link <?php if($page=='admin'||$page=='config'){echo 'active';};?>"><i class="fa fa-gear"></i> <span>Settings</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="<?= base_url('admin/user')?>" class="nav-link <?php if($page=='admin'){echo 'active';};?>">Add User</a></li>
								<li class="nav-item"><a href="<?= base_url('admin/config')?>" class="nav-link <?php if($page=='config'){echo 'active';};?>">Configuration</a></li>
							</ul>
						</li>

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper mt-2">

			<!-- Page header -->
			<div class="page-header page-header-light mt-2">

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Admin</a>
							<a href="#" class="breadcrumb-item">Content Management</a>
							<span class="breadcrumb-item active">Add File</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Bootstrap file input -->