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

<link rel="stylesheet" type="text/css" href="css1/examcss.css">
<style type="text/css">
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:rgba(0,0,0,0.2);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

</style>
</head>
<body>
  <button id="myBtn"><i class="fa fa-arrow-up"></i></button>
    <nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" style="color:black;" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span   class="icon-bar"></span>
        <span  class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index" style="font-family: 'Ranchers', cursive;">Olympiad<span style="color: white;">2018</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id="a1">
        <li class="active"><a href="#" style="font-family: 'Ranchers', cursive;">AboutUs</a></li>
        <li><a href="#" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbspPracticeExam</a></li>
        <li><a href="#" data-toggle="modal" data-target="#query" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-question-sign"></span>&nbsp&nbspQueries</a></li>
    
        <li class="dropdown">
        
          <a href="#" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-zoom-out"></span>&nbsp&nbspQuickSearch For Answers?<span class="caret"></span></a>
          <ul  class="dropdown-menu">
             <input class="form-control" id="myInput" type="text" placeholder="Enter Question no...">
            <div class="ah" style="font-family: 'Ranchers', cursive;">
            <li><a href="#" class="butt" id="mark" >Total Marks</a></li>
            <li><a href="#" class="butt" id="ans2"  >Question no:1</a></li>
            <li><a href="#" class="butt" id="ans2"  >Question no:2</a></li>
            <li><a href="#" class="butt" id="ans3" >Question no:3</a></li>
            <li><a href="#" class="butt" id="ans4" >Question no:4</a></li>
            <li><a href="#" class="butt" id="ans5" >Question no:5</a></li>
            <li><a href="#" class="butt" id="ans6">Question no:6</a></li>
            <li><a href="#" class="butt" id="ans7">Question no:7</a></li>
            <li><a href="#" class="butt" id="ans8">Question no:8</a></li>
            <li><a href="#" class="butt" id="ans9">Question no:9</a></li>
            <li><a href="#" class="butt" id="ans20">Question no:10</a></li>
            </div>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="a1">

        <li><a href="#" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-user"></span>&nbsp&nbsp<?php echo $_SESSION["user"];?></a></li>
        <li><a href="#"  data-toggle="modal" data-target="#dashboard" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-home"></span>&nbsp&nbspDashboard</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br>
<div style="font-family: 'Ranchers', cursive;">
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

$mark=0;

$one = $_SESSION["one"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$one' AND ID ='1' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='1'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "<div class='container-fluid' id='one'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        
        echo '<h3>1.&nbsp'. "$one&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
} else {
    echo "<div class='container-fluid' id='one'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>1.&nbsp'. "$one&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
	echo '</div>
            </div>';
    
}
 

$two=$_SESSION["two"];

$sqlc = "SELECT result FROM ans2 WHERE result = '$two' AND ID ='2'";
$sqlw = "SELECT result FROM ans2 WHERE ID ='2'";

$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>2.&nbsp'. "$two&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
            echo '</div>
            </div>';
} 
else {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>2.&nbsp'. "$two&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
	
     echo '</div>
            </div>';
            echo '</div>
            </div>';
}

