<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $Director = null;
    if (isset($_GET['idDirector'])) {
        $id_Director = $_GET['idDirector'];
        $query = "SELECT * FROM Director WHERE idDirector = '$id_Director' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $Director = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/nou_director.php';
    if ($Director != null) {
        $action = '../scripts/update_director.php';
    }
    ?>
    

    <section class="mb-5 mt-5">
        <h1 class="mb-5 mt-5">
        <?php
            if ($Director == null) {
                echo 'NOU DIRECTOR';
            } else {
                echo 'EDITA EL DIRECTOR';
            }
            ?>  
        </h1>

    </section>
    <section>
        <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Nom</h6>
                    <input value="<?= $Director['Nom']; ?>" type="text" name="Nom" maxlength="200" placeholder="Nom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Descripció</h6>
                    <input value="<?= $Director['Descripcio']; ?>" type="text" name="Descripcio" maxlength="255" placeholder="Descripció" required />
                </fieldset>
            </div>
            <div>
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_crear">Enviar</button>
                </fieldset>
            </div>
            <div class="form-group">
                <?php
                if ($Director) {
                    echo "<input type='hidden' value='" . $Director['idDirector'] . "' name='idDirector'>";
                }
                ?>
            </div>
        </form>
    </section>
<footer>
    Gmail de Contacte:
    jmunozt@esliceu.net
    dfonsecar@esliceu.net
</footer>
</body>



</html>