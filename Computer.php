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
		<h2 style=color:brown> Departments at a Glance</h2>
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
	<td id="tt"><b><font size="4">Diploma course offered</font></b></td>
	<td id="tt"><font size="4"><font size="4">Diploma  (Computer Engineering)</font></td>
	
</tr>
<tr>
	<td id="tt"><b><font size="4">UG Course Duration</font></b></td>
	<td id="tt"><font size="4">3 years</font></td>
	
</tr>
<tr>
	<td id="tt"><b><font size="4">Approved by</font></b></td>
	<td id="tt"><font size="4">AICTE, New Delhi& DTE, Maharashtra</font></td>
	
</tr>
<tr>
	<td id="tt"><b><font size="4">Affiliated to</font></b></td>
	<td id="tt"><font size="4">MSBTE, Mumbai</font></td>
	
</tr>
<tr>
	<td id="tt"><b><font size="4">Year of Establishment</font></b></td>
	<td id="tt"><font size="4">2009</font></td>
	
</tr>
<tr>
	<td id="tt"><b><font size="4">Intake</font></td>
	<td id="tt"><font size="4">54</font></td>
	
</tr>

<tr>
	<td id="tt" colspan="2"> <font size="4">The computer science of engineering department has been established in 2009. D. Y. Patil education society’s one 
	of the giant technical education society in Maharashtra to provided better technical education to empower youth to contribute service 
	to society. This legacy has been adopted by our department to spreading computer science and engineering knowledge. In our department
	have full equipped laboratory, class room, licensed software’s and modern teaching aids. Experienced, dynamic and young teaching faculty
	contributes to the dissemination of technical knowledge and solves the real-time problems along with the students.</font></td>
	
</tr>
</table>




<?php
include("footer.php");

?>

</body>

</html>