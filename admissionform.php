<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<head>
<title> Admission </title>

<style>
#add{
  border: 1px solid black;
 
   background-color:lightgray;
}
#btn{
	color:white;
	 border-radius:25px;
   background-color:green;
  
   }
   
  a
{
	text-decoration:none;
	color:white;
}

   
   #btn:hover{
background-color:blue;
}
  
  table, th, td {
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}
</style>

<?php
include("header.php");

?> 
</head>
<body>
		<h2 align=center>Admission Form</h2>
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
<form action="" autocomplete="off" onsubmit="return validation()">
	<table align="center" border="0" cellspacing="15" id="add"> 
		<tr>
		
			<td> <b> First Name :</b><td><input type="text" name="first" id="first" placeholder="Enter First Name" required /> </td>
  </tr>
  
  <tr>
		
			<td> <b> Middle Name :</b><td><input type="text" name="middle" id="middle" placeholder="Enter Middle Name" required /> </td>
  </tr>
  
  <tr>
			<td><b> Last Name :</b><td><input type="text" name="last" id="last" placeholder="Enter Last Name" required /></td>
		</tr>
	<tr>
		<td><b> Gender :</b><td><input type="radio" name="gender" value=Male /> Male
								<input type="radio" name="gender" value=Female /> Female
								<input type="radio" name="gender" value=Other /> Other</td>
	</tr>
		
		
	<tr>  
		<td> <b>Enter Your Email :</b><td><input type="email" name="email" id="email" placeholder="Enter Your Email" required />  </td>
	</tr>

	<tr>
		<td><b> Admission for year :</b><td><input type="radio" name="addyear" value=FY /> FY
											<input type="radio" name="addyear" value=DSY /> DSY</td>
	</tr>
	
	
	<tr>
		<td>
		<b>Date Of Birth :</b><td><input type="date" name="dob"    required /> </td>
			
		</tr>
		
		<tr>
		<td><b>Address :</b><td>
		<textarea name="add"></textarea>
		</td>
	</tr>
	
	
	<tr>
		<td> <b>Contact No :</b><td><input type="contact" name="contact" id="contact" placeholder="Enter Your Contact" required /></td>
	</tr>
	
	<tr>
		<td> <b> Parent's Contact No :</b><td><input type="contact" name="pcontact" id="contact" placeholder="Enter Parent's Contact" required /></td>
	</tr>

	<tr>
		<td align="center" colspan="2"> <input type="submit" value="Submit" id="btn"></td>
	</tr>
</form>
</table>


<?php

$fn=$_GET['first'];
$mn=$_GET['middle'];
$ln=$_GET['last'];
$gender=$_GET['gender'];
$em=$_GET['email'];
$addyear=$_GET['addyear'];
$dob=$_GET['dob'];
$add=$_GET['add'];
$cn=$_GET['contact'];
$pcn=$_GET['pcontact'];


$query="INSERT INTO ADDMISSION VALUES('$fn','$mn','$ln','$gender','$em','$addyear','$dob','$add','$cn','$pcn')";

$data=mysqli_query($conn,$query);


?>
		<h2 align=left><a href="http://localhost:8089/Collegeproject/Admission.php"> Go back </a> </h2>


<?php
include("footer.php");

?>

</body>
</html>