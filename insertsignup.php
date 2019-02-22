
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GAMEZONE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
  $name=$_POST["name"];
  $phone=$_POST["phone"];
 $address=$_POST["address"];
  $passwor=$_POST["passwor"];

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

$email = $_SESSION["email"];


$sql = "INSERT INTO signup (NAME,EMAIL,MOBILEPHONE,ADDRESS,PASSWORD) VALUES ('$name','$email','$phone','$address','$passwor')";

if ($conn->query($sql) === TRUE) {
  
} else {
    echo "Error 404: " . $sql . "<br>" . $conn-> error;
}

	header('Location:successignup');
  
  

  ?>
</body>
</html>
