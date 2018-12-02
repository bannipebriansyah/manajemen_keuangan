<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Aplikasi Sistem Manajemen Keungan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.dataTables.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/datatable/datatables.js'; ?>"></script>
	<script src="<?=base_url('assets/gijgo/js/gijgo.min.js');?>" type="text/javascript"></script>
    <link href="<?=base_url('assets/gijgo/css/gijgo.min.css');?>" rel="stylesheet" type="text/css" />
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url().'p'; ?>">ASMK</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?=base_url();?>"><span class="glyphicon glyphicon-home"></span> Dashboard <span class="sr-only">(current)</span></a></li>
					<li><a href="<?=base_url('p/masuk');?>"><span class="glyphicon glyphicon-export"></span> Pemasukan </a></li>
					<li><a href="<?=base_url('p/keluar');?>"><span class="glyphicon glyphicon-import"></span> Pengeluaran </a></li>
					<li><a href="<?=base_url('p/laporan');?>"><span class="glyphicon glyphicon-sort"></span> Laporan </a></li>
					<li><a href="<?=base_url('p/bersihkan');?>"><span class="glyphicon glyphicon-list-alt"></span> Bersihkan Data </a></li>							
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?=base_url('p/logout');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>	
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Halo, <b>".$this->session->userdata('name'); ?></b> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo base_url().'p/ganti_password' ?>"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a>
							</li>							
						</ul>
					</li>					
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">