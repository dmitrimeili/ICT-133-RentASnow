<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */

function btLogin(){
    if(isset($_SESSION["username"])){
        return "<li><a href='index.php?action=disconnect'>Disconnect</a></li><li><a href='index.php?action=personalPage'>".$_SESSION["username"]."</a></li>";
    } else {
        return "<li><a href='index.php?action=Login'>Login</a></li><li><a href='index.php?action=inscription'>Inscription</a></li>";
    }
}
?>