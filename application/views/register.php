<!DOCTYPE html>
<html>
<head>
	<title>Register - Aplikasi Sistem Manajemen Keuangan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
</head>
<body>	
	<div class="col-md-4 col-md-offset-4" style="margin-top: 50px">		
		<center>
			<h2>APLIKASI SISTEM MANAJEMEN KEUANGAN</h2>
			<h3>REGISTRASI</h3>
		</center>
		<br/>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div class='alert alert-danger'>Login gagal! Username dan password salah.</div>";
			}else if($_GET['pesan'] == "logout"){
				echo "<div class='alert alert-danger'>Anda telah logout.</div>";
			}else if($_GET['pesan'] == "belumlogin"){
				echo "<div class='alert alert-success'>Silahkan login dulu.</div>";
			}
		}
		?>
		<br/>
		<div class="panel panel-default">	
			<div class="panel-body">
				<br/>
				<br/>
				<form method="post" action="<?php echo base_url().'p/reg_action' ?>">
                    <div class="form-group">
						<input type="text" name="name" placeholder="fullname" class="form-control">
						<?php echo form_error('name'); ?>
					</div>
					<div class="form-group">
						<input type="text" name="username" placeholder="username" class="form-control">
						<?php echo form_error('username'); ?>
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="password" class="form-control">
						<?php echo form_error('password'); ?>
					</div>
                    <div class="form-group">
						<input type="password" name="repassword" placeholder="Retype password" class="form-control">
						<?php echo form_error('repassword'); ?>
					</div>
					<div class="col-xs-4">
                        <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
				</form>
                <a href="<?php echo base_url() ?>p" class="text-center">I already have a membership</a>
				<br/>
				<br/>
			</div>			
		</div>
	</div>	
</body>
</html>