<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="addmission";

$addconn = mysqli_connect($servername,$username,$password,$dbname);

if($addconn)
{
	//echo "Connection Ok";
}
else
{
	echo "Connection Failed".mysqli_connect_error();
}


?>
