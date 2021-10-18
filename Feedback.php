<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title> Feedback Form </title>

<style>
	#type
	{
		height: 32px;
		width: 500px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		border-bottom: 3px solid white;
  		color: black;
  		font-size: 25px;
	}

	#btn
	{
		height: 50px;
		width: 500px;
		border-radius:25px;
		background-color: #9407;
		font-size: 20px;
	}
	textarea
	{
		
		font-size: 20px;
	}
	input::-webkit-input-placeholder 
	{
    font-size: 20px;
    line-height: 3;
    color: black;
	}

body {
  background-image: url('Avadhut07.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

</style>

<?php
include("header.php");

?> 

</head>

<br><br><br>
<form action="" method="POST">

		<h1 align="center"><b> Send Feedback  </b></h1><br><br>
		<center><input type="text" name="email" placeholder="Enter Your Email." id="type"></center><br><br>
		<center><input type="text" name="name" placeholder="Enter Your Name." id="type"></center><br><br>
		<center><textarea name="info" cols="45" rows="7" placeholder="Write Your Valuable Words and Message here."  ></textarea></center>
		<h2 align="center">Rate Us :<input type="radio" name="rate" value=Bad /> Bad
												<input type="radio" name="rate" value=Average /> Average
												<input type="radio" name="rate" value=Good /> Good
											<input type="radio" name="rate" value=Excellent /> Excellent </h2><br>
		<center><input type="submit" name="submit" id="btn" value="Submit">	</center>
<br><br>
<br><br>

</form>


<?php

$em=$_POST['email'];
$na=$_POST['name'];
$info=$_POST['info'];
$rate=$_POST['rate'];





$query="INSERT INTO FEEDBACK VALUES('$em','$na','$info','$rate')";

$data=mysqli_query($conn,$query);
if(isset($_POST['submit']))
{

	echo "Thanks for your feedback";
}
?>





<?php
include("footer.php");

?>

</body>
</html>