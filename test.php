<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */

session_start();

  $_SESSION["username"]="toto";

die("Username =".$_SESSION["username"]);
?>
