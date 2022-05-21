<!doctype html>
<html>
<head>
<style>
ul
{
	list-style-type:none;
}
ul li{
	display:inline;
	margin-left:30px;
}
ul li a
{
	padding-top:10px;
	text-decorration:none;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

	<br>
<ul>
<li><a href="checkuser.php">check user</a></li>

<li><a href="deleteuser.php">delete user</a></li>
<li><a href="addcamps.php">add camps</a></li>
<li><a href="sendreq.php">send request for requirement</a></li>

</ul>
<h2>Delete user</h2>

<form method="post" action="deleteuser.php">
Delete id <input type="text" name="id"><br/>
<input type="submit" name="delete" value="submit"><br/>
</form>
</div>
</body>
</html>
<?php
$host='localhost';
$username='root';
$password='';
$dbname='final_project';
$con=mysqli_connect($host,$username,$password,$dbname);
if ($con)
{
	if(isset($_POST['delete']))
	{
		$id=$_POST['id'];
		$qry="delete from tbl_checkuser where id=$id";
		mysqli_query($con,$qry);
		header('location:checkuser.php');
	}
}
?>
