<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <div class="container">
        <?php include "includes/header.php" ?>
        <section>
            <h1 class="centrat">Jugador</h1>
        </section>
        <section class="centrat">
            <a class="btn btn-primary mb-5" href="insertar nous/insertar un nou empleat.php">INSERTAR JUGADOR</a>
        </section>
        <section class="centrat">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Cognoms</td>
                        <td>Direccio</td>
                        <td>Numero_Telefon</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT * FROM Jugador";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['idJugador'] . "</td>
                            <td>" . $row['firstname'] . "</td>
                            <td>" . $row['lastname'] . "</td>
                            <td>" . $row['adreca'] . "</td>
                            <td>" . $row['telefon'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar/insert_nou_jugador.php?idJugador=" . $row['idJugador'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/delete_jugador.php?ID=" . $row['idJugador'] . "'><i class='bi bi-trash3-fill'></i></a>
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