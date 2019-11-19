<?php
/*
require 'common.php';
if(isset($_SESSION['mail'])){
  header('location:index_demo.php');
}
*/
require 'common.php';
if(!isset($_SESSION['email'])){
  header('location:facultycheck.php');
}
?>



<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		#table1{
		border-color: red;
		color: blue;
		width: 400px;
	}
	body {
			background-image: url('photos/fc.jpeg');
			background-attachment: fixed; 
			background-size: 100% 100%;
		}
		
	</style>
</head>
<body>
	<div class="container" style="padding-top: 100px">
		<div class="row">
			<div class="col-xs-4">
				<table class="table table-hover table-bordered" id="table1" >
					<tr>
						<th><a href="index_demo.php"><b>Blackboard </b></a></th>
					</tr>
					<tr>
						<th><a href="upload.php"><b>Add content</b></a></th>
					</tr>
					<tr>
						<th><a href="logout.php"><b>LOGOUT</b></a></th>
				</table>
			</div>
		</div>
	</div>


</body>
</html>
