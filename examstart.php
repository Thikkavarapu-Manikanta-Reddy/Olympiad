
<?php
// Start the session
session_start();
if(!isset($_SESSION["user"]))
{
  header('Location:index');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SOORYANGAD CONSULTANCIES</title>
  <meta charset="utf-8">
  <link rel="icon" href="images1/bc2d12_0ffa3704148646cf804385a559469c48~mv2_d_2278_1292_s_2.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="dist/typer.min.js"></script>
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Ranchers" rel="stylesheet">
  
  <!--ass-->
<link rel="stylesheet" type="text/css" href="css1/examcss.css">

</head>
<body>
  <button  id="myBtn"><i class="fa fa-arrow-up"></i></button>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" style="color:black;" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span   class="icon-bar"></span>
        <span  class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="font-family: 'Ranchers', cursive;">Olympiad<span style="color: white;">2018</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id="a1">
        <li class="active"><a href="#" style="font-family: 'Ranchers', cursive;">AboutUs</a></li>
        <li><a href="#" data-toggle="modal" data-target="#query" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-question-sign"></span>&nbsp&nbspQueries</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="a1">

        <li><a href="#" style="font-family: 'Ranchers', cursive;" id="demo"></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-user" ></span>&nbsp&nbsp<?php echo $_SESSION["user"];?></a>
          </li>
        <li><a href="#"  data-toggle="modal" data-target="#dashboard" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-home" ></span>&nbsp&nbspDashboard</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>

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

$user = $_SESSION["user"];

$sql = "SELECT EXAMCOMP FROM signup WHERE NAME='$user'";


$result = $conn->query($sql);
if ($result->num_rows > 0)
 {
 	while($row = $result->fetch_assoc())
{
	$_SESSION["completed"] = $row['EXAMCOMP'];
}
}
else
{

}

if($_SESSION["completed"] == 0)
{
  echo "<div class='container-fluid' style='width:70%;' >
                <div class='tick' > ";
                echo "<center><h2>ExamTime:50seconds<br><br>Each question carries 4 Marks(No negative Marks)<br><br>Total number of questions:10<br><br>";
  echo "You can check your rank and marks of yours and other competitors in Leaderboard and Dashboard<br><br>All The Best</h2><br></center>";
  echo '<center><a href="examform"  class="butto">StartExam</a></center><br>';
  echo "</div>";
  echo "</div>";
}

else
{
  echo "<div class='container-fluid'>
                <div class='tick'>";
  echo '<center><h1>ThankYou you have completed your exam</h1></center><br><center><h1>Still Want to play?</h1></center><br><center><a href="alphabet"  class="butto">Play with Alphabets</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="logical"  class="butto">Test your Logical Reasoning Skills</a></center>';
  echo "</div>";
  echo "</div>";
}



$conn->close();
?>






<br><br>

<div class="modal fade" id="dashboard" role="dialog">
    <div class="modal-dialog modal-lg" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="font-size:50px;" data-dismiss="modal">&times;</button>
 <center><div class="men" style="width:75%;padding:30px;">
<center><h1 class="modal-title" style="font-family: 'Ranchers', cursive;color:black;">Dash<span style="color: white;">board</span></h1></center></div></center></div>
        <div class="modal-body">
           <div class="container-fluid">
    <div class="lick" style="font-family: 'Ranchers', cursive;">
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

$user = $_SESSION["user"];

if($_SESSION["completed"]== 1)
{
  $_SESSION["status"]="Completed";
}
else
{
    $_SESSION["status"]="NotCompleted";
}

$status=$_SESSION["status"];

$sql = "SELECT NAME,EMAIL,MOBILEPHONE,ADDRESS,MARKS,RANK,PRACTICE FROM signup WHERE NAME='$user'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc())
{
  
  echo "<h1>Name:" . $row['NAME'] . "</h1>";
  echo "<h1>Email:" . $row['EMAIL'] . "</h1>";
  echo "<h1>Phonenumber:" . $row['MOBILEPHONE'] . "</h1>";
  echo "<h1>Address:" . $row['ADDRESS'] . "</h1>";
  echo "<h1>Marks:" . $row['MARKS']. "</h1>";
  echo "<h1>CurrentRank:". $row['RANK'] ."</h1>";
  echo "<h1>ExamStatus:". $status ."</h1>";
  echo "<h1>PracticeExam(Latest):". $row['PRACTICE'] ."</h1>";
  
  

      
}
}
else {
    echo "Nothing";
}

