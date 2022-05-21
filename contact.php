<?php
$host='localhost';
$username='root';
$password='';
$dbname='final_project';
$con=mysqli_connect($host,$username,$password,$dbname);
if($con)
{
        if(isset($_POST['submitbtn']))
         {
		  	 $name=$_POST['name'];
			   $email=$_POST['email'];
			   $cont=$_POST['contact'];
			   $mess=$_POST['message'];
			   echo $qry="insert into tbl_feedback (name,email,contact,message) 
values('$name','$email','$cont','$mess,')";
$res=mysqli_query($con,$qry);
if($res)
{
            echo'<script>alert("record   inserted")</script>';
}
else
{
echo'<script>alert("Record is failed to insert")</script>';
     }
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="margin-bottom:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BLOODCAMP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">services <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">document</a></li>
          <li><a href="#">blog</a></li>
          <li><a href="#">demo</a></li>
        </ul>
      </li>

      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">contact</a></li>
	   <li><a href="register.php">Register</a></li>
	   <li><a href="admin.php">Admin</a></li>
	    
    </ul>
	<ul class="nav navbar-nav navbar-right">
   <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<section class="bg-danger py-5">
  
<div class="container">
  <h2 class="text-center">Send a Massage</h2>
  <form method="post" action="contact.php">
          <div class="col-md-6">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control"  placeholder=" enter name" name="name">
    </div>
	</div>
	 <div class="col-md-6">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="enter email" name="email">
    </div>
	</div>
	        <div class="col-md-6">
    <div class="form-group">
      <label for="contact">Contact:</label>
      <input type="number" class="form-control"  placeholder="Enter contact" name="contact">
    </div>
	</div>
	        <div class="col-md-6">
	 <div class="form-group">
      <label for="msg">Message:</label>
      <input type="text" class="form-control"  placeholder="Enter massage" name="message">
    </div>
	   </div>
    <div class="text-center">
      
    <button type="send" name="submitbtn" class="btn btn-info btn-lg">SEND</button>
</div>
  </form>
</div>
<br>
</section>
</body>
</html>
