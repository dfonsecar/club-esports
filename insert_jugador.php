<?php

include "../includes/database.php";

$nom = $_POST["firstname"];
$direccio = $_POST["adreca"];
$n_telefon = $_POST["telefon"];
$email = $_POST["correu"];
$Pais = $_POST["pais"];

$query = "INSERT INTO Jugador (firstname,adreca,telefon,correu,pais) VALUES('$nom', '$direccio', '$n_telefon', '$email', '$Pais')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../jugador.php');
}else{
    echo mysqli_error($dbh);
}

?>