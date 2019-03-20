<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

	<style>

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



table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

  body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}





</style>
	<title></title>
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="table-responsive" align="center">
<table>
 <tr>
  <th>STUDENT NAME</th> 
  <TH>STUDENT ROLL</TH>
  <th>CLOUD COMPUTING</th> 
  <th>DBMS</th>
  <th>COMPILER DESIGN</th>
  <th>DATASTRUCTURE AND ALGO</th>
  <th>COMPUTER NETWORKS</th>
 </tr>
 <?php
 $teacheremail=$_SESSION["teacheremail"];
 $teacheremail=stripcslashes($teacheremail);
 $teacheremail=mysql_real_escape_string($teacheremail);
	mysql_connect("localhost","root","");
	mysql_select_db("teachhub");
  $result =mysql_query("SELECT * FROM csestudentdetails where teacheremail='$teacheremail'");
 
  if ($result > 0) {
  	
   // output data of each row
   while($row = mysql_fetch_array($result)) {
   
    echo "<tr><td><b>" . $row['Studentname']. "</td><td><b>" . $row['studentemail'] . "</td><td><b>" . $row['cloud'] . "</td><td><b>"
. $row['dbms']. "</td><td><b>" . $row['compiler']. "</td><td><b>"  . $row['dsa']. "</td><td><b>" . $row['cn']. "</td></tr>";
}
echo "</table>";
} else { echo "No records found"; }

?>
</table>
</div>
</body>
</html>