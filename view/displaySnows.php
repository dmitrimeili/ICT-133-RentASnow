<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
ob_start();
$title = "displaySnows";


?>
    <div class="snows">
<?php foreach ($snows as $snow) {
    //affiche les snow disponible
    ?>
        <hr>
    <div class="snow">
        <img src="view/images/snow/<?= $snow["photo"] ?>" class="listimage""><br>
        <span class="font-weight-bold ">Marque : <?= $snow["brand"] ?><br>Modèle : <?= $snow['model'] ?></span><br>
        <a href="index.php?action=displaySnowDetails&id=<?=$snow['id'] ?>" class="btn btn-outline-success">Détails</a>
    </div>


    <?php
}
?> </div>


<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>