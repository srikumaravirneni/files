<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($_POST['submit']){
$sql = "INSERT INTO data (name,phone_number,emailid)
VALUES ('".$_POST['sname']."', '".$_POST['fname']."', '"."john@abc.com"."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<html>
<body>
<center>
<font size=7 color="Sky blue"><b>STUDENT REGISTRATION FORM</b></font> 
</center>
<hr color=black>
<form method="POST" >

<table border=1>
	<tr >
		<td >Student Name:</td>
		<td> <input type="text" name="sname" ></td>
		<td>Father Name: </td>
		<td><input type="text" name="fname" ></td>
	</tr>
	<tr>
		<td>Phone number:</td>
		<td><input type="text" name="ph" > </td>
	</tr>
	<tr>
		<td>Email id:</td>
		<td><input type="text" name="eid" > </td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td ><input type="radio" name="radio" >Male </td>
		<td><input type="radio" name="radio" >Female</td>
	</tr>
	<tr>
		<td>Date of birth:</td>
		<td>Year <select id="YYYY" name="YYYY"
		<?php
  for($i=1900;$i<=date('Y');$i++)
	{
    echo '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
    }
?></td>
<td>Month <select id="MM" name="MM"
		<?php
  for($i=0;$i<=12;$i++)
	{
    echo '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
    }?>
</td>
<td>Day <select id="MM" name="MM" 
		<?php
  for($i=0;$i<=31;$i++)
	{
    echo '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
    }?>
</td>
</tr>	
    <tr>
		<td>Class:</td>
		<td><select id="class" name="class"
		<?php
  for($i=0;$i<=10;$i++)
	{
    echo '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
    }
?>
	</select></td></tr>	


<tr>
<td>
<input name="submit" id="submit" type="submit">
</td>
</tr>
</table>
</form>
</body>
</html>