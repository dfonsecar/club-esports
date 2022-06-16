<!DOCTYPE html>
<html>

<?php include "includes/head.php" ?>

<body>
    <div class="container">
        <?php include "includes/header.php" ?>
        <section>
            <h1 class="centrat">Director</h1>
        </section>
        <section class="centrat">
            <a class="btn btn-primary mb-5" href="insertar/insertar_nou_director.php">INSERTAR DIRECTOR</a>
        </section>
        <section class="centrat">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Cognoms</td>
                        <td>Direccio</td>
                        <td>Opcions</td>
                    </tr>
                    <?php
                    $query = "SELECT * FROM Director";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>" . $row['idDirector'] . "</td>
                            <td>" . $row['firstname'] . "</td>
                            <td>" . $row['lastname'] . "</td>
                            <td>" . $row['adreca'] . "</td>
                            <td>
                            <a class='btn btn-primary' href='insertar/insert_nou_director.php?idDirector=" . $row['idDirector'] . "'><i class='bi bi-pencil-fill'></i></a>
                            <a class='btn btn-danger' href='scripts/delete_director.php?idDirector=" . $row['idDirector'] . "'><i class='bi bi-trash3-fill'></i></a>
                            </td>
                            </tr>";
                    } ?>
                </thead>
            </table>
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