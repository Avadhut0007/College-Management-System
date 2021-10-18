<!DOCTYPE html>
<head>
<title> Civil Engg</title>
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
		<h2 style=color:brown> Facilities</h2>
<table align="left"  border="1"  style="background-color:rgb(148, 184, 184)" width="300" >
<tr>
	<td id="hg"><b> Civil </b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Civil.php" >Department at a Glance</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Cihod.php" >From HOD’s Desk</a></b> </td>
</tr>
<tr>
	<td class="colorchange" ><b> <a href = "Cifaculty.php" >Faculty</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Cifacilities.php">Facilities</a></b> </td>
	<tr>
	
	<td class="colorchange"><b> <a href = "Cidownloads.php"  >Downloads</a></b> </td>
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
	<td id="tt"><font size="4">ENGINEERING MECHANICS</font></td>
	<td id="tt"><font size="4">13</font></td>
	<td id="tt"><font size="4"><font size="4">81227</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">SURVEYING LAB</font></td>
	<td id="tt"><font size="4">18</font></td>
	<td id="tt"><font size="4"><font size="4">	567420</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">ENVIRONMENTAL ENGINEERING LAB</font></td>
	<td id="tt"><font size="4">18</font></td>
	<td id="tt"><font size="4"><font size="4">142660</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">GEOTECHNICAL ENGINEERING LAB</font></td>
	<td id="tt"><font size="4">23</font></td>
	<td id="tt"><font size="4"><font size="4">207960</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">CONCRET TECHNOLOGY LAB</font></td>
	<td id="tt"><font size="4">16</font></td>
	<td id="tt"><font size="4"><font size="4">117400</font></td>
	
</tr>

<tr>
	<td id="tt"><font size="4">STRENGTH OF MATERIALS</font></td>
	<td id="tt"><font size="4">5</font></td>
	<td id="tt"><font size="4"><font size="4">756225</font></td>
	
</tr>
<tr>
	<td id="tt"><font size="4">TRANSPORTATION LAB</font></td>
	<td id="tt"><font size="4">8</font></td>
	<td id="tt"><font size="4"><font size="4">289276</font></td>
	
</tr>

</table>




<?php
include("footer.php");

?>

</body>

</html>