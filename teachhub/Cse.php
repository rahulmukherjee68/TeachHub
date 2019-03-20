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






<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images\cse1.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
         
        </div>
      </div>

      <div class="item">
        <img src="images\cse2.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="item">
        <img src="images\cse3.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="images\cse4.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
        </div>
      </div>
      
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


	<br><br><br>





	<div class="container" align="center" >
	<B>Computer science engineering (CSE) is one of the popular courses among engineering aspirants which focuses on the basic elements<br> of computer programming and networking. Students pursuing computer science courses will gain knowledge of design, implementation<br> and management of information system of both hardware and software. Going by the name, CSE course deals primarily with the theory <br>of computation and design of computational systems. The course is offered across the globe in technical institutions at <br>undergraduate as well as postgraduate levels awarding B.Tech and M.tech degrees, respectively.</B>

	<br><br>
	<br>
	<br>
	<br>

</div>
<?php
$_SESSION["StudentCourse"] ="CSE";
?>


</body>
</html>