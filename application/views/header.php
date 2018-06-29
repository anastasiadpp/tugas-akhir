<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3 Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>SENTIMENT ANALYSIS</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href="<?= base_url().'assets/plugins/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?= base_url().'assets/plugins/font-awesome/css/font-awesome.min.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/fonts/style.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/datepicker.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/main.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/style.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/main-responsive.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/plugins/iCheck/skins/all.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/theme_black_and_white.css" id="skin_color' ?>">
		<!--[if IE 7]>
		<link rel="stylesheet" href="<?= base_url().'assets/plugins/font-awesome/css/font-awesome-ie7.min.css' ?>">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="<?= base_url().'assets/plugins/fullcalendar/fullcalendar/fullcalendar.css' ?>">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="<?= base_url().'favicon.ico' ?>" />

		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/plugins/DataTables-1.10.4/media/css/jquery.dataTables.css' ?>">
  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="<?= base_url().'assets/plugins/DataTables-1.10.4/media/js/jquery.js' ?>"></script>
		
		<!-- DataTables -->
		<?php if($value == 1 || $value == 2 || $value == 3 || $value == 4 || $value == 6) { ?>
			<script type="text/javascript" charset="utf8" src="<?= base_url().'assets/plugins/DataTables-1.10.4/media/js/jquery.dataTables.js' ?>"></script>
		<?php } ?>
		<script type="text/javascript" charset="utf8" src="<?= base_url().'assets/js/bootstrap-datepicker.js' ?>"></script>
		<script type="text/javascript" language="javascript" class="init">
		<?php if($value == 1 || $value == 2 || $value == 3 || $value == 4 || $value == 6) { ?>
			$(document).ready(function() {
				$('#table_data').DataTable();
			} );
		<?php } ?>
	</script>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
		<!-- start: BODY -->
	<body class="header-default">
		<!--<?php echo $value; ?>-->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!--<a class="navbar-brand" href="index.html">
						AF<i class="clip-clip"></i>TA
					</a>-->
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<div class="navbar-content">
				<!-- start: SIDEBAR -->
				<div class="main-navigation navbar-collapse collapse">
					<!-- start: MAIN MENU TOGGLER BUTTON -->
					<div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
					</div>
					<!-- end: MAIN MENU TOGGLER BUTTON -->
					<!-- start: MAIN NAVIGATION MENU -->
					<ul class="main-navigation-menu">
						<li class="<?php if($value == 'dashboard') echo 'active open'; ?>">
							<a href="<?= base_url().'index.php/home/dashboard'?>"><i class="clip-home-3"></i>
								<span class="title"> DASHBOARD </span><span class="selected"></span>
							</a>
						</li>
						<li class="<?php if($value == 4 || $value == 5 || $value == 6 || $value == 7) echo 'active open'; ?>">
							<a href="javascript:void(0)"><i class="icon-bar-chart"></i>
								<span class="title"> TESTING </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">
								<!--<li class="<?php if($value == 7) echo 'active'; ?>">
									<a href="<?= base_url(). 'index.php/home/test_textmining'?>">
										<span class="title"> Test Text Mining </span>
									</a>
								</li>-->
								<li class="<?php if($value == 5) echo 'active'; ?>">
									<a href="<?= base_url(). 'index.php/home/research/test'?>">
										<span class="title"> Sentiment Analysis </span>
									</a>
								</li>
								<li class="<?php if($value == 6) echo 'active'; ?>">
									<a href="<?= base_url(). 'index.php/home/trend_news'?>">
										<span class="title"> Recommender System </span>
									</a>
								</li>
								<li class="<?php if($value == 4) echo 'active'; ?>">
									<a href="<?= base_url(). 'index.php/home/data/comment'?>">
										<span class="title"> Database Sentiment </span>
									</a>
								</li>								
							</ul>
						</li>
					</ul>
					<!-- end: MAIN NAVIGATION MENU -->
				</div>
				<!-- end: SIDEBAR -->
			</div>