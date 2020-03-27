<?php
/*
* Author : Dmitri Meili
* Date : 22.01.2020
* Project : Rent a snow
*/
require_once 'model/model.php';

// This file contains nothing but functions

function home()//fonction qui renvoie au menu
{
    $news = getAllNews();
    require_once 'view/home.php';
    var_dump($_SESSION);
}

function displaySnows()//fonction qui prend les valeurs d'un fichier json et renvoie au snows
{
    $snows = getAllSnowTypes();
    require_once "view/displaySnows.php";
}

function displaySnowsDetails($id)
{
    $snow = getSnow($id);
    require_once 'view/displaySnowsDetails.php';
}

function Login()//fonction qui renvoie au Login
{
    require_once "view/Login.php";
}


function tryLogin($email, $password)//fonction pour se connecter
{
    $user = getUserByEmail($email);
    var_dump($user); die;
    $_SESSION['user'] = $user;
    if (password_verify($password. $user['password'])) {
        unset($user['password']);// pour des raison de sécurité , on ne peut pas
    }

    foreach ($users as $user) {
        //if the username and the password are true then the user can connect on to his account
        if ($user["firstname"] == $username && $user["password"] == $password) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["birthdate"] = $user["birthdate"];
            $_SESSION["wantnews"] = $user["wantnews"];
            $_SESSION["date-inscription"] = $user["date-inscription"];
            $_SESSION["employe"] = $user["employe"];

            home();
        }
    }
}

//disconnect from the session
function disconnect()
{
    session_unset();
    require_once "view/disconnect.php";
}

function personalPage()// fonction qui affiche les information perso
{
    require_once "view/personalPage.php";
}

function deleteUser()// fonction pour effacer un utilisateur
{
    $users = getUsers();
    foreach ($users as $x => $user) {
        if ($user["username"] == $_SESSION["username"]) {
            unset($users[$x]);

            file_put_contents('model/dataStorage/Users.json', json_encode($users));

        }
    }
    disconnect();
}

function inscription()
{//fonction pour inscrire un nouvel utilisateur pas encore terminer
    require_once "view/inscription.php";

}
function tryInscription(){

}

?>
