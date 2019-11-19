    <?php
	$con = mysqli_connect("localhost", "root", "", "blackboard")or die(mysqli_connect_error($con));
	$mail=$_REQUEST['email']; 
	$query=mysqli_query($con,"select * from user_data where mail='$mail'");
	$row=mysqli_fetch_array($query) ;//or die(mysqli_connect_error($con));	
if(mysqli_num_rows($query)>0)
{
    require("PHPMailer-master/src/PHPMailer.php");
  require("PHPMailer-master/src/SMTP.php");
	$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'ramprakashpandu12@gmail.com';
    $mail->Password = 'Ramprakash1#';
    $mail->SMTPSecure=false;
    $mail->setFrom('ramprakashpandu12@gmail.com', 'Blackboard');
    $mail->addAddress($row['mail']);
    $mail->isHTML(true);
    $mail->Subject = 'Reset Password';
    $mail-> Body ="<i>Click the below link for password update</i>
			<a href='mail2.php'>Click me </a>";
   
    $mail->AltBody = 'This is a plain text message body';
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}
else
{?>
	
		<script> alert("Please Register First!!");
		window.open('login.php','_self');
		</script>
	<?php
}
    ?>
<!-- var x=document.getElementById('input');
		if(x.type=='password')
		{
			x.type='text';
		}
		else(x.type=='text')
		{
			x.type='password';
		}-->
