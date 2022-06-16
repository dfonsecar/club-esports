<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $Jugador = null;
    if (isset($_GET['idJugador'])) {
        $id_Jugador = $_GET['idJugador'];
        $query = "SELECT * FROM Jugador WHERE ID = '$id_Jugador' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $Jugador = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/nou_jugador.php';
    if ($Jugador != null) {
        $action = '../scripts/update_jugador.php';
    }
    ?>
    

    <section class="mb-5 mt-5">
        <h1 class="mb-5 mt-5">
        <?php
            if ($Jugador == null) {
                echo 'NOU JUGADOR';
            } else {
                echo 'EDITA EL JUGADOR';
            }
            ?>
        </h1>

    </section>
    <section>
        <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Nom</h6>
                    <input value="<?= $Jugador['firtsname']; ?>" type="text" name="Nom" maxlength="125" placeholder="Nom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Apellidos</h6>
                    <input value="<?= $Jugador['lastname']; ?>" type="text" name="Cognom" maxlength="125" placeholder="Cognom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>CP</h6>
                    <input value="<?= $Jugador['adreca']; ?>" type="text" name="CP" placeholder="Codi Postal" maxlength="10" required />
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
                if ($Jugador) {
                    echo "<input type='hidden' value='" . $Jugador['idJugador'] . "' name='idJugador'>";
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