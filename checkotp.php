<?php
// Start the session
session_start();


$otp = $_POST["otp"];

if($otp == $_SESSION["otp"])
{
	header('Location:signup');
}
else
{
	 echo "<script type='text/javascript'>alert('Incorrect OTP');
window.location='otp1';
</script>";
}

?>