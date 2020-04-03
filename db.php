<?php


$servername="localhost";
$username="root";
$password="amar1234";
$dbname="opensource";

$conn=mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{	
	//echo "Connection Successful";
}
else
{
	die("Connection failed because".mysql_error());
}

?>