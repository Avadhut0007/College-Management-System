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
		<h2 style=color:brown> From HOD’s Desk</h2>
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

	
	


<table id="t02" align="right" cellspacing="10" height="500"> 
	<tr>	
		<th id="t02" class="zoom"> <center> <img src="cihod.jpg" width="150" height="200" > </center></th>
	</tr>
	
<tr>
		<th id="t02"><p> <font size="3" >
			Mrs. N. M. Mulla<br>
			Head of Department<br> </p>
</th>
</tr>

<tr>
		<td id="t02"><p> <font size="3" >
			Welcome to the Department of Civil Engineering, D. Y. Patil College of Engineering & Polytechnic, Talsande. Civil Engineering branch
			is the most needed branch to the society. It fulfills the most essential need of human being i. e. shelter. Civil Engineer must be 
			hard as well as smart worker and sincere to provide the services through various sub branches such as Irrigation, Transportation, 
			and Environment Engineering etc. Civil Engineering is a Professional Engineering discipline that deals with the design, construction 
			and maintenance of the physical and naturally built environment, including works such as bridges, roads, canals, dams and buildings.<br><br>
			
			In D. Y. Patil College of Engineering & Polytechnic, Talsande, we deliver theoretical as well as practical knowledge to students.
			We always try to update our student to industry. That is our main strength. The department has developed strong relation between 
			industry and academics, both within and outside Kolhapur. Besides the high quality teaching, the department is actively involved in 
			research, consultancy and provides high quality technical advisory support through consultancy to various organizations.<br> </font></p>
</td>
</tr>

<tr>
		<td id="t02">
</td>
</tr>
	
</table>




<?php
include("footer.php");

?>

</body>

</html>