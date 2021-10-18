<html>
<head>
<title>Database</title>
	<h1 style="background-color:brown"><center> <img  src="DYPLOGO2.jpg" width="120" height="120"> </center></h1>
<style>
	
	table
	{
		border-radius: 25px;
		border:3px solid brown;
		font-size: 15px;
		color: black;
		background-color:powderblue;
	}

</style>
</head>

<body>
<p> <b style="color:Red">Note:</b>Only Admin can access this database </p>

<table  align="center" border="2" cellspacing="10">
<h2 align="Center"> Registartion Database </h2>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>City</th>
<th>Email</th>
<th>Contact  No.</th>
<th>Operation</th>
</tr>


<?php
include("connection.php");
error_reporting(0);
$query = "select * from user";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['First Name']."</td>
		<td>".$result['Last Name']."</td>
		<td>".$result['Gender']."</td>
		<td>".$result['City']."</td>
		<td>".$result['Email']."</td>
		<td>".$result['Contact No.']."</td>
		<td><a href = 'Registerdelete.php?rn=$result[Email]'>Delete</td>

		</tr>
		";
	}
}
else
{
	echo "No Records Found";
}

?>
</table>

</body>
</html>