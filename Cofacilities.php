<!DOCTYPE html>
<head>
<title> Computer Sc. & Engg</title>
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
	<td id="hg"><b> Computer Sc. & Engg </b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Computer.php" >Department at a Glance</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Cohod.php" >From HOD’s Desk</a></b> </td>
</tr>
<tr>
	<td class="colorchange" ><b> <a href = "Cofaculty.php" >Faculty</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Cofacilities.php">Facilities</a></b> </td>
	
	<tr>
	
	<td class="colorchange"><b> <a href = "Codownloads.php"  >Downloads</a></b> </td>
</tr>

<tr>
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
	<td id="tt"><font size="4">NETWORK INTERNET LAB</font></td>
	<td id="tt"><font size="4">19</font></td>
	<td id="tt"><font size="4"><font size="4">743193</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">PROGRAMMING LAB</font></td>
	<td id="tt"><font size="4">13</font></td>
	<td id="tt"><font size="4"><font size="4">	808552</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">MICROPROCESSOR LAB</font></td>
	<td id="tt"><font size="4">8</font></td>
	<td id="tt"><font size="4"><font size="4">663756</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">BASIC ELECTRONICS LAB</font></td>
	<td id="tt"><font size="4">13</font></td>
	<td id="tt"><font size="4"><font size="4">178372</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">DIGITAL LAB</font></td>
	<td id="tt"><font size="4">9</font></td>
	<td id="tt"><font size="4"><font size="4">118452</font></td>
	
</tr>

<tr>
	<td id="tt"><font size="4">FUNDAMENTAL LAB</font></td>
	<td id="tt"><font size="4">6</font></td>
	<td id="tt"><font size="4"><font size="4">1176000</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">SOFTWARE TESTING LAB</font></td>
	<td id="tt"><font size="4">17</font></td>
	<td id="tt"><font size="4"><font size="4">858292</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">HARDWARE LAB</font></td>
	<td id="tt"><font size="4">12</font></td>
	<td id="tt"><font size="4"><font size="4">465645</font></td>
	
</tr>
</table>




<?php
include("footer.php");

?>

</body>

</html>