<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <style type="text/css">

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
    <title>Inside TeachHub</title>
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
     <li><a href="MyStudents.php">MY STUDENTS</a></li>
     <li><a href="SearchStudent.php">SEARCH A STUDENT</a></li>
     <li><a href="DeleteStudent.php">DELETE STUDENT</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACT US</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<BR>
<BR>



<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-success">SEARCH STUDENT CREDENTAILS </h1>
<br/>



<br/>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      


  <form action="SearchStudentFromDatabase.php" method="POST">

<div class="form-group">
    <label for="name">STUDENTS ROLL</label>
    <input type="text" class="form-control" id="name" name="studentroll">
  </div>
<br>
  <br>
  <div class="form-group">
  <select name="course">
  <option value="">Select the course:</option>
  <option value="1">COMPUTER SCIENCE AND ENGINEERING</option>
  <option value="2">ELECTRONICS AND COMMUNICATION</option>
  <option value="3">INFORMATION AND TECHNOLOGY</option>
  </select>
</div>
 <button type="submit" class="btn btn-default btn-lg">SEARCH</button>
 
</form>
</div>
</div>
</div>
</div>
</div>




</body>
</head>