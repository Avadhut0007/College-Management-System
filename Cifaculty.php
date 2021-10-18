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

	
	


<table id="t02" align="right"  > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="cihod.jpg" width="150" height="200" ></td>
		<td width="45%"><font size="4" >Name of Faculty: Mrs. N. M. Mulla<br>
			Designation: HOD, Assistant Professor<br>
			Qualification :  B.E. Civil Engineering<br>
			Experience : 6 Years Teaching</font></td>
		
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="cifaculty.jpg" width="150" height="200" > </td>
		<td width="45%"> <font size="4" > Name of Faculty: Miss M. J. Gilbile<br>
			Designation: Lecturer<br>
			Qualification : B.E. <br>
			Experience : 3 Years Teaching </font></td>
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="mefacultywomen.jpg" width="170" height="200" > </td>
		<td width="45%"> <font size="4" >Name of Faculty: Miss P. R. Methe<br>
			Designation: Lecturer<br>
			Qualification :  B.E. <br>
			Experience : 1 Years Teaching  </font></td>
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="cifaculty1.jpg" width="150" height="200" ></td>
		<td width="45%"> <font size="4" >Name of Faculty:  Miss S. S. Suryawanshi<br>
			Designation: Lecturer<br>
			Qualification : B.E. <br>
			Experience : 2 Years Teaching </font></td>
	</tr>

	
</table>


<?php
include("footer.php");

?>

</body>

</html>