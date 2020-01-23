<?php
ob_start();
$title="displaySnows";

?>
<div class="span12">
    <h1>Les Snowboards</h1>
    <?php foreach ($snows as $snow) { ?>
        <div class="row mt-4">
            <table border="1px">
                <tr>
                    <td>
                        <div class="col-2"><?= $snow['model'] ?></div>
                    </td>
                    <td>
                        <div class="col-2"><?= $snow['marque'] ?></div>
                    </td>
                    <td>
                        <div class="col-8"><img src="view/images/<?= $snow['smallimage'] ?>"></div>
                    </td>
                    <td>
                        <div class="col-2"><?= $snow['dateretour'] ?></div>
                    </td>
                    <td>
                        <div class="col-2"><?= $snow['disponible'] ?></div>
                    </td>
                    <td>
                        <button><a href="index.php?action=detailsnow&snow=<?= $snow['id'] ?>">Détails</a></button>
                    </td>
                    <td>
                        <button><a href="index.php?action=detailsnow">Louer</a></button>
                    </td>
                <tr>
            </table>
        </div>
    <?php } ?>
</div>




<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>