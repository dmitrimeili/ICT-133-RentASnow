<?php
/*
 * Author : Dmitri Meili
 * Date : 19.03.2020
 * Project : Rent a snow
 */
ob_start();
$title = "displaySnowsDetails";
?>

<img src="view/images/snow/<?= $snow["photo"] ?>"><br>
<span class="font-weight-bold ">Marque : <?= $snow["brand"] ?><br>Modèle : <?= $snow['model'] ?></span><br>
<?php
$content = ob_get_clean();
require_once "view/gabarit.php";
?>
