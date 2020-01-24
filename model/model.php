<?php

function getNews()//fonction qui permet d'aller extraire des donné d' un fichier json"valable pour les deux suivante"
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"),true);
}
function getUsers(){
    return json_decode(file_get_contents("model/dataStorage/Users.json"),true);
}
?>
