<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
ob_start();
$title = "displaySnows";


?>

<?php foreach ($snows as $snow) {
    //affiche les snow disponible
    ?>
    <div>
        <hr>
        <img src="view/images/snow/<?= $snow["photo"] ?>"><br>
        Marque : <?= $snow["brand"] ?><br>Modèle : <?= $snow['model'] ?><br>
        <a href="index.php?action=displaySnowDetails&id=<?$snow['id'] ?>" class="btn btn-outline-success">Détails</a>

    </div>

    <?php
}
?>


<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>