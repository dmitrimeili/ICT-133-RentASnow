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


function tryLogin($username, $password)
{
    $users = getUsers();

    foreach ($users as $user) {
        //if the username and the password are true then the user can connect on to his account
        if ($user["username"] == $username && $user["password"] == $password) {
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

function personalPage()
{
    require_once "view/personalPage.php";
}

function deleteUser()
{
    $users = getUsers();
    foreach ($users as $x => $user) {
        if($user["username"]==$_SESSION["username"]){
            unset($users[$x]);

            file_put_contents('model/dataStorage/Users.json', json_encode($users));

        }
    }
    disconnect();
}
function inscription(){
    require_once "view/inscription.php";
    
}

?>
