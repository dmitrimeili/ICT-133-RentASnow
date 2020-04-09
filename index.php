<?php
/*
 * Author : Dmitri Meili
 * Date : 22.01.2020
 * Project : Rent a snow
 */
session_start();
require "controler/controler.php";

$page = $_GET["action"];
switch ($page) {

    case"displaySnows";
        displaySnows();
        break;
    case"displaySnowDetails";
        $snowid = $_GET['id'];
        displaySnowDetails($snowid);
        break;
    case"displayRealSnowDetails";
        $snowid = $_GET['id'];
        displayRealSnowDetails($snowid);
        break;
    case"Login";
        Login();
        break;
    case"tryLogin";
        $email = $_POST['email'];
        $password = $_POST["password"];
        tryLogin($email, $password);
        break;
    case"disconnect";
        disconnect();
        break;
    case"personalPage";
        PersonalPage();
        break;
    case"deleteUser";
        deleteUser();
        break;
    case"inscription";
        inscription();
        break;
    case"tryInscription";
        tryInscription();
        break;
    default:
        home();
        break;
}


?>
