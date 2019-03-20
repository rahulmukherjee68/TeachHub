
<!DOCTYPE html>
<html lang="en">
<head>
  <title>registration page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<style type="text/css">
  
body{
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}


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



</style>



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
        <li><a href="TeachhubLogin.php">LOGIN</a></li>
        <li><a href="NewTeach.php">SIGNUP</a></li>
        <li><a href="About.php">ABOUT</a></li>
        <li><a href="Contact.php">CONTACT US</a></li>
       
      </ul>
    </div>
  </div>
</nav>






                -->
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-success"> Register page</h1>
<br/>



<br/>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      


  <form action="InsertTeach.php" method="POST">

  <div class="form-group">
    <label for="name">TEACHER NAME</label>
    <input type="text" class="form-control" id="name" name="teachername">
  </div>
  
  <div class="form-group">
    <label for="email">EMAIL:</label>
    <input type="email" class="form-control" id="email" name="teacheremail">
  </div>

  <div class="form-group">
    <label for="pwd">PASSWORD:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>

  <div class="form-group">
    <label for="mobile">MOBILE:</label>
    <input type="mobile" class="form-control" id="MOBILE" name="teachermob">
  </div>



  <button type="submit" class="btn btn-default btn-lg">Submit</button>
 

</form>
<br/>
<a href="TeachhubLogin.php" class="pull-right btn btn-block btn-danger" > Already Register ?   </a>



    </div>

   

    </div>
  </div>
</div>
</div>

</body>
</html>
