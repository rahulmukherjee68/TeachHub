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
$studentroll=$_POST["studentroll"];
$micro=intval($_POST["micro"]);
$dsa=intval($_POST["dsa"]);
$SignalSystem=intval($_POST["SignalSystem"]);
$emt=intval($_POST["emt"]);
$digital=intval($_POST["digital"]);
$java=intval($_POST["java"]);


if($micro<=100&&$dsa<=100&&$java<=100&&$emt<=100&&$digital<=100&&$SignalSystem<=100){

	// to prevent mysql injection 
	$teacheremail=stripcslashes($teacheremail);
	$studentname=stripcslashes($studentname);
$studentroll=stripcslashes($studentroll);
	$micro=stripcslashes($micro);
	$dsa=stripcslashes($dsa);
	$SignalSystem=stripcslashes($SignalSystem);
	$emt=stripcslashes($emt);
	$digital=stripcslashes($digital);
	$java=stripcslashes($java);




		$teacheremail=mysql_real_escape_string($teacheremail);
	$studentname=mysql_real_escape_string($studentname);
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
	$result=mysql_query("INSERT INTO `ecedetails` (`teacheremail`, `studentname`, `studentroll`, `micro`, `SignalSystem`, `emt`, `digital`, `dsa`, `java`) VALUES ('$teacheremail', '$studentname', '$studentroll', '$micro', '$SignalSystem', '$emt', '$digital','$dsa', '$java')") or die("unable to query databases".mysql_error());   //brownie points--------------------------------
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
}
else
{
	echo"Not done";
		header("Location:AlertNotAddedEce.php");
}

?>


</body>
</html>