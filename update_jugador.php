<?php

include "../includes/database.php";

$id = $_POST["idJugador"];
$Firstname = $_POST["firstname"];
$Adreca = $_POST["adreca"];

$query = "UPDATE Jugador SET firstname = '$Firstname', adreca = '$Adreca' WHERE idJugador = '$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugador.php');
}else{
    echo mysqli_error($dbh);
}

?>