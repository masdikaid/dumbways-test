<?php
include "conection.php";

$sql = 'INSERT INTO type_tb (name)
VALUES ("'.$_POST["name"].'")';

if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>