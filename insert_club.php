<?php

include "../includes/database.php";

$Jugadors = $_POST["jugadors"];
$Creadors_de_contingut = $_POST["creadorsdecontingut"];
$Personal = $_POST["personal"];

$query = "INSERT INTO Club (jugadors,creadorsdecontingut,personal) VALUES('$Jugadors','$creadors_de_contingut','$Personal')";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../club.php');
}else{
    echo mysqli_error($dbh);
}

?>