$conn->close();
      ?>
 </div>
      </div>
        </div>
        
      </div>
      
    </div>
  </div>
 <div class="modal fade" id="query" role="dialog">
    <div class="modal-dialog " >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="font-size:50px;" data-dismiss="modal">&times;</button>
  
    <center><div class="men" style="width:75%;">
<center><h1 style="font-family: 'Ranchers', cursive;color:black;">QUER<span style="color: white;">IES</span></h1></center>
</div></center>
</div>
<div class="modal-body">
           <div class="container-fluid">
    <div class="lick">
<form  action="query" method="post">
  <div class="form-group" >
    <label for="name">Name</label>
    <input type="name"  class="form-control" id="name" name="name" title="Enter your name" placeholder="Name....." required>
  </div>
   <div class="form-group" >
    <label for="name">Email</label>
    <input type="email" class="form-control" id="email" name="email" title="Enter your email" placeholder="Email....." required>
  </div>
   <div class="form-group" >
    <label for="comment">Query</label>
    <input type="comment" class="form-control"  id="comment" name="comment" title="Leave your Query" placeholder="Query....." required>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
  <center><p style="font-family: 'Ranchers', cursive;">@ 2018<span style="color: black;">Olympiad</span></p></center>
</form>
</div>
      </div>
        </div>
        
      </div>
      
    </div>
  </div>

<footer style="text-align: center;margin-bottom:0px;">
            <div class="container-fluid" style="background:#00BFFF;padding-top: 20px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="color:gainsboro;">
                        <h3 style="font-family: 'Ranchers', cursive;color:white">
                            <strong>ABOUT<span style="font-family: 'Ranchers', cursive;color: black;">US</span></strong>
                        </h3>
                        <p style="color:white">
                            We believe that life-long learning is important to stay ahead throughout your professional career and that professional training and certification is one of the best investments you can make in yourself. Sooryangad is diversified and gives comprehensive training options offer you the flexibility to incorporate ongoing professional development into your already busy schedule.
                        </p>
                    </div>
              
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="color:gainsboro;">
                        <h3 style="font-family: 'Ranchers', cursive;color:white">
                            <strong>ME <span style="font-family: 'Ranchers', cursive;color: black;">NU</span></strong>
                        </h3>
                        <a href="#" style="color:white;text-decoration:none;">Home</a><br><a href="#" style="color:white;text-decoration:none;">PracticeExam</a><br><a href="#" data-toggle="modal" data-target="#query" style="color:white;text-decoration:none;">Queries</a><br>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="color:gainsboro;">
                            <div>
                        <h3 style="font-family: 'Ranchers', cursive;color:white">
                            <strong>CONTACT<span style="font-family: 'Ranchers', cursive;color: black;"> US</span></strong>
                        </h3>
                        <p style="color:white">
                        
            contact.sooryangad@gmail.com<br>
            +91-9868629764<br><br><br>

             <a  href="https://www.facebook.com/sooryangad" target="_blank" style="cursor: pointer;" id="wer"><i class="fa fa-facebook-square"></i></a>
    <a  style="cursor: pointer;" id="wer"><i class="fa fa-google"></i></a>
    <a  style="cursor: pointer;" id="wer"><i class="fa fa-twitter"></i></a>

                        </p>
                            </div>
                         
            </div>
            </div>
            </div>
        </footer>


</body>
</html>