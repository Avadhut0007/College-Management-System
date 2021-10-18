<?php
include("connection.php");
error_reporting(0);

$email=$_GET['rn'];
$query = "DELETE FROM ADDMISSION WHERE EMAIL = '$email'";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "Record Deleted";

}
else
{
	echo "Record not Deleted";	
}

?>