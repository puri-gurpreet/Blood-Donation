<?php

$host='localhost';
$username='root';
$password='';
$dbname='final_project';
$con=mysqli_connect($host,$username,$password,$dbname);

if ($con->connect_error) {
  die("Conn	ection failed: " . $con->connect_error);
}
echo "Connected successful";
?>
