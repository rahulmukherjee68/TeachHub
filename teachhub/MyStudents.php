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
  <script>       
function showUser(str) {       <!-- ADDING AJAX FOR LOADING DATA FROM MYSQL BROWINIE POINTS-->
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ShowStudentList.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
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
<font align="center"><h2>SHOWING STUDENT DETAILS</h2></font>

<BR>
<BR>
<BR>

<div align="center">
<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select the course:</option>
  <option value="1">COMPUTER SCIENCE AND ENGINEERING</option>
  <option value="2">ELECTRONICS AND COMMUNICATION</option>
  <option value="3">INFORMATION AND TECHNOLOGY</option>
  </select>
</form>
<BR>
<BR>
<div id="txtHint"><b>STUDENT LIST WILL BE DISPLAYED HERE </b></div>
</div>


</body>
</head>