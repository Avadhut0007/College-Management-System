

<!DOCTYPE html>
<head>
<title> Documents </title>
<style>
.zoom
{
transition:transform 0.5s;	
}
.zoom:hover
{
	transform:scale(1.1);
}
  table, th, td {
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}

</style>


<?php
include("header.php");

?> 
</head>
<body>
<h2 align="center">Documents Required</h2>

<table align="left"  border="1"  style="background-color:rgb(148, 184, 184)" width="300" >
<tr>
	<td class="colorchange"><b> <a href = "Feestrcuture.php"  >Fee Strcture </a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "admissionform.php" >Admission Form</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Courses.php" >Courses</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Document.php" >Documents Required</a></b> </td>
</tr>

</table>
<img  src="document.jpg" width="700" height="1000" class="zoom">






<?php
include("footer.php");

?>

</body>