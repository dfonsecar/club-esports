<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $Videojocs = null;
    if (isset($_GET['idVideojocs'])) {
        $id_Videojocs = $_GET['idVideojocs'];
        $query = "SELECT * FROM Videojocs WHERE ID = '$id_Videojocs' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $Videojocs = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/nou_videojoc.php';
    if ($Videojocs != null) {
        $action = '../scripts/update_videojocs.php';
    }
    ?>

    <section class="mb-5 mt-5">
        <h1 class="mb-5 mt-5">
        <?php
            if ($Videojocs == null) {
                echo 'NOU VIDEOJOC';
            } else {
                echo 'EDITA EL VIDEOJOC';
            }
            ?>
        </h1>

    </section>
    <section>
        <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Nom</h6>
                    <input value="<?= $Videojocs['firtsname']; ?>" type="text" name="Nom" maxlength="125" placeholder="Nom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Apellidos</h6>
                    <input value="<?= $Videojocs['lastname']; ?>" type="text" name="Cognom" maxlength="125" placeholder="Cognom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>CP</h6>
                    <input value="<?= $Videojocs['adreca']; ?>" type="text" name="CP" placeholder="Codi Postal" maxlength="10" required />
                </fieldset>
            </div>
            <div>
                <small id="emailHelp" class="form-text text-muted">reserved data</small>
            </div>
            <div class="form-group">
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_crear">Enviar</button>
                </fieldset>
            </div>
            <div class="form-group">
                <?php
                if ($Videojocs) {
                    echo "<input type='hidden' value='" . $Videojocs['idVideojocs'] . "' name='idVideojocs'>";
                }
                ?>
            </div>
        </form>
    </section>
</body>
<footer>
    Gmail de Contacte:
    jmunozt@esliceu.net
    dfonsecar@esliceu.net
</footer>
</html>