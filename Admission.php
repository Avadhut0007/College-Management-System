<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<head>
<title> Admission </title>


<style>

table, th, td {
  border-collapse: collapse;
}
th, td {
  padding: 10px;
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
   
   #type
	{
		height: 95px;
		width: 600px;
		border: 0;
  		outline: 0;
  		background: transparent;
  		
  		color:black;
  		font-size: 15px;
	}
	#tt
	{
		
		border: 0;
  		outline: 0;
  		background: transparent;
  		border-bottom: 1px solid brown;
  		color:black;
  		font-size: 15px;
	}
   
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
  
</style>
<?php
include("header.php");

?> 
</head>

<body>
<h2 align=center>Admission</h2>
<br>
<table align="left"  border="1"  style="background-color:rgb(148, 184, 184)" width="300" >
<tr>
	<td class="colorchange"><b> <a href = "Feestrcuture.php"  >Fee Strcture </a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "admissionform.php" >Admission Form</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Courses.php" >Courses</a></b> </td>
</tr>
<tr>
	<td class="colorchange"><b> <a href = "Document.php" >Documents Required</a></b> </td>
</tr>

</table>

		
			 
		
	
	
<table  border="0" id="type" cellspacing="10">

<tr>
<th colspan="4" align="left" id="tt"><font size="4.5">Contact Details</font></th>
</tr>
<tr>
<th  id="tt"><font size="4.5">Sr no.</font></th>
<th  id="tt"><font size="4.5">Name</font></th>
<th  id="tt"><font size="4.5">Designation</font></th>
<th  id="tt"><font size="4.5">Mobile No.</font></th>
</tr>

<tr>
<td  id="tt"><font size="4.5">1.</font></td>
<td  id="tt"><font size="4.5">Dr. Khot J. A.</font></td>
<td  id="tt"><font size="4.5">Principal</font></td>
<td  id="tt"><font size="4.5">9823086880</font></td>
</tr>
<tr>
<td  id="tt"><font size="4.5">2</font></td>
<td  id="tt"><font size="4.5">Mr. Bhagaje P. M.</font></td>
<td  id="tt"><font size="4.5">Register</font></td>
<td  id="tt"><font size="4.5">9860618828</font></td>
</tr>
<tr>
<th  colspan="4" id="tt"><font size="4.5">Basic Science & Humanities</font></th>
</tr>
<tr>
<td  id="tt"><font size="4.5">3</font></td>
<td  id="tt"><font size="4.5">Mr. Koli S.Y.</font></td>
<td  id="tt"><font size="4.5">HOD –Basic Science & Humanities</font></td>
<td  id="tt"><font size="4.5">7038622092</font></td>
</tr>
<tr>
<td  id="tt"><font size="4.5">4</font></td>
<td  id="tt"><font size="4.5">Miss More A. A.</font></td>
<td  id="tt"><font size="4.5">Lecturer</font></td>
<td  id="tt"><font size="4.5">9767600938</font></td>
</tr>
<tr>
<th  colspan="4" id="tt"><font size="4.5">Computer Engineering</font></th>
</tr>
<tr>
<td  id="tt"><font size="4.5">5</font></td>
<td  id="tt"><font size="4.5">Miss Salokhe S. A</font></td>
<td  id="tt"><font size="4.5">HOD – Computer Engineering</font></td>
<td  id="tt"><font size="4.5">9970939958</font></td>
</tr>
<tr>
<td  id="tt"><font size="4.5">6</font></td>
<td  id="tt"><font size="4.5">Mr. Kumbhar R. S.</font></td>
<td  id="tt"><font size="4.5">Lecturer</font></td>
<td  id="tt"><font size="4.5">8956023924</font></td>
</tr>
<tr>
<th  colspan="4" id="tt"><font size="4.5">Mechanical Engineering</font></th>
</tr>
<tr>
<td  id="tt"><font size="4.5">7</font></td>
<td  id="tt"><font size="4.5">Mr. Mohite D. M.</font></td>
<td  id="tt"><font size="4.5">HOD – Mechanical Engineering</font></td>
<td  id="tt"><font size="4.5">9975233505</font></td>
</tr>
<tr>
<td  id="tt"><font size="4.5"></font>8</td>
<td  id="tt"><font size="4.5">Mr. Mane O. P.</font></td>
<td  id="tt"><font size="4.5">Lecturer</font></td>
<td  id="tt"><font size="4.5">8149531163</font></td>
</tr>
<tr>
<th  colspan="4" id="tt"><font size="4.5">Electrical Engineering</font></th>
</tr>
<tr>
<td  id="tt"><font size="4.5">9</font></td>
<td  id="tt"><font size="4.5">Mrs.Patil K. M.</font></td>
<td  id="tt"><font size="4.5">HOD – Electrical Engineering</font></td>
<td  id="tt"><font size="4.5">8669313169</font></td>
</tr>
<tr>
<td  id="tt"><font size="4.5">10</font></td>
<td  id="tt"><font size="4.5">Mr. Khamkar A. V.</font></td>
<td  id="tt"><font size="4.5">Lecurer</font></td>
<td  id="tt"><font size="4.5">9021450222</font></td>
</tr>
<tr>
<th  colspan="4" id="tt"><font size="4.5">E & TC Engineering</font></th>
</tr>
<tr>
<td  id="tt"><font size="4.5">11</font></td>
<td  id="tt"><font size="4.5">Mr. Patil U. K.</font></td>
<td  id="tt"><font size="4.5">HOD – E & TC Engineering</font></td>
<td  id="tt"><font size="4.5">8698754920</font></td>
</tr>
<tr>
<td  id="tt"><font size="4.5">12</font></td>
<td  id="tt"><font size="4.5">Mr. Avalekar U. A.</font></td>
<td  id="tt"><font size="4.5">Lecurer</font></td>
<td  id="tt"><font size="4.5">9096171100</font></td>
</tr>
<tr>
<th  colspan="4" id="tt"><font size="4.5">Civil Engineering</font></th>
</tr>
<tr>
<td  id="tt"><font size="4.5">13</font></td>
<td  id="tt"><font size="4.5">Mrs. Mulla N. M.</font></td>
<td  id="tt"><font size="4.5">HOD – Civil Engineering</font></td>
<td  id="tt"><font size="4.5">7972895077</font></td>
</tr>
<tr>
<td  id="tt"><font size="4.5">14</font></td>
<td  id="tt"><font size="4.5">Miss Gilbile M. J.</font></td>
<td  id="tt"><font size="4.5">Asst. Professor</font></td>
<td  id="tt"><font size="4.5">8149845343</font></td>
</tr>
</table>




<?php
include("footer.php");

?>

</body>
</html>