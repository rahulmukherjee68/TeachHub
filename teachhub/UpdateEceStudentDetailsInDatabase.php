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
$studentroll=$_POST["studentroll"];
$micro=$_POST["micro"];
$dsa=$_POST["dsa"];
$SignalSystem=$_POST["SignalSystem"];
$emt=$_POST["emt"];
$digital=$_POST["digital"];
$java=$_POST["java"];




	// to prevent mysql injection 
	$teacheremail=stripcslashes($teacheremail);
$studentroll=stripcslashes($studentroll);
	$micro=stripcslashes($micro);
	$dsa=stripcslashes($dsa);
	$SignalSystem=stripcslashes($SignalSystem);
	$emt=stripcslashes($emt);
	$digital=stripcslashes($digital);
	$java=stripcslashes($java);




		$teacheremail=mysql_real_escape_string($teacheremail);
$studentroll=mysql_real_escape_string($studentroll);
	$micro=mysql_real_escape_string($micro);
	$dsa=mysql_real_escape_string($dsa);
	$SignalSystem=mysql_real_escape_string($SignalSystem);
	$emt=mysql_real_escape_string($emt);
	$digital=mysql_real_escape_string($digital);
	$java=mysql_real_escape_string($java);
	
	

//connect to the server and select databases
	mysql_connect("localhost","root","");
	mysql_select_db("teachhub");

//query for the database
	$result=mysql_query("UPDATE ecedetails SET `micro`='$micro',`dsa`='$dsa',`SignalSystem`='$SignalSystem',`emt`='$emt',`digital`='$digital',`java`='$java' where `teacheremail`='$teacheremail' and `studentroll`='$studentroll'") or die("unable to query dtabases".mysql_error());   //brownie points--------------------------------
	if($result==1)
	{
		echo "done";
		header("Location:AlertAddedEce.php");
	}
	else
	{
		echo"Not done";
		header("Location:AlertNotAddedEce.php");
	}

?>


</body>
</html>