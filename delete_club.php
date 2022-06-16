<?php

include "../includes/database.php";

$id = $_GET["idClub"];

$query = "DELETE FROM Club WHERE idClub='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../club.php');
}else{
    echo mysqli_error($dbh);
}

?>