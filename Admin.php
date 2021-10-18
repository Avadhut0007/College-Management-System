<?php
session_start();
include("Adminconnection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>

<style>
	#type
	{
		height: 32px;
		width: 270px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		border-bottom: 3px solid white;
  		color: white;
  		font-size: 25px;
	}

	#btn
	{
		height: 30px;
		width: 230px;
		background-color: orange;
		font-size: 20px;
	}

	table
	{
		border-radius: 25px;
		border:7px solid white;
		font-size: 25px;
		color: white;
		background:rgba(0,0,0,0.8);
	}

	input::-webkit-input-placeholder 
	{
    font-size: 20px;
    line-height: 3;
    color: white;
	}
</style>
	<h1 style="background-color:brown"><center> <img  src="DYPLOGO2.jpg" width="120" height="120"> </center></h1>

</head>
<body background="background.jpg">
<h1 align="center" style="color:white">Admin Login Page</h1>

<form action="" method="POST" >


	<table bgcolor="black" border="0" align="center" width="25%" cellspacing="30">
		
		<tr>
			<td colspan="2" align="center"><img src="admin_logo.png" width="50%"></td>
		</tr>

		<tr>
			<td align="center"><input type="text" name="email" placeholder="Email" id="type" required></td>
		</tr>

		<tr>
			<td align="center"><input type="text" name="pw" placeholder="*******" id="type" required></td>
		</tr>

		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" id="btn" value="Login"></td>
		</tr>
	


</form>


<?php
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$pw = $_POST['pw'];
	
	$query = "select * from admin where ID= '$email' && 
	Password='$pw'";
	$data =mysqli_query($conn,$query);
	
	$total = mysqli_num_rows($data);
	
	if($total==1)
	{
		$_SESSION['user']=$email;
		header('location:frames.php');
	}
	else
	{
		echo "<font color='white'>Login Failed";
	}
}
?>


</body>
</html>

