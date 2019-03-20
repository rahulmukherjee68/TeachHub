<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>COMPUTER SCIENCE AND ENGINEERING</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img 
  {
   	width: 70%;
   	margin: auto;
  }

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #111111;
      padding: 25px;
    }

    body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}


  </style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="HomePage.php">TeachHub</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="CseSubjectList.php">GET SUBJECT LIST </a></li>
        <li><a href="AddStudentCse.php">ADD STUDENTS</a></li>
        <li><a href="ViewCseStudentDetails.php">VIEW STUDENTS DETAILS </a></li>
        <li><a href="UpdateCseStudentDetails.php">UPDATE STUDENTS DETAILS</a></li>
        <li><a href="WelcomeTeacher.php">BACK TO DASHBOARD</a></li>
        <li><a href="HomePage.php">LOGOUT</a></li>
       
      </ul>
    </div>
  </div>
</nav>



<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-success"> Student creditails</h1>
<br/>



<br/>
,

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      


  <form action="UpdateCseStudentDetailsInDatabase.php" method="POST">

  
  <div class="form-group">
    <label for="text">STUDENT ROLL:</label>
    <input type="text" class="form-control" id="email" name="studentemail">
  </div>

  <div class="form-group">
    <label for="NUMBER">UPDATED CLOUD COMPUTING MARKS:</label>
    <input type="NUMBER" class="form-control" id="NUMBER" name="cloud">
  </div>

  <div class="form-group">
    <label for="dbms">UPDATED DBMS MARKS:</label>
    <input type="NUMBER" class="form-control" id="NUMBER" name="dbms">
  </div>


  <div class="form-group">
    <label for="cd">UPDATED COMPILER DESIGN MARKS:</label>
    <input type="NUMBER" class="form-control" id="cd" name="compiler">
  </div>



  <div class="form-group">
    <label for="DSA">UPDATED DATASTRUCTURES AND ALGORITHMS MARKS:</label>
    <input type="NUMBER" class="form-control" id="DSA" name="dsa">
  </div>



  <div class="form-group">
    <label for="cn">UPDATED COMPUTER NETWORKS MARKS:</label>
    <input type="NUMBER" class="form-control" id="cn" name="cn">
  </div>



  <button type="submit" class="btn btn-default btn-lg">UPDATE</button>
 

</form>


   

    </div>
  </div>
</div>
</div>

</body>
</html>
