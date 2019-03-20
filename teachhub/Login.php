<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
	<title>Login page</title>
</head>




<?php
//get value from the teachlogin page
	
	$teacheremail=$_POST['teacheremail'];
	$password=$_POST['password'];
	$_SESSION["teacheremail"] = $teacheremail;

	// to prevent mysql injection 
	$teacheremail=stripcslashes($teacheremail);
	$password=stripcslashes($password);
	$teacheremail=mysql_real_escape_string($teacheremail);
	$password=mysql_real_escape_string($password);

	//connect to the server and select databases
	mysql_connect("localhost","root","");
	mysql_select_db("teachhub");

	//query for the database
	$result=mysql_query("select * from teacherdetails where teacheremail='$teacheremail' and password='$password '") or die("unable to query dtabases".mysql_error());
	$row=mysql_fetch_array($result);


	if(($row['teacheremail']==$teacheremail) && ($row['password'] == $password))
{
 echo $_SESSION["teacheremail"];
 	header("Location:WelcomeTeacher.php");

}
else
{

header("Location:NotLogin.php");
}
?>

</body>
</html>