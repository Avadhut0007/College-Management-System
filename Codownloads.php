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
		<h2 style=color:brown> Downloads</h2>
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
<td><font size="4">
Syllabus- <a href="https://msbte.org.in/portal/curriculum-search/"> <button>Click here for Syllabus</button></a> <br><br>
Question Paper – <a href="https://msbte.org.in/portal/question-paper-search/"> <button>Click here for Question Paper</button></a><br><br>
Model Answer Paper- <a href="https://msbte.org.in/portal/model-answer-search/ "> <button>Click here for Model Answer Paper</button> </a> <br> </font>
</td>
</tr>
</table>




<?php
include("footer.php");

?>

</body>

</html>