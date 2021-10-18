<?php
include("Adminconnection.php");
error_reporting(0);
?>



<!DOCTYPE html>
<head>
<title> Change Password </title>
<style>
	#type
	{
		height: 32px;
		width: 200px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		border-bottom: 3px solid white;
  		color: white;
  		font-size: 17px;
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
		font-size: 20px;
		color: white;
		background:rgba(0,0,0,0.8);
	}

	input::-webkit-input-placeholder 
	{
    font-size: 19px;
    line-height: 2;
    color: white;
	}
</style>
	<h1 style="background-color:brown"><center> <img  src="DYPLOGO2.jpg" width="120" height="120"> </center></h1>
</head>
<body background="admin_login_background1.jpg">

<h1 align="center" style="color:white">Change Password</h1>
<br><br><br><br>
<form action="" method="POST" autocomplete="off" onsubmit="return validation()">
	<table align="center" cellspacing="20"> 
	
		<td> <b>ID :</b><td><input type="email" name="id" id="type" placeholder="Enter Your ID" required />  </td>
	</tr>

	<tr>
		<td><b>PASSWORD:</b><td><input type="text" name="pw" id="type" placeholder="Enter New Password" required /></td>
	</tr>


	<tr>
		<td align="center" colspan="2"><input type="submit" name="submit" value="Change Password" id="btn" /></td>
	</tr>
</form>
	
</table>
	

<?php
if($_POST['submit'])
{
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	
	$query = "UPDATE ADMIN SET Password='$pw' WHERE ID='$id'";
	$data = mysqli_query($conn,$query);
	
	if($data)
	{
		echo "<font color='white'>Password Changed</font>";
	}
	else
	{
		echo "Failed To Change Password";
	}
}


?>

</body>
</html>
