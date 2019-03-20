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
$flow=$_POST["flow"];
$dsa=$_POST["dsa"];
$shell=$_POST["shell"];
$fla=$_POST["fla"];
$phy=$_POST["phy"];
$java=$_POST["java"];
$hu=$_POST["hu"];






	// to prevent mysql injection 
	$teacheremail=stripcslashes($teacheremail);
$studentroll=stripcslashes($studentroll);
	$flow=stripcslashes($flow);
	$dsa=stripcslashes($dsa);
	$shell=stripcslashes($shell);
	$fla=stripcslashes($fla);
	$phy=stripcslashes($phy);
	$java=stripcslashes($java);
		$hu=stripcslashes($hu);




		$teacheremail=mysql_real_escape_string($teacheremail);
$studentroll=mysql_real_escape_string($studentroll);
	$flow=mysql_real_escape_string($flow);
	$dsa=mysql_real_escape_string($dsa);
	$shell=mysql_real_escape_string($shell);
	$fla=mysql_real_escape_string($fla);
	$phy=mysql_real_escape_string($phy);
	$java=mysql_real_escape_string($java);
		$hu=mysql_real_escape_string($hu);
	
	

//connect to the server and select databases
	mysql_connect("localhost","root","");
	mysql_select_db("teachhub");

//query for the database
	$result=mysql_query("UPDATE `itdetails` SET `flow`='$flow',`java`='$java',`shell`='$shell',`dsa`='$dsa',`fla`='$fla',`phy`='$phy',`hu`='$hu' where `teacheremail`='$teacheremail' and `studentroll`='$studentroll'") or die("unable to query dtabases".mysql_error());   //brownie points--------------------------------
	if($result==1)
	{
		echo "done";
		header("Location:AlertAddedIt.php");
	}
	else
	{
		echo"Not done";
		header("Location:AlertNotAddedIt.php");
	}

?>


</body>
</html>