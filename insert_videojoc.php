<?php

include "../includes/database.php";

$nom = $_POST["firstname"];
$n_jugadors = $_POST["njugadors"];

$query = "INSERT INTO Videojocs (firstname,njugadors) VALUES('$nom','$n_jugadors')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../videojocs.php');
}else{
    echo mysqli_error($dbh);
}

?>