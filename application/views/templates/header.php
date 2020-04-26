<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <meta http-equiv="refresh" content="3" > -->

	<!-- Bootstrap and own CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/orgchart.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/desk-style.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/mobile-style.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/DataTables/datatables.min.css'?>">

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/all.css'?>">

	<!-- favicon -->
	<link rel="icon" href="<?php echo base_url().'favicon.ico' ?>" type="image/x-icon">

	<!-- Main Script -->
	<script src="<?php echo base_url().'assets/js/jquery-3.3.1.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/js/popper.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/DataTables/datatables.min.js' ?>"></script>
	<script src="<?php echo base_url().'assets/js/sweetalert2.all.min.js' ?>"></script>

	<title>Demo Database</title>
</head>
<body id="main">
	<!-- page header-->
	<div class="container-header bg-primary">
		<button class="btn btn-menu bg-primary text-light mt-2 ml-2 mr-5" onclick="actmenu()">
			<i class="fas menu-icon fa-bars"></i>
		</button>		
		
		<a class="navbar-brand" href="#">
    <img class="header-logo  d-inline-block " src="" alt="">
    <span class="header-font">Dashboard Data Report</span>
  	</a>

		<ul class="nav float-right">
			<li class="nav-item dropdown">
				<a class="avatar nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
					<i class="fas fa-user"></i>
					<small>Hi there...</small>
				</a>
				<div class="dropdown-menu mr-4">
					<a class="dropdown-item" href="#">
						Logout
						<i class="fas fa-sign-out-alt"></i>
					</a>
				</div>
			</li>
		</ul>
	</div>
	<!-- end of page header -->

	<!-- Side Navigation -->
	<div id="mySidenav" class="sidenav">
		<a href="<?php echo base_url()?>">
			<i class="fas fa-tachometer-alt"></i>
			Dashboard
		</a>
		<!--<a href="<?php echo base_url().'admin/data' ?>">-->
		<!--	<i class="fas fa-users"></i>-->
		<!--	Data list-->
		<!--</a>-->
	</div>
		<!-- end of side navigation -->