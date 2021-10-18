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

	
	


<table id="t02" align="right"  > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="salokhe.jpg" width="150" height="200" ></td>
		<td width="45%"><font size="4" >Name of Faculty: Miss S. S. Salokhe<br>
			Designation: HOD, Assistant Professor<br>
			Qualification : M.E. Computer, B.E. Computer Engineering<br>
			Experience : 5 Years</font></td>
		
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="kumbharsir.jpg" width="150" height="200" > </td>
		<td width="45%"> <font size="4" > Name of Faculty: Mr. R. S. Kumbhar<br>
			Designation: Lecturer<br>
			Qualification : B.E. Computer Engineering<br>
			Experience : 6 Years </font></td>
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="powarmam.jpg" width="150" height="200" > </td>
		<td width="45%"> <font size="4" >Name of Faculty: Miss S. V. Powar<br>
			Designation: Lecturer<br>
			Qualification :  B.E. Computer Engineering<br>
			Experience : 5 Years </font></td>
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="komalmam.jpg" width="150" height="200" ></td>
		<td width="45%"> <font size="4" >Name of Faculty:  Miss K. M. Ghorapade<br>
			Designation: Lecturer<br>
			Qualification : B.E. Computer Engineering<br>
			Experience : 2 Years Teaching | 2 Years Industrial</font></td>
	</tr>

	
</table>


<?php
include("footer.php");

?>

</body>

</html>