<?php
// Start the session
session_start();

	require 'PHPMailerAutoload.php';
    //require_once 'class.phpmailer.php';
//require_once 'class.smtp.php';
	//include "../details.php";
	
	
	//$email = $_POST["email"];
	
	// Remove all illegal characters from email
	$_SESSION["email"] = filter_var($_SESSION["email"], FILTER_SANITIZE_EMAIL);

	// Validate e-mail
	if (!filter_var($_SESSION["email"], FILTER_VALIDATE_EMAIL) === false) {
		//echo("$email is a valid email address");
	} else {
		//echo("$email is not a valid email address");
	}
	
	
	/*$sql = "SELECT * FROM participant where EMAIL = '$email'";
  	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		echo "
			<script>
				alert('User already registered!');
			</script>
		";
	}
	else{*/
		$otp = mt_rand(1111,9999);
		//$_SESSION["email"] = $email;
		$_SESSION["otp"] = $otp;
		$mail = new PHPMailer(false);
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = "olympiad18leaftoday@gmail.com";
        $mail->Password = "@9629601733";
        $mail->setFrom('olympiad18leaftoday@gmail.com', 'Olympiad Team');

        //Set who the message is to be sent from
        //$mail->setFrom('ks@300dpi.xyz', 'Kuruksastra Team');
        $mail->addAddress($_SESSION["email"], "");
        //$mail->addBCC("t.manikantareddy160@gmail.com","New");
        $mail->Subject = 'Olympiad\'18';
        $mail->Body = "Thank you for taking interest in Olympiad'18\nYour OTP is ".$_SESSION["otp"];
		$mail->send();
		/*
		if (!$mail->send()) {
            //echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            //echo "<br>Mail succesfully sent to $name,$email & File Created!";
            //fclose($myfile);
        }
		*/
	//}
	
		header('Location:otp1');
		
?>