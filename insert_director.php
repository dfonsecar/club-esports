<?php

include "../includes/database.php";

$nom = $_POST["firstname"];
$cognom = $_POST["lastname"];
$email = $_POST["correu"];

$query = "INSERT INTO Director (firstname,lastname,correu) VALUES('$nom','$cognom','$email')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../director.php');
}else{
    echo mysqli_error($dbh);
}

?>