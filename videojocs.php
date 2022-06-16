<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <div class="container">
        <?php include "includes/header.php" ?>
        <section>
            <h1 class="centrat">Videojocs</h1>
        </section>
        <section class="centrat">
            <a class="btn btn-primary mb-5" href="insertar/insert_nou_videojocs.php">INSERTAR NOU VIDEOJOC</a>
        </section>
        <section class="centrat">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>N_JUGADORS</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT * FROM Videojocs";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['idVideojocs'] . "</td>
                            <td>" . $row['firstname'] . "</td>
                            <td>" . $row['njugadors'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar/insert_nou_videojocs.php?idVideojocs=" . $row['idVideojocs'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/delete_videojocs.php?idVideojocs=" . $row['idVideojocs'] . "'><i class='bi bi-trash3-fill'></i></a>
                            </td>
                            </tr>";
                    } ?>
                </thead>
            </table>
        </section>
        <footer>
    Gmail de Contacte:
    jmunozt@esliceu.net
    dfonsecar@esliceu.net
        </footer>
    </div>
</body>

</html>