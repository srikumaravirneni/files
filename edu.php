<?php
session_start();
//print_r($_SESSION);

//print_r($_SESSION);
include_once "connection.php";

if($_POST['submit']!=''){
$sql= "SELECT username,password FROM login WHERE username ='".$_POST['uname']."' and password ='".$_POST['pwd']."' ";

$_SESSION["name"]=$_POST["uname"];
$result = mysqli_query($con,$sql) or die(mysqli_error($con));
$nme = $_POST['uname'];

$check = mysqli_fetch_array($result);
if(isset($check))
	{
		$_SESSION["name"]=$_POST['uname'];
		
		header('Location: eduhp.php');
	//echo "<html><a href=eduhp.php></html>";	
	}
else
	{
		header('Location: edu.php');
	//echo  "<html><a href=edu.php></html>";	
	}
}
?>
<html>
<body>
<center>
<br>
<br>
<font size=5 color="Black"><b>Login</b></font> 
<form method="post">
<table>
    <tr>
       <td>Username:</td>
	   <td><input type="text" name="uname"></td>
    </tr>
	
	<tr>
       <td>Password:</td>
       <td><input type="text" name="pwd"</td>
	</tr>  
	
    <tr>
	    <td colspan=2><center><input type="submit" id="submit" name="submit"</center></a></td>
    </tr>
	
	<tr>
	    <td colspan=2><a href=edur.php><center>New to this site? Register here!</center></a></td>
    </tr>
	
</table>	   
</form>
	   
	   
</body>	   
</html>
	   