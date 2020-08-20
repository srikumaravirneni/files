
<?php

$servername="localhost";
$username="root";
$password="password";
$dbname="voting";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
  
if($_POST['submit']!=''){
$sql= "SELECT * FROM login WHERE Voting_ID ='".$_POST['uname']."' and pass ='".$_POST['pwd']."' ";


$result = mysqli_query($con,$sql) or die(mysqli_error($con));
//echo mysqli_num_rows($result);


$check = mysqli_fetch_array($result);


if(isset($check))
	{
		header('Location:vote.php');
	//echo "<html><a href=vote.php></html>";	
	}
else
	{
		header('Location:votinglogin.php');
	//echo  "<html><a href=votinglogin.php></html>";	
	}
}
?>

<html>
<body>
<center>
<br>
<br>
<font size=5 color="Black"><b>Login</b></font> 
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
	    <td colspan=2><center><input type="submit" id="submit" name="submit"</center></a></td>
    </tr>
	
</table>	   
</form>
	   
	   
</body>	   
</html>