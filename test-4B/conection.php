<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12358028";
$password = "4bITnETwzf";
$dbname = "sql12358028";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>