<?php

include "../includes/database.php";

$id = $_GET["idVideojocs"];

$query = "DELETE FROM Videojocs WHERE idVideojocs='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../videojocs.php');
}else{
    echo mysqli_error($dbh);
}

?>