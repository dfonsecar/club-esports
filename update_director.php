<?php

include "../includes/database.php";

$id = $_POST["idDirector"];
$Firstname = $_POST["firstname"];
$Lastname = $_POST["lastname"];

$query = "UPDATE Director SET firstname = '$Firstname', lastname = '$Lastname' WHERE idDirector = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../director.php');
}else{
    echo mysqli_error($dbh);
}

?>