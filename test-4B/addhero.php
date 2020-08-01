<?php
include "conection.php";

$sql = 'INSERT INTO heroes_tb (name, type_id)
VALUES ('.$_POST["name"].', '.$_POST["typeofhero"].')';

if (mysqli_query($conn, $sql)) {
    header('index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>