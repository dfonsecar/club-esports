<?php

include "../includes/database.php";

$id = $_POST["idVideojocs"];
$Firstname = $_POST["firstname"];
$Njugadors = $_POST["njugadors"];

$query = "UPDATE Videojocs SET firstname = '$Firstname', njugadors = '$Njugadors' WHERE idVideojocs = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../videojocs.php');
}else{
    echo mysqli_error($dbh);
}

?>