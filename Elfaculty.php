<!DOCTYPE html>
<head>
<title> Electrical Engg</title>
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
	<td id="hg"><b> Electrical Engg. </b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Electrical.php" >Department at a Glance</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Elhod.php" >From HOD’s Desk</a></b> </td>
</tr>
<tr>
	<td class="colorchange" ><b> <a href = "Elfaculty.php" >Faculty</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Elfacilities.php">Facilities</a></b> </td>
	<tr>
	
	<td class="colorchange"><b> <a href = "Eldownload.php"  >Downloads</a></b> </td>
</tr>

</table>

	
	


<table id="t02" align="right"  > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="elhod.jpg" width="150" height="200" ></td>
		<td width="45%"><font size="4" >Name of Faculty: Mrs. K.M.Patil<br>
			Designation: Head of Department<br>
			Qualification : B.E. Electronics Engineering M.Tech. Electronics Technology<br>
			Experience : 10 Years</font></td>
		
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="elfaculty.jpg" width="150" height="200" > </td>
		<td width="45%"> <font size="4" > Name of Faculty: Mr. A. V. Khamkar<br>
			Designation: Lecturer<br>
			Qualification : B.E. Electrical Engineering<br>
			Experience : 6 Years </font></td>
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="elfaculty1.jpg" width="150" height="200" > </td>
		<td width="45%"> <font size="4" >Name of Faculty: Mr. P. P. Mahajan<br>
			Designation: Lecturer<br>
			Qualification :  B.E. Electronics Engineering<br>
			Experience : 8 Years </font></td>
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="elfaculty2.jpg" width="150" height="200" ></td>
		<td width="45%"> <font size="4" >Name of Faculty:  Mrs. S.D. Parmaj<br>
			Designation: Lecturer<br>
			Qualification : B.E. Electrical Engineering<br>
			Experience : 5 Years </font></td>
	</tr>

	
</table>

<table id="t02" align="right" cellspacing="10" > 
	<tr>	
		<td  class="zoom" width="15%">  <img src="mefacultywomen.jpg" width="150" height="200" ></td>
		<td width="45%"> <font size="4" >Name of Faculty:  Mr. P. C. Waragade<br>
			Designation: Lecturer<br>
			Qualification : B.E. Electrical Engineering<br>
			Experience : 2 Years </font></td>
	</tr>

	
</table>


<?php
include("footer.php");

?>

</body>

</html>