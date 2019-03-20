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
        <li><a href="About.php">ABOUT</a></li>
        <li><a href="Contact.php">CONTACT US</a></li>
       
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
<?php
  $q = $_POST['course']; 
$studentroll=$_POST['studentroll'];  
$teacheremail=$_SESSION["teacheremail"];
 $teacheremail=stripcslashes($teacheremail);
 $teacheremail=mysql_real_escape_string($teacheremail);
 $studentroll=stripcslashes($studentroll);
$studentroll=mysql_real_escape_string($studentroll);
  mysql_connect("localhost","root","");
  mysql_select_db("teachhub");
  if($q=='1')
  {
    $result=mysql_query("DELETE from csestudentdetails where teacheremail='$teacheremail' and studentemail='$studentroll'") or die("unable to query dtabases".mysql_error());   //brownie points--------------------------------
  if($result==1)
  {
  echo "done";
  ?> <script type="text/javascript">
    alert("Student record deleted")
  </script>
  <?php
    header("Location:AlertDelete.php");
  }
  else
  {
    echo"Not done";
     ?> <script type="text/javascript">
    alert("Student record not deleted")
  </script>
  <?php
    header("Location:AlertNotDelete.php");
  }
  }
  elseif($q=='2')
  {

$result=mysql_query("DELETE from ecedetails where teacheremail='$teacheremail' and studentroll='$studentroll'") or die("unable to query dtabases".mysql_error());   //brownie points--------------------------------
  if($result==1)
  {
  echo "done";
  ?> <script type="text/javascript">
    alert("Student record deleted")
  </script>
  <?php
    header("Location:AlertDelete.php");
  }
  else
  {
    echo"Not done";
     ?> <script type="text/javascript">
    alert("Student record not deleted")
  </script>
  <?php
    header("Location:AlertNotDelete.php");
  }



  }
  elseif($q=='3')
  {

$result=mysql_query("DELETE from itdetails where teacheremail='$teacheremail' and studentroll='$studentroll'") or die("unable to query dtabases".mysql_error());   //brownie points--------------------------------
  if($result==1)
  {
  echo "done";
  
 header("Location:AlertDelete.php");
  }
}else
  {
    echo"Not done";
     ?> <script type="text/javascript">
    alert("Student record not deleted")
  </script>
  <?php
    header("Location:AlertNotDelete.php");
  }
?>

</body>

</html>


