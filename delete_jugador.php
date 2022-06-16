<?php

include "../includes/database.php";

$id = $_GET["IdJugador"];

$query = "DELETE FROM Jugador WHERE IdJugador='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugador.php');
}else{
    echo mysqli_error($dbh);
}

?>