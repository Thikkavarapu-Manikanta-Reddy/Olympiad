<?php
// Start the session
session_start();
?>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "answers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
} 

 $one=$_POST["numbers"]; 
  $two=$_POST["animals"];
  $three=$_POST["authors"];
  $four=$_POST["science"];
  $five=$_POST["sense"];
  $six=$_POST["flag"];
  $seven=$_POST["party"];
  $eight=$_POST["writer"];
  $nine=$_POST["place"];
  $ten=$_POST["study"];



$user = $_SESSION["user"];

  if(isset($one))
  	$_SESSION["one"] = "$one";
  else
  	$_SESSION["one"] = "NotAttempted";
  if(isset($two))
  $_SESSION["two"] = "$two";
	else
	$_SESSION["two"] = "NotAttempted";
if(isset($three))
  $_SESSION["three"] = "$three";
  else
  $_SESSION["three"] = "NotAttempted";
if(isset($four))
  $_SESSION["four"] = "$four";
  else
  $_SESSION["four"] = "NotAttempted";
if(isset($five))
  $_SESSION["five"] = "$five";
  else
  $_SESSION["five"] = "NotAttempted";
if(isset($six))
  $_SESSION["six"] = "$six";
  else
  $_SESSION["six"] = "NotAttempted";
if(isset($seven))
  $_SESSION["seven"] = "$seven";
  else
  $_SESSION["seven"] = "NotAttempted";
if(isset($eight))
  $_SESSION["eight"] = "$eight";
  else
  $_SESSION["eight"] = "NotAttempted";
if(isset($nine))
  $_SESSION["nine"] = "$nine";
  else
  $_SESSION["nine"] = "NotAttempted";
if(isset($ten))
  $_SESSION["ten"] = "$ten";
  else
  $_SESSION["ten"] = "NotAttempted";


header('Location:correction2');



$conn->close();
?>
