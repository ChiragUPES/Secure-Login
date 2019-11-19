<?php
require 'common.php';
if(isset($_SESSION['mail'])){
  header('location:index_demo.php');
}
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
			background-image: url('photos/photos3.jpg');
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
				<a href="#" class="navbar-brand">Blackboard</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<h1 style="color: white">Login</h1>
				<form action="login_submit.php" method="post">
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
				<div> <a href="forgetpassword.php" class="change">FORGET PASSWORD</a></div>
				<div style="color: white"><h4>Don't have an account? <a href="register.php">Register</a></h4></div>
				<div> <a href="facultycheck.php" class="change">Faculty Login?</a></div>
			</div>
		</div>
	</div>

</body>
</html>
