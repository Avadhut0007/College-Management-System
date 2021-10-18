<html>
<head>
<title> Admission Database</title>
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
<h2 align="Center"> Feedback Database </h2>
<tr>
<th>Email</th>
<th>Name</th>
<th>Message</th>
<th>Rating</th>
</tr>


<?php
include("connection.php");
error_reporting(0);
$query = "select * from feedback";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['Email']."</td>
		<td>".$result['Name']."</td>
		<td>".$result['Message']."</td>
		<td>".$result['Rating']."</td>

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