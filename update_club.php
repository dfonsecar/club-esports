<?php

include "../includes/database.php";

$id = $_POST["idClub"];
$Jugadors = $_POST["jugadors"];
$Creadors_de_contingut = $_POST["creadorsdecontingut"];

$query = "UPDATE Club SET jugadors = '$Jugadors', creadorsdecontingut = '$Creadors_de_contingut' WHERE idClub = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../club.php');
}else{
    echo mysqli_error($dbh);
}

?>