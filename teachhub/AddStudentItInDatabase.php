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
$flow=intval($_POST["flow"]);
$dsa=intval($_POST["dsa"]);
$shell=intval($_POST["shell"]);
$fla=intval($_POST["fla"]);
$phy=intval($_POST["phy"]);
$java=intval($_POST["java"]);
$hu=intval($_POST["hu"]);



if($flow<=100&&$dsa<=100&&$java<=100&&$phy<=100&&$hu<=100&&$fla<=100&&$shell<=100){

	// to prevent mysql injection 
	$teacheremail=stripcslashes($teacheremail);
	$studentname=stripcslashes($studentname);
$studentroll=stripcslashes($studentroll);
	$flow=stripcslashes($flow);
	$dsa=stripcslashes($dsa);
	$shell=stripcslashes($shell);
	$fla=stripcslashes($fla);
	$phy=stripcslashes($phy);
	$java=stripcslashes($java);
		$hu=stripcslashes($hu);





		$teacheremail=mysql_real_escape_string($teacheremail);
	$studentname=mysql_real_escape_string($studentname);
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
	$result=mysql_query("INSERT INTO `itdetails` (`teacheremail`, `studentname`, `studentroll`, `flow`, `java`, `shell`, `dsa`, `fla`, `phy`, `hu`) VALUES ('$teacheremail', '$studentname', '$studentroll', '$flow', '$java', '$shell', '$dsa','$fla', '$phy', '$hu')") or die("unable to query databases".mysql_error());   //brownie points--------------------------------
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
}
else
{
	echo"Not done";
		header("Location:MarksNotValidIt.php");
}

?>


</body>
</html>