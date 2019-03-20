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
  <head>  <style type="text/css">
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


#example1 {

  padding: 25px;
  background: url(images/back2.jpg);
  background-repeat: no-repeat;
  background-size: 1550px;
}


</style>
    <title>Inside TeachHub</title>
</head>
<body id="example1">
<script type="text/javascript">
    alert("Welcome Folks to teacher hub");
  </script>
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
<font color="bisque"><div align="center">
    <h2>
        <B>COURSES OFFERED TO THE FOLKS</B>
        <BR>
        <BR>
        <BR>

        <FONT ALIGN="center"> COMPUTER SCIENCE AND ENGINEERING </FONT> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Cse.php"><button type="button" class="btn btn-primary">VIEW COURSE</button></a>

         <BR>
        <BR>
        <BR>


        <FONT ALIGN="center"> ELECTRONICS AND COMMUNICATION ENGINEERING </FONT> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Ece.php"><button type="button" class="btn btn-primary">VIEW COURSE</button></a>

         <BR>
        <BR>
        <BR>


        <FONT ALIGN="center"> INFORMATION AND TECHNOLOGY ENGINEERING </FONT> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="It.php"><button type="button" class="btn btn-primary">VIEW COURSE</button></a>

        <BR>
        <BR>
        <BR>



        



</div>
</font>



</body>
</html>