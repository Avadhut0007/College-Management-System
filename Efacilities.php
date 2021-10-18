<!DOCTYPE html>
<head>
<title> ELECTRONICS Engg</title>
<style>
p{
	color:gray;
}



a
{
	text-decoration:none;
	color:Black;
}

.colorchange
{
 padding: 10px;
}

.colorchange:hover
{
	background-color:brown;
	
}


#t02 {
  width: 60%;    
 border: 1px solid black;
  border-collapse: collapse;
}
#t01 {

  width:100%;    
 background-color:lightgray;
}

#hg {

       padding: 10px;
 background-color:lightgray;
}

#type
	{
		height: 100px;
		width: 900px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		
  		color:black;
  		font-size: 15px;
	}
	#tt
	{
		height: 40px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		border-bottom: 1px solid gray;
  		color:black;
  		font-size: 15px;
	}

</style>
<?php
include("header.php");

?>
</head>

<body>
		<h2 style=color:brown>Facilities</h2>
<table align="left"  border="1"  style="background-color:rgb(148, 184, 184)" width="300" >
<tr>
	<td id="hg"><b>Electronic Engg.</b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "EandTC.php" >Department at a Glance</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Ehod.php" >From HOD’s Desk</a></b> </td>
</tr>
<tr>
	<td class="colorchange" ><b> <a href = "Efaculty.php" >Faculty</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Efacilities.php">Facilities</a></b> </td>
	<tr>
	
	<td class="colorchange"><b> <a href = "Edownloads.php"  >Downloads</a></b> </td>
</tr>

</table>

	
	

<table align="right" border="0" id="type">

<tr>
<th colspan="5" align="center" id="tt"><font size="4.5"> Laboratory Information</font></th>
</tr>
<tr>
	<td id="tt"><b><font size="4">Name of Laboratory</font></b></td>
	<td id="tt"><b><font size="4">No of Major Equipment</font></b></td>
	<td id="tt"><b><font size="4">Total cost of Equipment and Furniture in the laboratory</font></b></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">DIGITAL & MICROCONTROLLER LAB</font></td>
	<td id="tt"><font size="4">12</font></td>
	<td id="tt"><font size="4"><font size="4">372800</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">ANALOG ELECTRONICS LAB</font></td>
	<td id="tt"><font size="4">59</font></td>
	<td id="tt"><font size="4"><font size="4">	339300</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">MEASUREMENT & CONTROL LAB</font></td>
	<td id="tt"><font size="4">12</font></td>
	<td id="tt"><font size="4"><font size="4">137230</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">ELECTRONICS WORKSHOP LAB</font></td>
	<td id="tt"><font size="4">11</font></td>
	<td id="tt"><font size="4"><font size="4">119625</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">ADVANCE COMMUNICATION LAB</font></td>
	<td id="tt"><font size="4">5</font></td>
	<td id="tt"><font size="4"><font size="4">184000</font></td>
	
</tr>

<tr>
	<td id="tt"><font size="4">	COMMUNICATION LAB</font></td>
	<td id="tt"><font size="4">20</font></td>
	<td id="tt"><font size="4"><font size="4">299245</font></td>
	
</tr>

</table>




<?php
include("footer.php");

?>

</body>

</html>