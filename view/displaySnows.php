<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
ob_start();
$title = "displaySnows";
$snows = getSnows();
?>

<?php foreach ($snows as $snow)
    if ($snow["disponible"] == true ) {
        ?>
        <hr>
        <img src="view/images/snow/<?= $snow["smallimage"] ?>"><br>
        <?= $snow["marque"] ?> <?= $snow["modele"] ?><br>
        <h2>Disponible</h2>

    <?php } else { ?>
        <hr>
        <img src="view/images/snow/<?= $snow["smallimage"] ?>"><br>
        <?= $snow["marque"] ?> <?= $snow["modele"] ?><br>
        <h2>Indisponible</h2>
    <?php } ?>


<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>