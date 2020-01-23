<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
session_start();
require "controler/controler.php";
/*
$username = "toto";
$_SESSION["toto"]=$username;

echo "<a href='test.php'>";
die($_SESSION["toto"]);
*/



$page = $_GET["action"];
switch($page){

    case"displaySnows";
        displaySnows();
        break;
    case"Login";
        Login();
        break;
    case"tryLogin";
        $username = $_POST["username"];
        $password = $_POST["password"];
        tryLogin($username,$password);
        break;
    case"disconnect";
        disconnect();
        break;
    case"personalPage";
        PersonalPage();
        break;
    default:
        home();
        break;
}




?>
