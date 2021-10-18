<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title> Fee Structure </title>

<style>

   
   #type
	{
		height: 200px;
		width: 600px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		
  		color:black;
  		font-size: 15px;
	}
	#tt
	{
		height: 50px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		border-bottom: 2px solid brown;
  		color:black;
  		font-size: 15px;
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
		<h2 align=center>Courses Offered</h2>

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

<table align="center" border="0" id="type">
<tr>
<th align="center" id="tt"><font size="4.5">Course Name</font></th>
<th align="center" id="tt"><font size="4.5">Choice Code</font></th>
<th align="center" id="tt"><font size="4.5">Intake</font></th>
</tr>
<tr>
	<td id="tt">Diploma in Civil Engineering</td>
	<td id="tt">645419110</td>
	<td id="tt">54</td>
</tr>
<tr>
	<td id="tt">Diploma in Computer Engineering</td>
	<td id="tt">645424510</td>
	<td id="tt">54</td>
</tr>
<tr>
	<td id="tt">Diploma in Electrical Engineering</td>
	<td id="tt">645437210</td>
	<td id="tt">54</td>
</tr>
<tr>
	<td id="tt">Diploma in Mechanical Engineering</td>
	<td id="tt">645437210</td>
	<td id="tt">108</td>
</tr>
<tr>
	<td id="tt">Diploma in E & TC Engineering</td>
	<td id="tt">645429310</td>
	<td id="tt">27</td>
</tr>
</table>



<?php
include("footer.php");

?>

</body>
</html>