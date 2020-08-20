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
VALUES ('".$_POST['name']."', '".$_POST['ph']."', '"."john@abc.com"."')";

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

<form method="POST" >
Name: <input type="text" name="name" >
<br>
Email: <input type="text" name="ph" > 

<input name="submit" id="submit" type="submit">

</form>
</body>
</html>