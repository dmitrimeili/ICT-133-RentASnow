
<?php
/*
 * Author : Dmitri Meili
 * Date : 24.01.2020
 * Project : Rent a snow
 */
ob_start();
$title = "personalPage";
?>
<h1>Vos information personnel</h1>
<br><br>
<h2>Prénom: <?= $_SESSION["username"] ?></h2>

<h3> Inscrit à la newsletter : <?php//permet d'afficher les info personnel d' un utilisateur
    if ($_SESSION["wantnews"] == true) {
        ?>
        Oui
    <?php } else {
        ?>
        Non
    <?php } ?></h3>
<form action="index.php?action=deleteUser" method="post">
    <input type="submit" class="btn-outline-danger" value="Supprimez profil">
</form>

<?php
$content = ob_get_clean();
require_once "view/gabarit.php";

?>
