<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$teacheremail=$_SESSION["teacheremail"];
$studentname=$_POST["studentname"];
$studentemail=$_POST["studentemail"];
$cloud=$_POST["cloud"];
$dsa=$_POST["dsa"];
$dbms=$_POST["dbms"];
$compiler=$_POST["compiler"];
$cn=$_POST["cn"];




	// to prevent mysql injection 
	$teacheremail=stripcslashes($teacheremail);
	$studentname=stripcslashes($studentname);
$studentemail=stripcslashes($studentemail);
	$cloud=stripcslashes($cloud);
	$dsa=stripcslashes($dsa);
	$dbms=stripcslashes($dbms);
	$compiler=stripcslashes($compiler);
	$cn=stripcslashes($cn);




		$teacheremail=mysql_real_escape_string($teacheremail);
	$studentname=mysql_real_escape_string($studentname);
$studentemail=mysql_real_escape_string($studentemail);
	$cloud=mysql_real_escape_string($cloud);
	$dsa=mysql_real_escape_string($dsa);
	$dbms=mysql_real_escape_string($dbms);
	$compiler=mysql_real_escape_string($compiler);
	$cn=mysql_real_escape_string($cn);
	
	

//connect to the server and select databases
	mysql_connect("localhost","root","");
	mysql_select_db("teachhub");

//query for the database
	$result=mysql_query("UPDATE csestudentdetails SET `cloud`='$cloud',`dbms`='$dbms',`compiler`='$compiler',`dsa`='$dsa',`cn`='$cn' where `teacheremail`='$teacheremail' and `studentemail`='$studentemail'") or die("unable to query dtabases".mysql_error());   //brownie points--------------------------------
	if($result==1)
	{
		echo "done";
		header("Location:AlertAddedCse.php");
	}
	else
	{
		echo"Not done";
		header("Location:AlertNotAddedCse.php");
	}

?>


</body>
</html>