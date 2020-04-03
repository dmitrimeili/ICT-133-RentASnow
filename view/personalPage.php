
<?php
/*
 * Author : Dmitri Meili
 * Date : 24.01.2020
 * Project : Rent a snow
 */
ob_start();
$title = "personalPage";
?>
<h1>Information personnel de <?= $_SESSION['user']['firstname']?></h1>
<br><br>
<h2>Prénom: <?= $_SESSION["user"]['firstname'] ?></h2>
<h2>Nom: <?= $_SESSION["user"]['lastname'] ?></h2>
<h3> Inscrit à la newsletter : </h3>
<form action="index.php?action=deleteUser" method="post">
    <input type="submit" class="btn-outline-danger" value="Supprimez profil">
</form>


<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>
