<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>  
<body>
<?php 
//get value from the newTeach page
$teachername=$_POST['teachername'];

$teacheremail=$_POST['teacheremail'];
	$password=$_POST['password'];
	$teachermob=$_POST['teachermob'];

	
// to prevent mysql injection
	$teacheremail=stripcslashes($teacheremail);
	$password=stripcslashes($password);
	$teachermob=stripcslashes($teachermob);
	$teachername=stripcslashes($teachername);

	$teacheremail=mysql_real_escape_string($teacheremail);
	$password=mysql_real_escape_string($password);
	$teachername=mysql_real_escape_string($teachername);
	$teachermob=mysql_real_escape_string($teachermob);


	//connect to the server and select databases
	mysql_connect("localhost","root","");
	mysql_select_db("teachhub");


		//query for the database
	$result=mysql_query("INSERT INTO `teacherdetails` (`teachername`, `teacheremail`, `teachermob`, `password`, `teachercourse`, `teacherstudents`) VALUES ('$teachername', '$teacheremail', '$teachermob', '$password', '', '')") or die("unable to query dtabases".mysql_error());
	
	echo $result;

	if($result==1)
	{
		header("Location:TeachhubLogin.php");
	}
	else
	{
		echo "not done";
	}

?>
</body>
</html>