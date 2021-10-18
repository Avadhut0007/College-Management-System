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
<h2 align="Center"> Admission Database </h2>
<tr>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Email</th>
<th>FY/DSY</th>
<th>DOB</th>
<th>Address</th>
<th>Contact  No.</th>
<th>Parent No.</th>

</tr>


<?php
include("connection.php");
error_reporting(0);
$query = "select * from addmission";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['First Name']."</td>
		<td>".$result['Middle Name']."</td>
		<td>".$result['Last Name']."</td>
		<td>".$result['Gender']."</td>
		<td>".$result['Email']."</td>
		<td>".$result['Admission for Year']."</td>
		<td>".$result['DOB']."</td>
		<td>".$result['Address']."</td>
		<td>".$result['Contact No.']."</td>
		<td>".$result['Parent Contact No.']."</td>

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