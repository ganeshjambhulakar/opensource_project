<?php
include('db.php');


$firstName=$_POST["firstName"];

$lastName=$_POST["lastName"];

$email=$_POST["email"];


$query="INSERT INTO `assign`(`firstName`, `lastName`,`email`)

 VALUES ('$firstName', '$lastName ','$email')";



//$query="INSERT INTO `assign`(`firstName`,`lastName,`email`)

 //	values (`$firstName`,`lastName`,`$email`)";



$status=mysqli_query($conn,$query);


if($status)
{
	echo "<script type='text/javascript'>alert('Your data submitted successfully!')</script>";
	
	
}
else
{
    echo "Data not submitted";
}


$conn -> close();

?>