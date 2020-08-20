<?php
include_once "connection.php";
session_start();
print_r($_SESSION);

session_destroy();

header('Location: edu.php');
print_r($_SESSION);
?>
