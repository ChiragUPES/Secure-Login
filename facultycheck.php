<?php
require 'common.php';
if(isset($_SESSION['email']))
header('location:facultylogin.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		body {
			background-image: url('photos/fc.jpeg');
			background-attachment: fixed; 
			background-size: 100% 100%;
		}
	a.change:hover{
	color:pink;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">ADMIN CREDENTIALS</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<h1 style="color: white">Login</h1>
				<form action="facultycheck2.php" method="post">
					<div class="form-group">
						<label for="mail" style="color: white">Email</label>
						<input type="text" name="mail" class="form-control input-lg" placeholder="Email" required="true">
					</div>
					<div class="form-group">
						<label for="pass" style="color: white">Password</label>
						<input type="password" name="pass" class="form-control input-lg" placeholder="password" required="true">
					</div>
					<button name="button" value="button" class="btn btn-danger">Submit</button>
				</form><br>
			</div>
		</div>
	</div>

</body>
</html>
