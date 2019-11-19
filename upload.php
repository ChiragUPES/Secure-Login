<?php

require 'common.php';
if(isset($_SESSION['mail'])){
  header('location:index_demo.php');
}

//require 'common.php';
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
			
			background-attachment: fixed; 
			background-size: 100% 100%;
			 background-color:  #E0FFFF;
		}
		
	</style>
</head>
<body>
			<form method="post" action="upload1.php" enctype="multipart/form-data">
 	
				<table class="table table-hover table-bordered" id="table1" align='center'  margin-top:x>
					<tr>
						<td>Title </td>
						<td><input type="text" name="title"></td>
					</tr>
					<tr>
						<td>File Upload </td>
						<td><input type="FILE" name="file"></td>
					</tr>
					<tr>
						<td colspan=2 align='center'><input type="submit" name="submit">
				</table>
				</form>

</body>
</html>
