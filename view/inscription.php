<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
ob_start();
$title="inscription";

?>
<h1>Inscription</h1>
<form action="index.php?action=inscription" method="POST">

    <!-- zone d inscription -->
    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
    <br>
    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
    <br>
    <label><b>Mot de passe</b></label>
    <input type="date" name="birthdate" required>
    <br>
    <label><b>Êtes-vous un employé ?</b></label>
    <input type="checkbox" name="employe">
    <br>
    <label><b>Voulez-vous vous inscrire à la newsletter ?</b></label>
    <input type="checkbox" name="wantnews">
    <br>
    <input type="submit" id='submit' value='Inscription' >
    <br>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
