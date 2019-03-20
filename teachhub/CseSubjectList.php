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
        <li><a href="TeachhubLogin.php">GET SUBJECT LIST </a></li>
        <li><a href="AddStudentCse.php">ADD STUDENTS</a></li>
        <li><a href="ViewCseStudentDetails.php">VIEW STUDENTS DETAILS </a></li>
        <li><a href="UpdateCseStudentDetails.php">UPDATE STUDENTS DETAILS</a></li>
        <li><a href="WelcomeTeacher.php">BACK TO DASHBOARD</a></li>
        <li><a href="HomePage.php">LOGOUT</a></li>
       
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<font align="center"><H2>SUBJECT LIST</H2></font>

<div class="container" align="center">

 <b>1. CLOUD COMPUTING(100Pts) :- Cloud computing makes computer system resources, especially storage and computing power, <BR>available on demand without direct active management by the user. The term is generally used to describe data centers <BR>available to many users over the Internet. Large clouds, predominant today, often have functions distributed over multiple<BR> locations from central servers. If the connection to the user is relatively close, it may be designated an Edge server.<BR>

Clouds may be limited to a single organization (enterprise clouds,) be available to many organizations (public cloud,) or a <BR>combination of both (hybrid cloud.) The largest public cloud is Amazon AWS.<BR>

Cloud computing relies on sharing of resources to achieve coherence and economies of scale.<BR>

Advocates of public and hybrid clouds note that cloud computing allows companies to avoid or minimize up-front IT <BR>infrastructure costs. 
<BR>
<BR>
<BR>
<BR>
<BR>
<b> 2. COMPILER DESIGN(100 PTS):- Compiler is a software which converts a program written in high level language (Source <br>Language) to low level language (Object/Target/Machine Language).  <br>We know a computer is a logical assembly of Software and Hardware. The hardware knows a language, that is hard for us to grasp, consequently we tend to write programs <br>in high-level language, that is much less complicated for us to comprehend and maintain in thoughts. Now these <br>programs go through a series of transformation so that they can readily be used machines. This is where language procedure systems come handy.</b>
<BR>
<BR>
<BR>
<BR>
<BR>

<b>3. DATASTRUCTURE AND ALGORITHMS(100PTS):-Data Structure is a way of collecting and organising data in such a way that we can <BR>perform operations on these data in an effective way. Data Structures is about rendering data elements in terms of some <BR>relationship, for better organization and storage. For example, we have some data which has, player's name "Virat" and <BR>age 26. Here "Virat" is of String data type and 26 is of integer data type.<BR>

  In simple language, Data Structures are structures programmed to store ordered data, so that various operations can be <BR>performed on it easily. It represents the knowledge of data to be organized in memory. It should be designed and <BR>implemented in such a way that it reduces the complexity and increases the efficiency.<BR>


</b>
<BR>
<BR>
<BR>
<BR>
<BR>

<B>4. COMPUTER NETWORKS(100PTS):-A computer network is a set of connected computers. Computers on a network are called nodes.<BR> The connection between computers can be done via cabling, most commonly the Ethernet cable, or wirelessly through <BR>radio waves. Connected computers can share resources, like access to the Internet, printers, file servers, and others. A <BR>network is a multipurpose connection, which allows a single computer to do more.

<BR>
<BR>
<BR>
<BR>
<BR>

<B>5. DATABASE MANAGEMENT SYSTEM(DBMS)(100PTS):-A database management system (DBMS) is system software for creating and <BR>managing databases. The DBMS provides users and programmers with a systematic way to create, retrieve, update and manage data.<BR>

A DBMS makes it possible for end users to create, read, update and delete data in a database. The DBMS essentially serves <BR>as an interface between the database and end users or application programs, ensuring that data is consistently <BR>organized and remains easily accessible.</B>

</div>
</body>
</html>