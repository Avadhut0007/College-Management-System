<!DOCTYPE html>
<head>
<title> Electrical Engg</title>
<style>
p{
	color:gray;
}

th, td {
	
  padding: 10px;
}

a
{
	text-decoration:none;
	color:Black;
}

.colorchange
{
 
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
		<h2 style=color:brown> Department at a Glance</h2>
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

	
	

<table align="right" border="0" id="type">


<tr>
	<td id="tt"><b><font size="4">Diploma course offered</font></b></td>
	<td id="tt"><font size="4"><font size="4">Diploma  (Electrical Engineering)</font></td>
	
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
	<td id="tt" colspan="2"> <font size="4">The Department of Electrical Engineering offers Diploma programme in Electrical Engineering, affiliated & 
	recognized by MSBTE, Mumbai. There are 09 well equipped, well connected and sufficiently staffed labs exclusively for research work. It is Proud 
	to mention that our academic results are excellent with students every year and they also qualify for competitive examinations like MSEB, DRDO, 
	BHEL etc. Our Alumni are now at the top positions in various organizations. The students body EESA has been actively organizing and also
	participating in various technical activities and social welfare events</font></td>
	
</tr>
</table>




<?php
include("footer.php");

?>

</body>

</html>