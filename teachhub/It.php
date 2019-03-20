<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>iNFORMATION AND TECHNOLOGY</title>
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
        <li><a href="ItSubjectList.php">GET SUBJECT LIST </a></li>
        <li><a href="AddStudentIt.php">ADD STUDENTS</a></li>
        <li><a href="ViewItStudentDetails.php">VIEW STUDENTS DETAILS </a></li>
        <li><a href="UpdateItStudentDetails.php">UPDATE STUDENTS DETAILS</a></li>
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
        <img src="images\it1.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
         
        </div>
      </div>

      <div class="item">
        <img src="images\it2.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="item">
        <img src="images\it3.jpg" alt="cse" width="460" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="images\cse3.jpg" alt="Flower" width="460" height="345">
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
	<B>Information Technology (IT) Fundamentals introduces the essential technical and professional skills required for<BR> students to pursue programs leading to professional careers and IT certifications. Students investigate career <BR>opportunities and technologies in four major IT areas: Information Services and Support, Network Systems, Programming <BR>and Software Development, and Interactive Media. Students will evaluate the impact of IT on other career clusters. The <BR>focus of the IT Fundamentals course is the introduction of skills related to information technology basics, Internet <BR>fundamentals, network systems, computer maintenance/upgrading/troubleshooting, computer applications, programming, <BR>graphics, Web page design, and interactive media. Students explore ethical issues related to computers and Internet<BR> technology and develop teamwork and communication skills that will enhance their employability..</B>

	<br><br>
	<br>
	<br>
	<br>

</div>
<?php
$_SESSION["StudentCourse"] ="IT";
?>


</body>
</html>