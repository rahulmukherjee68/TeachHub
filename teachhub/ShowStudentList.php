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
</head>
<title>Student list</title>
<body>
  <?php
  $q = intval($_GET['q']);

$teacheremail=$_SESSION["teacheremail"];
 $teacheremail=stripcslashes($teacheremail);
 $teacheremail=mysql_real_escape_string($teacheremail);
  mysql_connect("localhost","root","");
  mysql_select_db("teachhub");

if($q==1)
{?>
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

$result =mysql_query("SELECT * FROM csestudentdetails where teacheremail='$teacheremail'");
 
  if ($result > 0) {
    
   // output data of each row
   while($row=mysql_fetch_array($result)) {
   
    echo "<tr><td><b>" . $row['Studentname']. "</td><td><b>" . $row['studentemail'] . "</td><td><b>" . $row['cloud'] . "</td><td><b>"
. $row['dbms']. "</td><td><b>" . $row['compiler']. "</td><td><b>"  . $row['dsa']. "</td><td><b>" . $row['cn']. "</td></tr>";
}
echo "</table>";
} else { echo "No records found"; }

}elseif($q==2) { ?>

  <table>
 <tr>
  <th>STUDENT NAME</th> 
  <TH>STUDENT ROLL</TH>
  <th>MICROPROCESSOR</th> 
  <th>SIGNAL SYSTEM</th>
  <th>ELECTROMAGNETIC THEORY(EMT)</th>
  <th>DIGITAL COMMUNICATON</th>
  <th>DATASTRUCTURE AND ALGORITHM</th>
  <th>OBJECT ORIENTED PROGRAMMING (JAVA)</th>
 </tr>
<?php

$result =mysql_query("SELECT * FROM ecedetails where teacheremail='$teacheremail'");
 
  if ($result > 0) {
    
   // output data of each row
   while($row = mysql_fetch_array($result)) {
   
    echo "<tr><td><b>" . $row['studentname']. "</td><td><b>" . $row['studentroll'] . "</td><td><b>" . $row['micro'] . "</td><td><b>"
. $row['SignalSystem']. "</td><td><b>" . $row['emt']. "</td><td><b>"  . $row['digital']. "</td><td><b>" . $row['dsa']. "</td><td>" . $row['java']. "</td></tr>";
}
echo "</table>";
} else { echo "No records found"; }


}elseif ($q==3) { 

?>
 <table>
 <tr>
  <th>STUDENT NAME</th> 
  <TH>STUDENT ROLL</TH>
  <th>FLOW CONTROL </th> 
  <th>OBJECT ORIENTED PROGRAMMING(JAVA) </th>
  <th>SHELL SCRIPTING</th>
  <th>DATASTRUCTURE AND ALGORITHM</th>
  <th>FORMAL LANGUAHGE AND AUTOMATA THEORY</th>
  <th>ENGINEERING PHYSICS </th>
  <th>ENGINEERING HUMANITIES</th>
 </tr>
 <?php
 $result =mysql_query("SELECT * FROM itdetails where teacheremail='$teacheremail'");
 
  if ($result > 0) {
    
   // output data of each row
   while($row = mysql_fetch_array($result)) {
   
    echo "<tr><td><b>" . $row['studentname']. "</td><td><b>" . $row['studentroll'] . "</td><td><b>" . $row['flow'] . "</td><td><b>"
. $row['java']. "</td><td><b>" . $row['shell']. "</td><td><b>"  . $row['dsa']. "</td><td><b>" . $row['fla']. "</td><td>" . $row['phy']. "</td><td>". $row['hu']. "</td></tr>";
}
echo "</table>";
} else { echo "No records found"; }



}
else 
{
  echo "no record found";
}?>



</table>
</table>
</table>
</div>



 
  
</body>
</html>