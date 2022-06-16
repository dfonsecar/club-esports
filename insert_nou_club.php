<!DOCTYPE html>
<html>

<?php include "../includes/head.php" ?>

<body>
    <? include "../includes/header.php" ?>

    <?php
    $Club = null;
    if (isset($_GET['idClub'])) {
        $id_Club = $_GET['idClub'];
        $query = "SELECT * FROM Club WHERE idClub = '$id_Club' ";
        $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
        $Club = mysqli_fetch_assoc($result);
    }

    $action = '../scripts/insert_nou_club.php';
    if ($Club != null) {
        $action = '../scripts/update_club.php';
    }
    ?>
    
     <section class="mb-5 mt-5">
         <h1 class="mb-5 mt-5">
            <?php
            if ($Club == null) {
                echo 'NOU CLUB';
            } else {
                echo 'EDITA EL CLUB ';
            }
            ?>
            </h1>

         </section>
            <section>
         <form action="<?= $action ?>" method="POST">
            <div class="form-group">
                <fieldset>
                    <h6>Nom</h6>
                    <input value="<?= $Club['Nom']; ?>" type="text" name="Nom" maxlength="200" placeholder="Nom" required />
                </fieldset>
            </div>
            <div class="form-group">
                <fieldset>
                    <h6>Any</h6>
                    <input value="<?= $Club['Any']; ?>" type="date" name="Any" maxlength="100" placeholder="Any" required />
                </fieldset>
            </div>
            <div>
                <small id="emailHelp" class="form-text text-muted">No compartirem les dades amb ningú.</small>
            </div>
            <div class="form-group">
                <fieldset class="fieldset_enviar">
                    <button type="submit" class="button_crear">Enviar</button>
                </fieldset>
            </div>
            <div class="form-group">
                <?php
                if ($Club) {
                    echo "<input type='hidden' value='" . $Club['idClub'] . "' name='idClub'>";
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