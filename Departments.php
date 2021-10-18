<!DOCTYPE html>
<head>
<title>Departments </title>
<style>
table, th, td {
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}


#t02{

  width:100%;    
 background-color:lightgray
 }
 
 #t03{
   width:80%; 
   }
   
   #t04 {

  width:60%;    
 background-color:brown;
}
   
#t2 {

  width:100%;
  
	
 background-color:rgb(148, 184, 184);
}


a
{
	text-decoration:none;
	color:white;
}

.colorchange
{
border-radius:10px;	
}

.colorchange:hover
{
	background-color:darkgray;
	
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

<body >

	
	
		<h2 align=center> Departments</h2>
			<center> <table id="t2"> </center>
	<tr>
		<h1><th class="colorchange" width="20%"><a href="http://localhost:8089/Collegeproject/Computer.php"> Computer Sci.& Engineering</a></th>
			<th class="colorchange" width="20%"><a href="http://localhost:8089/Collegeproject/Mechanical.php"> Mechanical Engineering</a><th>
			<th class="colorchange" width="20%"><a href="http://localhost:8089/Collegeproject/Electrical.php"> Electrical Engineering</a></th>
			<th class="colorchange" width="20%"><a href="http://localhost:8089/Collegeproject/Civil.php"> Civil Engineering</a></th>
			<th class="colorchange" width="20%"><a href="http://localhost:8089/Collegeproject/EandTC.php"> Elec.& Telecommuication Enginnering</a></th> 
		</th> </h1>

	</tr>
	</table>
	
	<center> <table id="t02"> </center>
	<tr>
		<h1 >	<th class="zoom"><img  src="departments.jpg" width="350" height="200"></th>
		<th class="zoom"><img  src="departments1.jpg" width="350" height="200"></th>
		<th class="zoom"><img  src="departments2.jpg" width="350" height="200"></th>
		 </h1>

	</tr>
	</table>
	
	<h4 align=left>
	<table id="t03">
	<tr>
	<th>
		<h3><b>Departments </b></h3>
		<p style="color:brown">Engineering is the discipline and profession that applies scientific theories, mathematical methods, and 
		empirical evidence to design, create, and analyze technological solutions cognizant of safety, human factors, physical laws, 
		regulations, practicality, and cost. In the contemporary era, engineering is generally considered to consist of the major primary 
		branches of chemical engineering, civil engineering, electrical engineering, and mechanical engineering. There are numerous other
		engineering subdisciplines and interdisciplinary subjects that may or may not be part of these major engineering branches.
		</p>
		
		</th>
		</tr>
	</table>
	</h4>	
		



<?php
include("footer.php");

?>

</body>
</html>