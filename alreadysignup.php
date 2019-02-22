<!DOCTYPE html>
<html lang="en">
<head>
<title>SOORYANGAD CONSULTANCIES</title>
  <meta charset="utf-8">
  <!--<link rel="icon" href="images1/bc2d12_0ffa3704148646cf804385a559469c48~mv2_d_2278_1292_s_2.png" type="image/png">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Ranchers" rel="stylesheet">
  <!--ass-->
<link rel="stylesheet" type="text/css" href="css1/examcss.css">
<style type="text/css">
  div a.butto {
  text-decoration: none;
  background-color:#00CED1;
  color: white;
  padding: 10px;
  border-radius:5px;
}
div.lick
{
  border-radius: 15px;
  margin:  40px 40px 40px 40px;
  padding: 15px;
   box-shadow: 20px 20px 50px grey;
}
</style>
</head>
<body>
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
      </ul>
      <ul class="nav navbar-nav navbar-right" id="a1">

        
        <li><a href="#" data-toggle="modal" data-target="#login" style="font-family: 'Ranchers', cursive;"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspLogin</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br><br><br>
	<div class="container-fluid">

    <div class="lick">
<center><h1>You already got Signedup!</h1></center>
<br>
<center><a href="#" data-toggle="modal" data-target="#login" class="butto">Login</a></center>
<br>
<center><p style="font-family: 'Ranchers', cursive;">@ 2018<span style="color: black;">Olympiad</span></p></center>
</div>
</div>
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog " >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="font-size:50px;" data-dismiss="modal">&times;</button>
  
    <center><div class="men" style="width:75%;">
<center><h1 style="font-family: 'Ranchers', cursive;color:black;" >Log<span style="color:white;">in</span></h1></center>
</div></center>
</div>

        <div class="modal-body">
           <div class="container-fluid">
    <div class="lick" >
      <form action="declogin" method="post">
   <div class="form-group" >
    <label for="name">Email</label>
    <input type="email" class="form-control" id="email" name="email" title="Enter your email" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"]; } ?>"  placeholder="Email....." required>
  </div>
    <div class="form-group" >
    <label for="password"> Password</label>
    <input type="password" class="form-control" id="password" name="passwor" title="Enter your password" value="<?php if(isset($_COOKIE["pass"])){echo $_COOKIE["pass"]; } ?>"    placeholder="Password....." required>
  </div>
  <a href="#"><h4>Forgot Password</h4></a>
   <div class="form-group">
    <input type="checkbox" name="rememberme" checked>
    <label for="password">Remember me</label>
  </div>
  <button type="submit" class="btn btn-info">Login</button>
  <center><p style="font-family: 'Ranchers', cursive;">@ 2018<span style="color: black;">Olympiad</span></p></center>
</form>
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

    <footer style="text-align: center;">
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


