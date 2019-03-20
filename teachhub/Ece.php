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
        <li><a href="EceSubjectList.php">GET SUBJECT LIST </a></li>
        <li><a href="AddStudentEce.php">ADD STUDENTS</a></li>
        <li><a href="ViewEceStudentDetails.php">VIEW STUDENTS DETAILS </a></li>
        <li><a href="UpdateEceStudentDetails.php">UPDATE STUDENTS DETAILS</a></li>
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
        <img src="images\ece1.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
         
        </div>
      </div>

      <div class="item">
        <img src="images\ece2.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="item">
        <img src="images\ece3.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="images\ece4.jpg" alt="Flower" width="460" height="345">
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
	<B>Electronics and Communication Engineering is an ever growing industry in today’s digital scenario. It is the <br>utilization of science and math applied to practical problems in the field of Electronics & Communication. Electronic <br>communication engineers engage in research, design, development and testing of the electronic equipment used in various <br>communications systems. It is due to Electronics engineers that we enjoy such modern communication devices as <br>cellular telephones, radios and television. The graduates & post graduates are qualified for professional practice or to work in several areas of specialization. We prepare students as professional engineers through an education in <br>fundamental principles presented in the context of real application and design. In addition to fundamentals of science <br>and mathematics, the program provides a solid background in Devices & Circuits, Analog & Digital Electronics & <br>Electromagnetic.Electronics & Communication Engineering finds applications in all fields of engineering and also in daily life.



	<br><br>
	<br>
	<br>
	<br>

</div>
<?php
$_SESSION["StudentCourse"] ="ECE";
?>


</body>
</html>