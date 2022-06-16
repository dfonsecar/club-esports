<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <div class="container">
        <?php include "includes/header.php" ?>
        <section>
            <h1 class="centrat">Club</h1>
        </section>
        <section class="centrat">
            <a class="btn btn-primary mb-5" href="insertar/insertar_nou_club.php">INSERTAR CLUB</a>
        </section>
        <section class="centrat">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NOM JUGADOR</td>
                        <td>CREADORS_DE_CONTINGUT</td>
                        <td>NOM PERSONAL</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT * FROM Club";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['idClub'] . "</td>
                            <td>" . $row['jugadors'] . "</td>
                            <td>" . $row['creadorsdecontingut'] . "</td>
                            <td>" . $row['personal'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar/insert_nou_club.php?idClub=" . $row['idClub'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/delete_club.php?idClub=" . $row['idClub'] . "'><i class='bi bi-trash3-fill'></i></a>
                            </td>
                            </tr>";
                    } ?>
                </thead>
            </table>
        </section>
        </section>
    <footer>
    Gmail de Contacte:
    jmunozt@esliceu.net
    dfonsecar@esliceu.net
    </footer>
    </div>
</body>

</html>