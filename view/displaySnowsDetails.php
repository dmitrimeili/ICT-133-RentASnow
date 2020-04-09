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
<div class="text-center"><img src="view/images/snow/<?= $snowtype["photo"] ?>" class="detailedimg"><br>
    <span class="font-weight-bold ">Marque : <?= $snowtype["brand"] ?><br>Modèle : <?= $snowtype['model'] ?></span><br>
</div>
<div>
    <?php if (count($snows) > 0) { ?>
        <h4>Nous avons <?= count($snows) ?> snows de ce type</h4>
        <table class="table ">
            <tr>
                <th>Code</th>
                <th>Taille</th>
                <th>État</th>
                <th>Disponible</th>
            </tr>
            <?php foreach ($snows as $snow) { ?>
                <tr class="clickable" data-href="?action=displayRealSnowDetails&id=<?=$snow['id']?>">
                    <td><?= $snow['code'] ?></td>
                    <td><?= $snow['length'] ?></td>
                    <td><?= getTextState($snow['state']) ?></td>
                    <td><?= $snow['available'] ?'Oui':'Non'?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <h4>Nous avons malheuresement aucun snow de ce type</h4>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require_once "view/gabarit.php";
?>
