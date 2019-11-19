<?php
require 'common.php';
if(isset($_SESSION['mail'])){
  header('location:index_demo.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		body {
			background-image: url('photos/photos4.jpg');
			background-attachment: fixed; 
			background-size: 100% 100%;
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
				<h1 style="color: white">Register</h1>
				<form action="register_submit.php" method="post">
                        <div class="form-group">
                            <label for="name" style="color: white">Name</label>
                            <input type="text" name="name" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="mail" style="color: white">E-mail</label>
                            <input type="email" name="mail" class="form-control" placeholder="email" required="true" $">
                        </div>
                        <div class="form-group">
                            <label for="pass" style="color: white">Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password" pattern=".{6,}" required="true">
                        </div>
                        <div class="form-group">
                            <label for="contact" style="color: white">Contact</label>
                            <input type="text" name="contact" class="form-control" placeholder="Contact" maxlength="10" size="10" required="true">
                        </div>
                        <button name="button" value="button" class="btn btn-danger">Submit</button>
                    </form>
			</div>
		</div>
	</div>

</body>
</html>
<!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3} (EMAIL) -->

