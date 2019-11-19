<?php
require 'common.php';
if (!isset($_SESSION['mail'])) {
	header('location:login.php');
}
if (!isset($_SESSION['email'])) {
	header('location:facultycheck.php');
}

session_destroy();
header('location:login.php');



?>

