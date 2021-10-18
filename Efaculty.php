<!DOCTYPE html>
<head>
<title> Electronics Engg</title>
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

.zoom
{
transition:transform 0.5s;	
}
.zoom:hover
{
	transform:scale(1.1);
}
</style>
<?php
include("header.php");

?>
</head>

<body>
		<h2 style=color:brown> Faculty</h2>
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

	
	


<table id="t02" align="right"  > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="ehod.jpg" width="150" height="200" ></td>
		<td width="45%"><font size="4" >Name of Faculty: Mr. U. K. Patil <br>
			Designation: HOD, Assistant Professor<br>
			Qualification :  B.E. Electronics Engineering M.E. Electronics<br>
			Experience :  Industrial : 2 Years | Teaching : 10 Years</font></td>
		
	</tr>

	
</table>




<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="efaculty.jpg" width="150" height="200" > </td>
		<td width="45%"> <font size="4" > Name of Faculty: Mr. U. A. Avalekar<br>
			Designation: Lecturer<br>
			Qualification : B.E. Electronics Engineering M.Tech. Embedded Systems<br>
			Experience : Industrial : 1 Year | Teaching : 08 Years </font></td>
	</tr>

	
</table>
<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="efaculty1.jpg" width="150" height="200" > </td>
		<td width="45%"> <font size="4" >Name of Faculty: Mr. V. V. Chougule<br>
			Designation: Lecturer<br>
			Qualification :  B.E. Electronics Engineering<br>
			Experience :  Teaching : 07 Years </font></td>
	</tr>

	
</table>


<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="efaculty2.jpg" width="150" height="200" ></td>
		<td width="45%"> <font size="4" >Name of Faculty:  Mrs. S. S. Laykar<br>
			Designation: Lecturer<br>
			Qualification : B.E. Electronics Engineering M.E. Electronics<br>
			Experience : Teaching : 05 Years</font></td>
	</tr>

	
</table>


<?php
include("footer.php");

?>

</body>

</html>