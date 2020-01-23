<?php
/*
* Author : Dmitri Meili
* Date : 22.01.2020
* Project : Rent a snow
*/
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
    var_dump($_SESSION);
}

function displaySnows()
{

    $snows = getSnows();
    require_once "view/displaySnows.php";
}

function Login()
{

    require_once "view/Login.php";
}


function tryLogin($username,$password)
{
    $users = getUsers();

    foreach ($users as $user){
        if ($user["username"]==$username && $user["password"]==$password){
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["birthdate"] =$user["birthdate"];
            $_SESSION["wantnews"] =$user["wantnews"];
            $_SESSION["date-inscription"] =$user["date-inscription"];
            $_SESSION["employe"] =$user["employe"];

            home();
        }
    }
}
function disconnect(){
    session_unset();
    require_once "view/disconnect.php";
}

?>
