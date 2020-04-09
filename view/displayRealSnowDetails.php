<?php
/*
 * Author : Dmitri Meili
 * Date : 19.03.2020
 * Project : Rent a snow
 */
ob_start();

$title = "displaySnowDetails";
require_once "view/helpers/helpers.php";
?><br>
    <div class="text-center"><img src="view/images/snow/<?= $snow["photo"] ?>" class="detailedimg"><br>
        <span class="font-weight-bold ">Marque : <?= $snow["brand"] ?><br>Modèle : <?= $snow['model'] ?></span><br>
    </div>
<div>

    <table class="table ">
        <tr>
            <th>Code</th>
            <td><?= $snow['code'] ?></td>
        </tr>
        <tr>
            <th>Taille</th>
            <td><?= $snow['length'] ?></td>
        </tr>
        <tr>
            <th>État</th>
            <td><?= getTextState($snow['state']) ?></td>
        </tr>
        <tr>
            <th>Disponible</th>
            <td><?= $snow['available'] ? 'Oui' : 'Non' ?></td>
        </tr>
    </table>

   
</div>

<?php
$content = ob_get_clean();
require_once "view/gabarit.php";
?>
