<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
//fonction qui change les boutons quand on se connecte ou se deconnecte
function btLogin()
{
    if (isset($_SESSION["user"])) {
        return "<li><a href='index.php?action=disconnect'>Disconnect </a></li>
                <li><a href='index.php?action=personalPage'>" . $_SESSION['user']['firstname'] . "</a></li>";
    } else {
        return "<li><a href='index.php?action=Login'>Login</a></li>
                <li><a href='index.php?action=inscription'>Inscription</a></li>";
    }
}

function getFlashMessage()
{
    if (isset($_SESSION['flashmessage'])) {
        $message =$_SESSION['flashmessage'];
        unset($_SESSION['flashmessage']);
        return "<div class='alert alert-info'>".$message."</div>";

    }
}

?>