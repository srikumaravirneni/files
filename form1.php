<html>
<?php
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "<html>
<body>

<form method="get" >
Uid: <input type="text" name="name"  >
<br>
Pwd: <input type="text" name="email" > 

<input type="submit"> 

</form>
</body>
</html>"
?>
