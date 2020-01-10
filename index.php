<?php
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
    case "home";
        home();
        break;
    case"displaySnows";
        displaySnows();
        break;
    case"Login";
        Login();
        break;
}




?>
