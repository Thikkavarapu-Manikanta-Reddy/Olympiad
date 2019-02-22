
<?php
// Start the session
session_start();
?>

<?php

$email=$_POST["email"];
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

$sql = "SELECT NAME FROM signup WHERE EMAIL='$email' AND PASSWORD='$passwor'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc())
{
  $_SESSION["user"] = $row['NAME'];
if(isset($_POST["rememberme"])) {
  if($_POST["rememberme"]=='1' || $_POST["rememberme"]=='on')
{

setcookie("username", $_POST["email"], time() + (86400 * 30), "/");
setcookie("pass", $_POST["passwor"], time() + (86400 * 30), "/");
}
header('Location:alphabet');
}
else
{
	setcookie('username', '', time()-60*60*24*90, '/', '', 0, 0);
  	setcookie('pass', '', time()-60*60*24*90, '/', '', 0, 0);
  	unset($_COOKIE['username']);
  	unset($_COOKIE['pass']);
  	header('Location:alphabet');
}

}
}
else {
    echo "<script type='text/javascript'>alert('INVALID EMAIL OR INVALID PASSWORD OR YOU MIGHT HAVE DIDNOT SIGNED UP ');
window.location='index';
</script>";
}
$conn->close();
?>