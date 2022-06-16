<?php

include "../includes/database.php";

$id = $_GET["idDirector"];

$query = "DELETE FROM Director WHERE idDirector='$id'";

$result = mysqli_query($dbh, $query);

if($result) {
    header('Location: ../director.php');
}else{
    echo mysqli_error($dbh);
}

?>