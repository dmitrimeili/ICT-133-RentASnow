<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
ob_start();
$title="inscription";

?>
<div class="container">
<h1>Inscription</h1>
<form action="index.php?action=tryInscription" method="POST">

    <label><b>Prénom</b></label>
    <input type="text" placeholder="Entrer votre prénom" name="firstname" required>
    <br>
    <label><b>Nom</b></label>
    <input type="text" placeholder="Entrer votre nom" name="lastname" required>
    <br>
    <label><b>E-mail</b></label>
    <input type="email" placeholder="Entrer votre E-mail" name="email" required>
    <br>
    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
    <br>
    <label><b>Numéro de télléphone</b></label>
    <input type="text" name="phonenumber" required>
    <br>
    <label><b>Êtes-vous un employé ?</b></label>
    <input type="checkbox" name="type">
    <br>
    <input type="submit" value='Connexion'>
</form>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
