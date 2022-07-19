<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "db_contact";
 $con = mysqli_connect('localhost', 'root', '','db_contact');
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>