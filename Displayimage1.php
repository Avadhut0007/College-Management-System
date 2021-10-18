

<html>
<head>
<title> Gallery </title>
<style>

.zoom
{
transition:transform 0.5s;	
}
.zoom:hover
{
	transform:scale(1.1);
}

</style>
	 <h1 style="background-color:brown"><center> <img  src="DYPLogo2.jpg" width="120" height="120"> </center></h1>
</head>

<body>
<br> 
		<h2 align="center"> Gallery</h2>
	

<br>
<table align="center" border="2" cellspacing="15">

<?php
include("connection.php");
error_reporting(0);

$query = "select * from gallery";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<img src='".$result['pictures']."' height='250' width='340' vspace='15' hspace='15' class='zoom'>
		
		";
	}
}
else
{
	echo "No  Images Here";
}


?>

</table>
</body>
</html>