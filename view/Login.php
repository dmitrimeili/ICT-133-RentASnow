
<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
ob_start();
$title="login";

?>
<div id="container">
    <!-- zone de connexion -->

    <form action="index.php?action=tryLogin" method="POST">
        <h1>Connexion</h1>

        <label for="username"><b>email</b></label>
        <input id="email" type="text" placeholder="Entrer votre identifiant" name="email" required>
        <br>
        <label><b>Mot de passe</b></label>
        <input id="password" type="password" name="password" placeholder="Entrer le mot de passe" required>
        <br>
        <input type="submit" id='submit' value='Connection' >
        <br>
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>