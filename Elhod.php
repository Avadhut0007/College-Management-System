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
		<h2 style=color:brown> From HOD’s Desk</h2>
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

	
	


<table id="t02" align="right" cellspacing="10" height="500"> 
	<tr>	
		<th id="t02" class="zoom"> <center> <img src="elhod.jpg" width="150" height="200" > </center></th>
	</tr>
	
<tr>
		<th id="t02"><p> <font size="3" >
			Mrs. K. M. Patil<br>
			Head of Department<br> </p>
</th>
</tr>

<tr>
		<td id="t02"><p> <font size="3" >
			The Department of Electrical Engineering established in the year 2009 offers Diploma programme of 3 years duration in Electrical Engineering
			having an intake of 54, approved by AICTE New Delhi & DTE, Maharashtra & affiliated to MSBTE, Mumbai.<br><br>

			The Department of Electrical Engineering has 09 better equipped practical labs. These labs are so useful for students for research and 
			project work. Thus students have achieved Success in project competition as well as paper presentation competition. The Department 
			provides quality education and practical solutions in the areas of Electrical Machines, Power Systems, Power Electronics and Drives, 
			Advanced Switch gear and Protection, Basic Electronics, Instrumentation Systems, Control Systems, etc.<br><br>
			
			We visit various Industrial areas in electrical fields; we also invite industrial experts for the betterment of students. We regularly
			conduct departmental parent meets. Parent suggestions are very important to us. It is very beneficial in the growth of students as well 
			as the department. Our Alumni are now at the top positions in various organizations. The student’s body EESA has been actively organizing 
			and also participating in various technical activities and social welfare events.<br> </p>
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