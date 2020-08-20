<?php
$servername="localhost";
$username="root";
$password="password";
$dbname="edu";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($_POST['register']!='')
{
//printr("$_REQUEST");	
	
$sql = "insert into login(username,password,age,gender)
VALUES ('".$_POST['uname']."', '".$_POST['pwd']."','".$_POST['age']."', '".$_POST['gender']."')";
//echo $sql;
if (mysqli_query($conn, $sql)) 
	{
	 echo"";
    } 
else 
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}
?>

<html>
<body>
<center>
<br>
<br>
<font size=5 color="Black"><b>Register</b></font> 
<form method=post>
<table  >
    <tr>
       <td>Username:</td>
	   <td><input type="text" name="uname"></td>
    </tr>
	<tr>
       <td>Password:</td>
       <td><input type="text" name="pwd"</td>
	</tr>  
	<tr>
       <td>Age:</td>
       <td><input type="text" name="age"</td>
	</tr>  	
	<tr>
	   <td>Gender:</td>
       <td><input type="text" name="gender"</td>
	</tr>
	<tr>
	    <td colspan=2><center><input type="submit" id="register" name="register"</center></a></td>
    </tr>
	<tr>
	    <td colspan=2><a href=edu.php><center>Login</center></a></td>
    </tr>
	
</table>
</form>	
</center>
</body> 
</html>