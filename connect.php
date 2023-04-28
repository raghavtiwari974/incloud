<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "connection is suceesfully  ok";
}
else
{
	echo "connection failed".mysqli_connect_error();
}

 ?>