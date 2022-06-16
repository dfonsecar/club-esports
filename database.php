<?php

$dbh = mysqli_connect('localhost', '', '');
if (!$dbh) {
echo "Error db_connect: error en mysqli_connect user: (mal usuario/password?)<br>";
die;
}

if (!mysqli_select_db($dbh, 'club-esports')) {
echo "Error db_connect: error en mysqli_select_db: esports<br>";
die;
}
?>