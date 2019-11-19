<?php 
require 'common.php';


$mail=$_POST['mail'];
$mail=mysqli_real_escape_string($con,$mail);

$pass=$_POST['pass'];
$pass=mysqli_real_escape_string($con,$pass);

$query="SELECT id,email FROM faculty WHERE email='$mail' AND password='$pass'";
$result=mysqli_query($con,$query) or mysqli_error($con);
$num=mysqli_num_rows($result);


if($num==0)
{
	header('location:facultycheck.php?error=Enter correct username and password');
}
else
{
	$row=mysqli_fetch_array($result);
	$_SESSION['email']=$row['email'];	
	header('location:facultylogin.php');

}


?>