$three = $_SESSION["three"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$three' AND ID ='3' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='3'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "<div class='container-fluid' id='one'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>3.&nbsp'. "$three&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
} 
else {
     echo "<div class='container-fluid' id='one'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>3.&nbsp'. "$three&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  echo '</div>
            </div>';
    
}
 

 $four = $_SESSION["four"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$four' AND ID ='4' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='4'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>4.&nbsp'. "$four&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
            echo '</div>
            </div>';
} 
else {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>4.&nbsp'. "$four&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  echo '</div>
            </div>';
            echo '</div>
            </div>';
    
}
 

 $five = $_SESSION["five"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$five' AND ID ='5' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='5'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "<div class='container-fluid' id='two'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>5.&nbsp'. "$five&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
} 
else {
    echo "<div class='container-fluid' id='two'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>5.&nbsp'. "$five&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  echo '</div>
            </div>';
    
}


 $six = $_SESSION["six"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$six' AND ID ='6' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='6'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>6.&nbsp'. "$six&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
            echo '</div>
            </div>';
} 
else {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>6.&nbsp'. "$six&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  
    echo '</div>
            </div>';
            echo '</div>
            </div>';
}
 

 $seven = $_SESSION["seven"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$seven' AND ID ='7' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='7'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "<div class='container-fluid' id='two'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>7.&nbsp'. "$seven&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
} else {
    echo "<div class='container-fluid' id='two'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>7.&nbsp'. "$seven&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  echo '</div>
            </div>';
    
}


 $eight = $_SESSION["eight"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$eight' AND ID ='8' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='8'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>8.&nbsp'. "$eight&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
            echo '</div>
            </div>';
} else {
    echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>8.&nbsp'. "$eight&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  echo '</div>
            </div>';
            echo '</div>
            </div>';
    
}
 

 $nine = $_SESSION["nine"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$nine' AND ID ='9' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='9'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
      echo "<div class='container-fluid' id='three'>
    <div class='row'>
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>9.&nbsp'. "$nine&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
} else {
      echo '<div class="container-fluid" id="three">
    <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="lick">';
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>9.&nbsp'. "$nine&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  echo '</div>
            </div>';
    
}
 

 $ten = $_SESSION["ten"];



$sqlc = "SELECT result FROM ans2 WHERE  result ='$ten' AND ID ='10' ";
$sqlw = "SELECT result FROM ans2 WHERE ID ='10'";


$resultc = $conn->query($sqlc);


$resultw = $conn->query($sqlw);


if ($resultc->num_rows > 0) {
     echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultc->fetch_assoc()) {
        echo '<h3>10.&nbsp'. "$ten&nbsp&nbsp" . '<span id="cor" class="glyphicon glyphicon-ok"></span></h3>' ;
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
        $mark=$mark+4;
    }
    echo '</div>
            </div>';
            echo '</div>
            </div>';
} else {
     echo "
   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-6'>
                <div class='lick'>";
    while($row = $resultw->fetch_assoc()) 
    {
        echo '<h3>10.&nbsp'. "$ten&nbsp&nbsp" . '<span id="wro" class="glyphicon glyphicon-remove"></span></h3>';
        echo "<h3>Correct Answer is&nbsp&nbsp" . $row["result"] ."</h3>";
    }
  echo '</div>
            </div>';
            echo '</div>
            </div>';
    
}

$user = $_SESSION["user"];

 $sql="UPDATE signup SET PRACTICE = '$mark' WHERE NAME='$user'";

$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn-> error;
  }

echo "<br>";
echo '<div class="container-fluid" id="three">
    <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"></div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="lick">';
echo "<center><h3>Total&nbsp:&nbsp" . $mark . "&nbspPoints</h3></center>";
echo "</div><div class='col-xs-12 col-sm-12 col-md-12 col-lg-4'></div>";
echo '</div>
            </div>';


$sql = "SELECT NAME FROM signup ORDER BY MARKS DESC";

$result = $conn->query($sql);

 $t=0;

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc())
{

  $man = $row['NAME'];
++$t;
  $sql="UPDATE signup SET RANK = '$t' WHERE NAME ='$man'";
$res = $conn->query($sql);
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn-> error;
  }

}
}
else
{
  echo "Nothing";
}


$conn->close();
?>
</div>


<div class="modal fade" id="dashboard" role="dialog">
    <div class="modal-dialog modal-lg" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="font-size:50px;" data-dismiss="modal">&times;</button>
          <center><div class="men" style="width:75%;padding:30px;">
<center><h1 class="modal-title" style="font-family: 'Ranchers', cursive;color:black;">Dash<span style="color: white;">board</span></h1></center></div></center>
</div>
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
  echo "<h1>Marks:" . $row['MARKS'] . "</h1>";
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
  
<div class="container-fluid">
  <center><button type="submit" onclick="location.href='index'" class="btn btn-info">Home</button></center>
</div>
<br><br>


 <footer style="text-align: center;width:100%;">
            <div class="container-fluid" style="background:#00BFFF;padding-top: 20px;width:100%;">
                <div class="row" style="width:100%;">
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


  <script type="text/javascript">
  
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
$('#myBtn').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 2000);
    return false;
 });
</script>

<script type="text/javascript" src="js/olympiad.js"></script>
</body>
</html>
